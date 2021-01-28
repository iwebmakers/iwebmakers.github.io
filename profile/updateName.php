<?php include "init.php";
      include "authorized.php";

      $profile     = new profile;
      $validations = new validations;
      $dbQueries   = new dbQueries;
      if(isset($_POST['updateNameBtn'])){
         
        $validations->validate("fullName", "Full Name", "required|alphabetic");
        if($validations->run()){

            $fullName = $validations->input('fullName');
            $userId   = $_SESSION['userId'];
            if($dbQueries->Query("UPDATE users SET fullName = ? WHERE id = ? ", [$fullName, $userId])){

                $_SESSION['nameUpdated'] = "Your name has been updated successfully";
                header("location: dashboard.php");

            }


        }


      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>Update Name</title>
</head>
<body class="bgColor">

<?php include "components/nav.php"; ?>
<div class="container">
   <div class="dashboard">
   <?php include "components/card.php"; ?>
   <div class="content">
    <?php include "components/updateNameForm.php"; ?>
   </div>
   <!-- Close content -->
   </div>
   <!-- Close dashoard -->
</div>
<!-- Close container -->

</body>
</html>