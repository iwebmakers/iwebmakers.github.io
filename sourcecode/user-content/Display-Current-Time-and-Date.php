<?php require_once '../user/connection.php';
				
				session_start();

				if(!isset($_SESSION['user_login']))	//check unauthorize user not access in "welcome.php" page
				{
					header("location:../access-denied.php");
				}?>

<!DOCTYPE HTML>
<html>

<head>

	<title>Source Codes | iweb makers</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#121E2C">
	<link rel="stylesheet" href="../assets/css/sub-pages.css">
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
	<script src="../assets/jquery/jquery-3.5.1.min.js"></script>
	<script src="../assets/jquery/jquery-ui-1.12.1/jquery-ui.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>

	<!-- start main div-->
	<div class="main-div">
		<h2 class="main-title"> How to Display Current (Running) Time and Date in C#</h2>
		<ul class="breadcrumb">
			<li style="margin-left: 30px;"><a href="#">Home</a></li>
			<li><a href="#">Source Codes</a></li>
			<li>How to Display Current (Running) Time and Date in C#</li>
		</ul>

		<div class="video-container">
			<iframe src="https://www.youtube.com/embed/Qkuo3fm5ngA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="video-buttons-div">
			<p class="video-div-text">Download the Source File containing the project Folder</p>
			<button class="video-main-button button-animation button-animation"> Download </button>
			<p class="video-div-text">Viwe and Copy Sourec Code used in this Project </p>
			<a href=""><button class="video-main-button button-animation button-animation"> View Code </button></a>
		</div>

		<br>
		<!-- start video decriotion -->
		<div class="video-containt-div">
			<p class="video-div-text"> How to Display Current (Running) Date and Time in C# or material design
				application in c# window form. Need some ideas or knowledge to Display Current Date and Time in C#. This
				tutorial is for you </p>
		</div>
		<!-- start code  Explaination-->
		<h2 class="main-title"> Code Explaination</h2>
		<div class="video-code-div">
			<h2 class="main-title"> Step 1) Start Timer</h2>
			<div class="video-code-div-inside">
				<p> private void Form1_Load(object sender, EventArgs e) </p>
				<p> { </p>
				<p> &emsp; &emsp; timer1.Start(); </p>
				<p> } </p>
			</div>
			<p class="video-div-text" style="margin:3%;"> Starting the timer at the form load to update the time and
				date
				each secound in the program </p>
		</div>

		<div class="video-code-div">
			<h2 class="main-title"> Step 2) Print Date and Time in Label </h2>
			<div class="video-code-div-inside">
				<p>private void timer1_Tick(object sender, EventArgs e)</p>
				<p>{</p>
				<p> &emsp; &emsp; label1.Text = DateTime.Now.ToLongTimeString();</p>
				<p> &emsp; &emsp; label2.Text = DateTime.Now.ToLongDateString();</p>
				<p> } </p>
			</div>
			<p class="video-div-text" style="margin:3%;"> Starting th timer at the form load to update the time and date
				each secound in the program </p>
		</div>
	</div>


	<!-- External script -->
	<script src="../assets/js/main.js" charset=""></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

</body>

</html>