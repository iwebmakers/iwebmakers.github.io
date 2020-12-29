<?php
?>

<!DOCTYPE HTML>
<html>

<head>

	<title>Login to iWebmakers</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#121E2C">
	<link rel="stylesheet" href="../assets/css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/jquery/jquery-3.5.1.min.js"></script>
	<script src="../assets/jquery/jquery-ui-1.12.1/jquery-ui.js"></script>

</head>

<body style="background: #121E2C;">

	<center>
		<div class="container">
			<div class="col-lg-12">
				<div class="video-main-div" style="background:#121E2C;padding:50px;">
					<div class="row">
						<p><?php
						$datalb = "";
						if (!empty($_GET["user"])){
							$datalb = $_GET["user"];
						}?></p>
						<h1 class="" style="color:white">Login to See this Content <?php echo ", ".$datalb?></h1><br><br>
					</div>
				</div>
			</div>
		</div>
		<!-- Display Current Time and Date in C# -->

		<!-- Create a Modern Dashboard in C# Part II -->
	</center>

	<!-- External script -->
	<script src="assets\js\main.js" charset=""></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
	<script>
		// $('logbtn').click(function(){
		// 	$(document).load( "register-form.php" );
		// });
	</script>

</body>

</html>