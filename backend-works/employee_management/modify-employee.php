<?php 
    
    require 'inc/connection.php';
    $user_id = '';
    if(isset($_GET['user_id'])) {
        //getting the user information
        
        $user_id = mysqli_real_escape_string($connection, $_GET['user_id']);
        $query = "SELECT * FROM users WHERE id = {$user_id} LIMIT 1";
    
        $result_set = mysqli_query($connection, $query);
    
        if($result_set) {
            // Check num of rows
            if(mysqli_num_rows($result_set) == 1) {
                // user found
                $result = mysqli_fetch_assoc($result_set);
                $first_name = $result['first_name'];
                $last_name = $result['last_name'];;
                $email = $result['email'];    
            }
            else {
                // user not found
                header("Location: employee.php?err=user_not_found");
                exit();
            }
        }
        else {
            // Query unsuccessful
            header("Location: employee.php?err=query_failed");
            exit();
        }
    }



?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
</head>

<body>




    <div class="wrapper">

        <!-- Sidebar Design -->
        <?php 
            require('sidebar.php');
        ?>

        <!-- Navbar hast to design -->
        
        <!-- Table design -->
        <div class="content">
            <div class="tablecard">
                <div class="card">
                    <div class="cardheader">
                        <div class="options">
                            <h4>Add New Employee 
                            <span>
                                <a href="employee.php" class="addnew"><i class="material-icons">arrow_back</i>Back To Employee Table</a>  
                            </span>
                        </h4>  
                            
                        </div>
                        <p class="textfortabel">Complete Following Details</p>
                    </div>
                    <div class="cardbody">
                        <form action="inc/modify-employee.inc.php" class="addnewform" method="post">
                        <?php 
                        require 'inc/function.inc.php';
        
                        $errors = $_GET;
                        if(!isset($_GET["user_id"])) {
                            if(!empty($errors)) {
                                display_error($errors);
                            }
                        }
                        else {
                            $user_id = $_GET["user_id"];
                            if(!empty($errors)) {
                                $arr=array_diff($errors,[$user_id]);
                                $len = sizeof($arr);
                                if($len != 0){
                                    display_error($arr);
                                }
                            }
                        }
                        
                        ?>

                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

                        <div class="row">
                            <label for="#"><i class="material-icons">account_box</i>First Name:</label>
                            <input type="text" name="first_name"
                            <?php 
                                if(isset($_GET['first_name'])) {
                                    echo 'value="' . $_GET['first_name'] . '"';
                                } 
                                else {
                                    echo 'value='.$first_name;
                                }
                            ?>
                            >
                        </div>
                        <div class="row">
                            <label for="#"><i class="material-icons">account_box</i>Last Name:</label>
                            <input type="text" name="last_name"
                            <?php 
                                if(isset($_GET['last_name'])) {
                                    echo 'value="' . $_GET['last_name'] . '"';
                                } 
                                else {
                                    echo 'value='.$last_name;
                                }
                            ?>
                            >
                        </div>
                        <div class="row">
                            <label for="#"><i class="material-icons">mail</i>Email Address:</label>
                            <input type="email" name="email"
                            <?php 
                                if(isset($_GET['email'])) {
                                    echo 'value="' . $_GET['email'] . '"';
                                } 
                                else {
                                    echo 'value='.$email;
                                }
                            
                            ?>
                            >
                        </div>
                        <div class="row">
                            <label for="#"><i class="material-icons">lock</i>Password:</label>
                            <div class="ch_password">
                                <span class="change">**********</span>
                                <a href="change-password.php?user_id=<?php echo $user_id ?>" class="change_password">Change Password</a>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="button">
                                <button class="save" name="submit">Save</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    
</body>
</html>



