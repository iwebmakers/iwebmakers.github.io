<?php
include "init.php";
if(isset($_SESSION['userId'])):

    header("location: dashboard.php");
  
  endif;
$dbQueries = new dbQueries;

if(isset($_GET['forgot'])){
 
    $forgotCode = $_GET['forgot'];
    if($dbQueries->Query("SELECT * FROM forgotpassword WHERE code = ? ", [$forgotCode])){
        if($dbQueries->rowCount() > 0){
            // Code is found
            $row = $dbQueries->fetch();
            $userId = $row->userId;
            $_SESSION['requestUserId'] = $userId;
            if($dbQueries->Query("DELETE FROM forgotpassword WHERE code = ? ", [$forgotCode])){

                header("location: newPassword.php");

            }

        } else {
            // Code not found
            $_SESSION['forgotWrongURL'] = "Sorry wrong forgot password request URL";
            header("location: message.php");
        }
    }


}


?>