<?php include "init.php";
      include "authorized.php";
      $profile = new profile;
      $validations = new validations;
      $dbQueries   = new dbQueries;
      if(isset($_POST['skillsBtn'])){

        $validations->validate("skills", "Skills", "required");
        if($validations->run()){

            $skills = $validations->input("skills");
            $userId = $_SESSION['userId'];
            if($dbQueries->Query("UPDATE users SET skills = ? WHERE id = ? ", [$skills, $userId])){

                $_SESSION['skillsSaved'] = "Your skills has been saved successfully";
                header("location: dashboard.php");

            }

        }

      }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>Add/Update Skills</title>
</head>
<body class="bgColor">

<?php include "components/nav.php"; ?>
<div class="container">
<div class="dashboard">
<?php include "components/card.php"; ?>
<div class="content">
  <?php include "components/addSkillsForm.php"; ?>
</div>
<!-- Close content -->
</div>
<!-- Close dashboard -->
</div>
<!-- Close container -->

</body>
</html>