<?php
include "init.php";
if(isset($_SESSION['userId'])):

  header("location: dashboard.php");

endif;
$validations = new validations;
$dbQueries   = new dbQueries;
$emailObj    = new email;
echo("<script>console.log('PHP: done-classcalls- ');</script>");


if(isset($_POST['signup'])){

  $validations->validate("fullName", "Full Name", "required|alphabetic");
  $validations->validate("email", "Email", "required|uniqueEmail|users");
  $validations->validate("password", "Password", "required|min_len|7");
  echo("<script>console.log('PHP: done-validations- ');</script>");

  if($validations->run()){

     $fullName = $validations->input('fullName');
     $email    = $validations->input('email');
     $password = $validations->input('password');
     $password = password_hash($password, PASSWORD_DEFAULT);
     $status   = 0;
     $code     = password_hash(time(), PASSWORD_DEFAULT);
     $url      = "http://" . $_SERVER['SERVER_NAME'] . "/profile/verify.php?confirmation=" . $code;
     echo("<script>console.log('PHP: done-declares- ');</script>");

     if($dbQueries->Query("INSERT INTO users (fullName, email, password, status) VALUES (?, ?, ?, ?)", [$fullName, $email, $password, $status])){
      echo("<script>console.log('PHP: done-insert-user- ');</script>");

      if($dbQueries->Query("INSERT INTO email_confirmation(email, confirmationCode) VALUES (?, ?)", [$email, $code])){
        echo("<script>console.log('PHP: done-isert-confirm-email- ');</script>");

        if($emailObj->sendEmail($fullName, $email, $url, "CONFIRM", "Please confirm your email")){
          echo("<script>console.log('PHP: done-send-email- ');</script>");

          $_SESSION['accountCreated'] = "Your account has been created please check your email";
          echo("<script>console.log('PHP: done-session-add-acc-created- ');</script>");

          header("location: message.php");
          echo("<script>console.log('PHP: done-header- ');</script>");

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
    <title>Create new account</title>
  </head>
  <body>
<?php include "components/nav.php"; ?>
    <!-- Close nav -->

    <section id="form">
      <?php include "components/signupForm.php"; ?>
      <!-- Close form-section -->
    </section>
    <!-- Close form -->
  </body>
</html>

