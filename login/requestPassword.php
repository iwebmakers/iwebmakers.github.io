<?php include "init.php";
if(isset($_SESSION['userId'])):

  header("location: dashboard.php");

endif;
$validations = new validations;
$dbQueries   = new dbQueries;
$emailObj    = new email;
if(isset($_POST['requestPassword'])){

  $validations->validate("email", "Email", "required");
  if($validations->run()){

    $email = $validations->input("email");
    if($dbQueries->Query("SELECT * FROM users WHERE email = ? ", [$email])){
      echo("<script>console.log('PHP: done-- " . $email . "');</script>");

      if($dbQueries->rowCount() > 0){
        echo("<script>console.log('PHP: done-row- ');</script>");

        // Email is found
        $row = $dbQueries->fetch();
        $userId = $row->id;
        $name   = $row->fullName;
        $code   = password_hash(rand(), PASSWORD_DEFAULT);
        $url    = "http://" . $_SERVER['SERVER_NAME'] . "/profile/forgotPassword.php?forgot=".$code;
        echo("<script>console.log('PHP: done-declares- ');</script>");

        if($dbQueries->Query("INSERT INTO forgotpassword (userId, code) VALUES (?,?)", [$userId, $code])){
          echo("<script>console.log('PHP: done-forgot insert query- " . $userId . "');</script>");

        if($emailObj->sendEmail($name, $email, $url, "FORGOT", "Forgot password request")){
          echo("<script>console.log('PHP: done-email- ');</script>");

          $_SESSION['forgotRequest'] = "Please check your email we have sent you an email";
          echo("<script>console.log('PHP: done-session- ');</script>");
          header("location: message.php");
          echo("<script>console.log('PHP: done-header-mesage- ');</script>");

        }

        }

      } else {
        // Email not found
        
        $validations->errors['email'] = "Sorry your email is not found";
      }

    }

  }

}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>Forgot password request</title>
</head>
<body>

<?php include "components/nav.php"; ?>

<section id="form">
    <?php include "components/requestPasswordForm.php"; ?>
</section>

</body>
</html>