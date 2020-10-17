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

        <!-- Sidebar -->
        <?php 
        
        require('sidebar.php');

        ?>

        <!-- Navbar hast to design -->
        <!-- <div class="nav">
            <h1>This for navbar</h1>
        </div> -->
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
                        <form action="inc/add-new.inc.php" method="post" class="addnewform">

                            <?php 
            
                            require 'inc/function.inc.php';
                            $errors = $_GET;
                            if(!empty($errors)) {
                                display_error($errors);
                            }
                            
                            ?>



                            <div class="row">
                                <label for="#"><i class="material-icons">account_box</i>First Name:</label>
                                <input type="text" name="first_name" 
                                <?php 

                                if(isset($_GET['first_name'])) {
                                    echo 'value="' . $_GET['first_name'] . '"';
                                } 
                                else {
                                    echo 'placeholder="Tharindu"';
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
                                    echo 'placeholder="Gihan"';
                                }
                                
                                ?>
                                >
                            </div>

                            <div class="row">
                                <label for="#"><i class="material-icons">mail</i>Email Address:</label>
                                <input type="text" name="email"
                                <?php 
                                
                                if(isset($_GET['email'])) {
                                    echo 'value="' . $_GET['email'] . '"';
                                } 
                                else {
                                    echo 'placeholder="gihan@gmail.com"';
                                }
                                
                                ?>
                                > 
                            </div>
                            <div class="row">
                                <label for="#"><i class="material-icons">lock</i>Password:</label>
                                <input type="password" name="password" placeholder="Anjelo@1998">
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



