<?php include "init.php";
include "authorized.php";
$profile = new profile;
$uploadImages = new uploadImages;
if(isset($_POST['uploadBtn'])){

  $extensions = ['jpg','jpeg', 'png'];
  $uploadImages->uploadImg('image', $extensions);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>Upload Image</title>
</head>
<body class="bgColor">
   <?php include "components/nav.php"; ?> 
   <div class="container">
    <div class="dashboard">
    <?php include "components/card.php"; ?>
    <div class="content">
    <?php include "components/uploadImageForm.php"; ?>
    </div>
    <!-- Close content -->
    </div>
    <!-- Close dashboard -->
   </div>
   <!-- Close container  -->

   <script>
      
      function imageName(){
        
        let image = document.getElementById("myLabel").value;
        let imageName = image.split("\\");
        let index = imageName.length - 1;
        let label = document.getElementById("label");
            label.innerText = imageName[index];

      }
      
      </script>
</body>
</html>