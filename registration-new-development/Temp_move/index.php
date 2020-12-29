<?php
session_start();
if (isset($_SESSION["user_login"])){
	header("location: user/index.php");
}
?>
<!DOCTYPE HTML>
<html>

<head>

	<title>Source Codes | iweb makers</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#121E2C">
	<link rel="stylesheet" href="assets/css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
	<script src="assets/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/jquery/jquery-ui-1.12.1/jquery-ui.js"></script>

</head>

<body>
	<!-- Nav Bar ==========-->
	<header class="Top-navigation-bar">
		<div class="navigation-bar-logo">
			<a href="https://www.iwebmakers.ml">
				<img src="assets\images\logo.png" alt="Logo">
			</a>
		</div>
		<button type="button" class="navigation-bar-login-div-Toggle button-animation"><i class="fa fa-user-circle"></i></button>
		<button type="button" class="unervisal-search-button-Toggle button-animation"><i class="fa fa-search"></i></button>
		<div class="navigation-bar-search" id="navigation-bar-search-div-function">
			<input type="text" class="unervisal-search-input button-animation" id="uni-src-inp" type="search" placeholder="Search For Videos, Titles, uploaded data ect.">
			<button id="uni-btn" type="button" name="button" class="unervisal-search-button button-animation"><i class="fa fa-search"></i></button>
		</div>
		<button type="button" class="unervisal-search-button-question button-animation"> <i class="fa fa-question"></i></button>
		<div class="navigation-bar-login-div" id="navigation-bar-login-div-function">
			<a href="user/login-form.php"><button class="navigation-bar-sign-in-button button-animation">Log in</button></a>
			<a href="user/register-form.php"><button class="navigation-bar-sign-up-button button-animation">Sign Up</button></a>
		</div>
	</header>
	<!-- Nav Bar End-->

	<a id="btn-scrl-top"></a> <!-- scroll to top button -->

	<div style="height:100%; width:100%; float:left; margin-top:80px;">

		<div class="left-main-div">

			<!-- search box Start -->
			<div class="left-second-div">

				<p class="video-main-heading" style="margin:30px 7% 25px;">Search For Videos</p>
				<input type="text" class="search-box-input button-animation" onkeyup="mysearchlistFunction()" id="src-inp" type="search" placeholder="Search For Video Titles ">

				<div id="search-box-div">
					<!-- Search List -->
					<ul id="search-box-list" style="width:100%">
						<li class="src-list button-animation button-animation"><a class="src-anc" href="#">How to
								Display Current (Running) Time and Date in C#</a></li>						
					</ul>
					<!-- Search List End-->
				</div>

			</div>
			<!-- search box End -->

			<!-- build software box Start -->
			<div class="left-second-div">
				<center>
					<div style=" width:90%; margin: 30px 0px;">
						<p class="video-main-heading"> Build awesome applications</p>
						<img src="assets\images\slider-icon.png" alt="" style="	width: 60%;">
						<p class="video-sub-text" style="font-size:11px;">Our Expert team build .net software more than
							your expectation and requirement .And also we design modern and user-interface Software.
							Contact us for more details</p>
						<button class="video-main-button button-animation">Get Applications Build</button><br>
					</div>
				</center>
			</div>

			<!-- build software box End-->

			<!-- Populor Uploads Start -->
			<div class="left-second-div">
				<p class="video-main-heading" style="margin:30px 7% 15px;"> Popular Uploads</p>
				<div style=" width:90%; margin: 10px auto;">
					<ul id="search-box-list" style="width:100%">
						<li class="src-list button-animation"><a class="src-anc" href="#">How to Create Login Form in C#
								2020</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to create a Splash Screen
								in C# 2020</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to Create a Modern Flat UI
								Design Dashboard in C#</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to Create a Splash Screen
								With Custom Progress Bar in C#</a></li>
						<li class="src-no-res"><a class="src-anc" style="font-family: 'Nunito', sans-serif;" href="#">Create Crystal Report in C# </a></li>
					</ul>
				</div>
			</div>
			<!-- Populor Uploads End -->
		</div>
		<div class="right-main-div">

			<div class="temp_div">
				<div class="loginPrompt"><?php

						require_once 'user/connection.php';

						session_start();

						if (!isset($_SESSION['user_login']))	//check unauthorize user not access in "index.php" page
						{
							include "mini-pages/login-card.php";
						}
						if (isset($_SESSION['user_login']))	//check authorize user not access in "index.php" page
						{
							header("refresh:1;user/index.php");
						}

						// $id = $_SESSION['user_login'];

						// $select_stmt = $db->prepare("SELECT * FROM tbl_user WHERE user_id=:uid");
						// $select_stmt->execute(array(":uid" => $id));

						// $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

						// if (isset($_SESSION['user_login'])) {
						// 	header("location:user/index.php");
						// }
						?></div>

				<h1 class="main-title">Videos and source codes<?phpecho "session: " .$_SESSION['user_login'];?></h1>

				<div class="clear-search-div button-animation">Clear Search</div>

				<!-- Display Current Time and Date in C# -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\Display-Time-and-Date.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Wednesday 8 July 2020</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading"> How to Display Current (Running) Time and Date in C# </p>
								<p class="video-sub-text"> How to Display Current (Running) Date and Time in C# or
									material design application in c# window form. Need some ideas or knowledge to
									Display Current Date and Time in C#. This tutorial is for you</p>
								<button class="video-main-button button-animation button-animation"> Watch on
									YouTube</button>
								<button id="display_current_date_time" class="frm-content video-main-button button-animation"> Resources and Info</button>
							</td>
						</tr>
					</table>
				</div>
				

				<div class="search-one-result">
					<p class="search-one-result-heading">Thats what we Found on your Search "<span id="res-val"></span>"
					</p>
					<p class="search-one-result-sub-heading">Didn't Found what your Searching for?</p>
					<ul class="search-one-result-list">
						<li>Check for spellings</li>
						<li>Check for Unwanted Spaces</li>
						<li>Try searching on unique words</li>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<!-- External script -->
	<script src="assets\js\main.js" charset=""></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

</body>

</html>