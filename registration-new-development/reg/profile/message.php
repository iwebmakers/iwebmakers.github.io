<?php include "init.php"; ?>
<?php
$messages = new messages;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include "components/header.php"; ?>
    <title>Create new account</title>
  </head>
  <body class="messageBg">
<?php include "components/nav.php"; ?>
    <!-- Close nav -->
     
    <div class="messageBox">
    <div class="messageBoxContainer">
    
    <?php $messages->showMessage("accountCreated", "success"); ?>

    <!-- Invalid URL error -->
   <?php $messages->showMessage("invalidURL", "error"); ?>

   <!-- Verify Email -->
   <?php $messages->showMessage("verify", "verify"); ?>

   <!-- Not verified -->
   <?php $messages->showMessage('notVerified', "error"); ?>

   <!-- Forgot password request message -->
   <?php $messages->showMessage("forgotRequest", "success"); ?>

   <!-- Wrong forgot password url -->
   <?php $messages->showMessage("forgotWrongURL", "error"); ?>

   <!-- Access Forbidden -->
   <?php $messages->showMessage("accessForbidden", "error"); ?>

   <!-- Password has been updated -->
   <?php $messages->showMessage("passwordUpdated", "success"); ?>

   <?php unset($_SESSION['requestUserId']); ?>

    </div>
    <!-- Close messageBoxContainer -->
    </div>
    <!-- Close messageBox -->

    <script>
    
    let verify = document.querySelector(".verify-box");
    setTimeout(() => {
      
      verify.classList.add("showVerfiy");

    }, 3000);
    
    </script>
  </body>
</html>