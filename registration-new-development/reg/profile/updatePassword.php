<?php
include "init.php";
include "authorized.php";
$profile = new profile;
$validations = new validations;
$dbQueries   = new dbQueries;
if(isset($_POST['updatePasswordBtn'])){

    $validations->validate("currentPassword", "Current Password", "required");
    $validations->validate("newPassword", "New Password", "required|min_len|7");
    $validations->validate("confirmPassword", "Confirm Password", "required");
    if($validations->run()){
   
        $currentPassword = $validations->input("currentPassword");
        $newPassword     = $validations->input('newPassword');
        $confirmPassword = $validations->input('confirmPassword');
        if($newPassword !== $confirmPassword){
            $validations->errors['confirmPassword'] = "Confirm Password does not matched";
        } else {
 
            $userId = $_SESSION['userId'];
            if($dbQueries->Query("SELECT password FROM users WHERE id = ? ", [$userId])){

                $row = $dbQueries->fetch();
                $dbPassword = $row->password;
                if(password_verify($currentPassword, $dbPassword)){
                    
                    $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    if($dbQueries->Query("UPDATE users SET password = ? WHERE id = ? ", [$newPassword, $userId])){

                        $_SESSION['newPasswordUpdated'] = "Your password has been updated successfully";
                        header("location: dashboard.php");

                    }

                } else {
                    $validations->errors['currentPassword'] = "Current Password is wrong";
                }

            }

        }
    
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>Update Password</title>
</head>
<body class="bgColor">

<?php include "components/nav.php"; ?>
<div class="container">
<div class="dashboard">
<?php include "components/card.php"; ?>
<div class="content">
<?php include "components/updatePasswordForm.php"; ?>
</div>
<!-- Close content -->
</div>
<!-- Close dashboard -->
</div>
<!-- Close container  -->

</body>
</html>