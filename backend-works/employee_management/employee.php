<?php 
    
    require 'inc/connection.php';
    $user_list = '';
    $search = '';

    
    // Getting the list of users
    $query = "SELECT * FROM  users WHERE is_deleted=0 ORDER BY first_name";


    
    $users = mysqli_query($connection, $query);

    //verify_query($users);  //This function also check query is correct and also inlcude this folder to top require 'inc/function.inc.php'
    if($users) {
        while($user = mysqli_fetch_assoc($users)) {
            $user_list .= "<tbody>";
            $user_list .= "<td>{$user['first_name']}</td>";
            $user_list .= "<td>{$user['last_name']}</td>";
            $user_list .= "<td>{$user['last_login']}</td>";
            $user_list .= "<td><a href=\"modify-employee.php?user_id={$user['id']}\" class=\"edit\"><i class=\"material-icons\">edit</i>Edit</a></td>";
            $user_list .= "<td><a href=\"inc/delete-employee.inc.php?user_id={$user['id']}\" onclick=\"return confirm('Are you sure?');\" class=\"delete\"><i class=\"material-icons\">delete</i>Delete</a></td>";
            $user_list .= "<tr>";
        }
    }
    else {
        echo "Database query failed"; 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
</head>

<body>




    <div class="wrapper">

        <!-- Sidebar -->
        <?php require('sidebar.php') ?>

        <!-- Navbar hast to design -->

        <!-- Table design -->
        <div class="content">
            <div class="tablecard">
                <div class="card">
                    <div class="cardheader">
                        <div class="options">
                            <h4>Emloyee Table 
                            <span>
                                <a href="add-new.php" class="addnew"><i class="material-icons">add</i>Add New</a> 
                                <a href="employee.php" class="refresh"><i class="material-icons">refresh</i>Refresh</a> 
                            </span>
                        </h4>  
                            
                        </div>
                        <p class="textfortabel">Employee View Following Table</p>
                    </div>
                    <div class="cardbody">
                        <div class="tablebody">
                            <table>
                                <thead>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Last Login</th>
                                  <th>Edit</th>
                                  <th>Delete</th>  
                                </thead>

                                <?php 
                                
                                echo $user_list; ?>
                            </table>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    
</body>
</html>



