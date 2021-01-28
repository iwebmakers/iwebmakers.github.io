<?php include "init.php"; ?>
<?php
include "authorized.php";
$profile = new profile;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/header.php"; ?>
    <title>Dashboard</title>
</head>
<body class="bgColor">
  <?php if(isset($_SESSION['loader'])): ?>
<div class="loader">
<div class="loader--section">
<div class="loader--element">
  <span class="loader--el"></span>
  <span class="loader--el"></span>
  <span class="loader--el"></span>
  <span class="loader--el"></span>
  <span class="loader--el"></span>
</div>
<!-- Close loader--element -->
</div>
<!-- Close loader--section -->
</div>
<!-- Close loader -->
<?php endif; unset($_SESSION['loader']);?>
<?php include "components/nav.php"; ?>

<div class="container">
  <div class="dashboard">
   <?php include "components/card.php"; ?>
   <div class="content">
   <?php include "components/content.php"; ?>
   </div>
   <!-- Close content -->
  </div>
  <!-- Close dashboard -->
</div>
<!-- Close container -->

<script>

const loader = document.querySelector(".loader");
setTimeout(() => {
  
  loader.style.display = "none";

}, 5000);

</script>

</body>
</html>