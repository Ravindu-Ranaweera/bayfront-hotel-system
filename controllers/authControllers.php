<?php
session_start();

require 'config/db.php';
require_once 'emailController.php';

$errors =array();
$username= "";
$email= "";

if (isset($_POST['signup-btn'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordConf = $_POST['passwordConf'];

	if(empty($username)){
		$errors['username']="username required";
	}

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['email']= "Email adress is invalid";
	}
	if(empty($email)){
		$errors['email']="email required";
	}

	if(empty($password)){
		$errors['password']="password required";
	}
	if(!(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,}$/',$password))){
		$errors['password']="password required capital, simple 8 letter";
	}
	if($password !== $passwordConf){
		$errors['password']="password not match";
	}

	$emailQuery = "SELECT * FROM user WHERE email=? LIMIT 1";
	$stmt = $conn->prepare($emailQuery);
	$stmt->bind_param('s',$email);
	$stmt->execute();
	$result= $stmt->get_result();
	$userCount = $result->num_rows;
	$stmt->close();

	if($userCount > 0){
		$errors['email']= "email exists";
	}

	if(count($errors)== 0){
		$password = password_hash($password, PASSWORD_DEFAULT);
		$token = bin2hex(random_bytes(50));
		$verified = false;

		$sql = "INSERT INTO user (name, email, verified, token, password) VALUES  (?,?,?,?,?)";
		$stmt = $conn->prepare($sql);

		$stmt->bind_param('ssiss',$username, $email, $verified, $token, $password);
		
		if ($stmt->execute()) {
			
			$user_id = $conn->insert_id;
			$_SESSION['id']= $user_id;
			$_SESSION['username']= $username;
			$_SESSION['email']= $email;
			$_SESSION['verified']= $verified;

			sendVerificationEmail($email, $token, $username);

			$_SESSION['message']= "You are now logged in";
			$_SESSION['alert-class']= "alert-succes";
			echo $_SESSION['username'];
			header('location: email-verify.php');
			exit();
			 

		}else{
			// echo $stmt->error;
			$errors['db_error']= "Database error: faild to register";
		}
	}

}



if (isset($_POST['signin-btn'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['email']= "Email adress is invalid";
	}
	if(empty($email)){
		$errors['email']="email required";
	}
	if(empty($password)){
		$errors['password']="password required";
	}
	
	if(count($errors)== 0){
		$emailQuery = "SELECT * FROM user WHERE email=? LIMIT 1";
		$stmt = $conn->prepare($emailQuery);
		$stmt->bind_param('s',$email);
		$stmt->execute();
		$result= $stmt->get_result();
		$user = $result->fetch_assoc();

		if (password_verify($password, $user['password'])){
			
			$_SESSION['id']= $user['id'];
			$_SESSION['username']= $user['name'];
			$_SESSION['email']= $user['email'];
			$_SESSION['verified']= $user['verified'];
			$_SESSION['usertype']= $user['userType'];
			$_SESSION['message']= "You are now logged in";
			$_SESSION['alert-class']= "alert-succes";

			// setcookie('email', $user['email'], time()+60*60*7 );
			header('location: index.php');
			exit();

		}else{
			$errors['login_fail']= "wrong credentials";
		}
	}

}

if (isset($_GET['logout'])) {
	session_destroy;
	unset($_SESSION['id']);
	unset($_SESSION['username']);
	unset($_SESSION['email']);
	unset($_SESSION['verified']);
	header('location: index.php');
	exit();
}
function verifyUser($token)
{
	global $conn;
	$sql= "SELECT * FROM user WHERE token ='$token' LIMIT 1";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		
		$user = mysqli_fetch_assoc($result);
		$update_query="UPDATE user SET verified=1 WHERE token='$token'";

		if (mysqli_query($conn, $update_query)) {
			$_SESSION['id']= $user['id'];
			$_SESSION['username']= $user['username'];
			$_SESSION['username']= $user['username'];
			
			$_SESSION['verified']= 1;

			$_SESSION['message']= "You are now verified user";
			$_SESSION['alert-class']= "alert-succes";
			header('location: index.php');
			exit();
		}
	}else{
		echo "not found";
	}
	
}

if (isset($_POST['frogot-password'])) {
	$email = $_POST['email'];

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['email']= "That address is not a verified primary email or is not associated with a personal user account. Organization billing emails are only for notifications";
	}
	if(empty($email)){
		$errors['email']="That address is not a verified primary email or is not associated with a personal user account. Organization billing emails are only for notifications";
	}

	if(count($errors)== 0){
		$sql= "SELECT * FROM user WHERE email= '$email' LIMIT 1";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s',$email);
		$stmt->execute();
		$result= $stmt->get_result();
		$user = $result->fetch_assoc();
		$token= $user['token'];
		$userName = $user['name'];


		sendPasswordResultLink($email, $token, $userName);

		header('location: password_message.php');
		exit();

	}

}

function resetPassword($token)
{
	global $conn;
	$sql = "SELECT * FROM user WHERE token='$token' LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$user = mysqli_fetch_assoc($result);
	$_SESSION['email']= $user['email'];
	header('location: reset_password.php');
	exit();

}

if (isset($_POST['reset-btn'])) {
	$password= $_POST['password'];
	$passwordConf= $_POST['passwordConf'];

	if(empty($password)){
		$errors['password']="password required";
	}
	if(!(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,}$/',$password))){
		$errors['password']="password required capita simple 8 letter";
	}
	if($password !== $passwordConf){
		$errors['password']="password not match";
	}
	$password = password_hash($password, PASSWORD_DEFAULT);
	$email= $_SESSION['email'];

	if(count($errors)== 0){
		$sql="UPDATE user SET password ='$password' WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header('location: login.php');
			exit(0);
		}
	}
}











if(isset($_POST['submit'])){
	$file = $_FILES['file'];
	// print_r($file);

	$filename = $_FILES['file']['name'];
	$filetmp_name = $_FILES['file']['tmp_name'];
	$filesize = $_FILES['file']['size'];
	$fileerror = $_FILES['file']['error'];
	$filetype = $_FILES['file']['type'];

	$fileExt = explode('.', $filename);
	$fileActualExt = strtolower(end($fileExt));
	echo $fileActualExt;
	$allowed = array('jpg', 'jpeg', 'png' );

	if (in_array($fileActualExt, $allowed)) {
		if ($fileerror === 0) {
			if ($filesize < 1000000) {
				$fileNewName = uniqid('', true).".".$fileActualExt;
				$path = 'uploads/'.$fileNewName;

				$sql = "INSERT INTO img (name, dir) VALUES('$fileNewName' , '$path')";
	
				if (mysqli_query($conn, $sql)) {
				      echo "New record created successfully";
				} else {
				      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				move_uploaded_file($filetmp_name, $path);


				
				 header("Location: view-room.php?uploadSuccess");
			}else{
				echo "Your file too big";
			}
		}else{
			echo "There was an error";
		}
	}else{
		echo "Cant allowed";
	}


}

?>