<?php
include "init.php";
include "authorized.php";
$profile = new profile;
$validations = new validations;
$dbQueries   = new dbQueries;

if(isset($_POST['bioBtn'])){
  
    $validations->validate("bio", "Biography", "required");
    if($validations->run()){

        $bio = $validations->input("bio");
        $userId = $_SESSION['userId'];
        if($dbQueries->Query("UPDATE users SET bio = ? WHERE id = ? ", [$bio, $userId])){

            $_SESSION['bioSaved'] = "Your biography has been saved successfully";
            header("location: dashboard.php");

        }

    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>Add/Update Bio</title>
</head>
<body class="bgColor">

 <?php include "components/nav.php"; ?>
 <div class="container">
<div class="dashboard">
<?php include "components/card.php"; ?>
<div class="content">
<?php include "components/addBioForm.php"; ?>
</div>
<!-- Close content -->
</div>
<!-- Close dashboard -->
 </div>
 <!-- Close container -->

</body>
</html>