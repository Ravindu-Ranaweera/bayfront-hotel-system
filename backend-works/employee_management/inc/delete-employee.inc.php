<?php 

require 'connection.php';
require 'function.inc.php';



if(isset($_GET['user_id'])) {
    //getting the user information
    
    $user_id = mysqli_real_escape_string($connection, $_GET['user_id']);

    
        // Delete the user 
        // Update is_deleted coloumn 0 to 1
        $query = "UPDATE users SET is_deleted =1 WHERE id = {$user_id} LIMIT 1";

        $result = mysqli_query($connection, $query);
        
        if($result) {
            // user deleted
            header("Location: ../employee.php ?user_delete=success");
            exit();
        }
        else {
            header("Location: ../employee.php?err=delete_failed");
            exit();
        }
    }

else {
    header("Location: ../employee.php");
    exit();
}



    

