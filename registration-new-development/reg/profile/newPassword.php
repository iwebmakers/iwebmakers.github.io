<?php include "init.php"; ?>
<?php
if(isset($_SESSION['userId'])):

    header("location: dashboard.php");
  
  endif;
$validations = new validations;
$dbQueries   = new dbQueries;
if(isset($_POST['newPasswordBtn'])){

   $validations->validate("newPassword", "New Password", "required|min_len|7");
   $validations->validate("confirmPassword", "Confirm Password", "required");
   if($validations->run()){
     
    $newPassword = $validations->input('newPassword');
    $confirmPassword = $validations->input('confirmPassword');
    if($newPassword !== $confirmPassword){
        $validations->errors['confirmPassword'] = "Please confirm your password";
    } else {
        $hashPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $userId = $_SESSION['requestUserId'];
        if($dbQueries->Query("UPDATE users SET password = ? WHERE id = ? ", [$hashPassword, $userId])){
            
            $_SESSION['passwordUpdated'] = "Your password has been updated successfully now login <a href='login.php'>login</a>";
            header("location: message.php");

        }
    }

}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>New Password</title>
</head>
<body>

<?php include "components/nav.php"; ?>
<section id="form">
    <?php if(isset($_SESSION['requestUserId'])): ?>
    <?php include "components/newPasswordForm.php"; ?>
<?php else: $_SESSION['accessForbidden'] = "Access Forbidden!"; header("location:message.php");?>
<?php endif; ?>
</section>
</body>
</html>