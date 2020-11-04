<?php require_once 'controllers/authControllers.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/login.css" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous" ></script>
	<title>Document</title>
</head>
<body>

	<div class="card card-3">
		<div class="raw">
			<ul class="list-unstyled multi-steps">
			    <li class="first">Send</li>
			    <li class="second select">Check</li>
			    <li class="third">Reset</li>
			 </ul>
	  	</div>
	  	<h1>Password Reset Email Sent </h1>
	  	<div class="image">
	  		<img src="preview.gif" alt="">
	  	</div>
			
			<div class="alert successful" role="alert">
         		<p>An email has been sent to your rescue email address, <strong><?php echo $_SESSION['email'];?></strong>. Follow the directions in the email to reset your password. </p>
         	</div>
		</div>
	

</body>
</html>