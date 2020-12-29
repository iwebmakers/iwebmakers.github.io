<?php include "init.php"; ?>
<?php if(isset($_SESSION['userId'])): ?>
<?php header("location: dashboard.php"); ?>
<?php endif; ?>

<?php 

$validations = new validations;
$dbQueries   = new dbQueries;

if(isset($_POST['loginBtn'])){

    $validations->validate("email", "Email", "required");
    $validations->validate("password", "Password", "required");
    if($validations->run()){
     
        $email = $validations->input("email");
        $password = $validations->input("password");
        if($dbQueries->Query("SELECT * FROM users WHERE email = ? ", [$email])){
         
            if($dbQueries->rowCount() > 0){
                // Email is found
                $row = $dbQueries->fetch();
                $id = $row->id;
                $dbPassword = $row->password;
                $status = $row->status;
                if($status == 0){
                    // Email is not verified
                    $_SESSION['notVerified'] = "Sorry first confirm your email and then login";
                    header("location: message.php");
                } else {
                    if(password_verify($password, $dbPassword)){
                    //  Password matched
                     $_SESSION['userId'] = $id;
                     $_SESSION['loader'] = true;
                     header("location: dashboard.php");

                    } else {
                        // Password not matched
                        $validations->errors['password'] = "Sorry invalid password";
                    }
                }
 
           } else {
            //    Email is not found
               $validations->errors['email'] = "Sorry invalid email";
           }

        }


    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>Login</title>
</head>
<body>

<?php include "components/nav.php"; ?>

<section id="form">
<?php include "components/loginForm.php"; ?>
</section>

</body>
</html>