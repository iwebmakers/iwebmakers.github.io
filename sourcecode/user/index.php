<!DOCTYPE HTML>
<html>

<head>

	<title>Source Codes | iweb makers</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#121E2C">
	<link rel="stylesheet" href="../assets/css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
	<script src="../assets/jquery/jquery-3.5.1.min.js"></script>
	<script src="../assets/jquery/jquery-ui-1.12.1/jquery-ui.js"></script>

</head>

<body>
	<!-- Nav Bar ==========-->
	<header class="Top-navigation-bar">
		<div class="navigation-bar-logo">
			<a href="https://www.iwebmakers.ml">
				<img src="../assets/images/logo.png" alt="Logo">
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
		<p class="navigation-bar-sign-in-button" style="float:left;"><?php
				
				require_once 'connection.php';
				
				session_start();

				if(!isset($_SESSION['user_login']))	//check unauthorize user not access in "welcome.php" page
				{
					header("location:../index.php");
				}
				else if (isset($_SESSION['user_login'])){
				$id = $_SESSION['user_login'];
				
				$select_stmt = $db->prepare("SELECT * FROM tbl_user WHERE user_id=:uid");
				$select_stmt->execute(array(":uid"=>$id));
	
				$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
				}				
				
				if(isset($_SESSION['user_login']))
				{
				?>
					Welcome,
				<?php
						echo $row['username'];
				}
				?></p>
			<a href="logout.php"><button style="margin-right: 30px;" class="navigation-bar-sign-in-button button-animation">Log Out</button></a>
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
						<li class="src-list button-animation"><a class="src-anc" href="#">How to Create a Modern Flat UI
								Design Dashboard in C# (Part II)</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to Create a Modern Flat UI
								Design Dashboard in C# (Part I)</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to Create a Splash Screen
								With Custom Progress Bar in C#</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to Send Emails in C# with
								Modern Ui design</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to Make a Logo for Free in
								5 Minutes</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to get Free Website and
								Application Themes and Templates</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to Make Money. ($100
								Everyday)</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How To Recover Permanently
								Deleted Files For Free 2020</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to Hack a WiFi and get the
								Password</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to create a Splash Screen
								in C# 2020</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to Create Login Form in C#
								2020</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">How to Create Crystal Report
								in C#</a></li>
						<li class="src-list button-animation"><a class="src-anc" href="#">iWeb Makers Intro And Official
								Launch 2019</a></li>
						<li class="src-no-res"><a class="src-anc" style="font-family: 'Nunito', sans-serif;">No Results
								Found</a></li>
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

				<h1 class="main-title">Videos and source codes</h1>

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

				<!-- Create a Modern Dashboard in C# Part II -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\dashboard-2.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Thursday 2 July 2020</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading"> How to Create a Modern Flat UI Design Dashboard in C#
									(Part II)</p>
								<p class="video-sub-text">How to Make Modern Flat UI Design Dashboard in C# or material
									design application in c# windows form Need some ideas or a simple design to make a
									Dashboard in C#. This clean design will even work with your programming Projects or
									Assignments. This tutorial is suitable for beginners and advanced users too..</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="create-modern-dashboard-part-2" class="frm-content video-main-button button-animation"> Resources and
									Info</button>
							</td>
						</tr>
					</table>
				</div>

				<!-- Create a Modern Dashboard in C# Part I -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\dashboard.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Tuesday 30 June 2020</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading"> How to Create a Modern Flat UI Design Dashboard in C#
									(Part I)</p>
								<p class="video-sub-text">How to Make Modern Flat UI Design Dashboard in C# or material
									design application in c# windows form Need some ideas or a simple design to make a
									Dashboard in C#. This clean design will even work with your programming Projects or
									Assignments. This tutorial is suitable for beginners and advanced users too..</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="create-modern-dashboard-part-1" class="frm-content video-main-button button-animation"> Resources and
									Info</button>
							</td>
						</tr>
					</table>
				</div>

				<!-- Morder Design Splash Screen In C# -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\splash-screen2.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Monday 15 June 2020</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading"> How to Create a Splash Screen With Custom Progress Bar in
									C#</p>
								<p class="video-sub-text"> In this video let's see How to create a simple modern UI
									design splash screen in C# using Visual Studio 2015. In this video, we will create a
									splash screen with circular progress bar in Transparent Round Corners Windows Form.
								</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="modern-design-splashscreen-in-c#" class="frm-content video-main-button button-animation"> Resources and Info</button>
							</td>
						</tr>
					</table>
				</div>

				<!--  Send Emails in C# -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\Send-mail.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Friday 05 June 2020</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading"> How to Send Emails in C# with Modern Ui design</p>
								<p class="video-sub-text">In this tutorial i will show you how to send emails in C#
									using visual studio with Modern Ui design, in Windows Forms if you are new to
									programming and you are using IDE like Visual Studio to build software, This video
									has shown every works step by step.</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="send-emails-in-c#-1" class="frm-content video-main-button button-animation"> Resources and Info</button>
							</td>
						</tr>
					</table>
				</div>

				<!-- Make a Logo -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\logo-marking.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Saturday 23 May 2020</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading">How to Make a Logo for Free in 5 Minutes</p>
								<p class="video-sub-text">In this video I will show you a website where you can make
									beautiful and professional logo designs, just in few clicks. This site has hundreds
									of logo templates, where you can design a logo without any designing experience.</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="make-a-logo-free-5-mins" class="frm-content video-main-button button-animation"> Resources and Info</button>
							</td>
						</tr>
					</table>
				</div>

				<!-- Make a Logo -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\FRRE-WEB-TEMPLETS.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Friday 01 May 2020</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading">How to get Free Website and Application Themes and
									Templates</p>
								<p class="video-sub-text">In this video I will show you guys how to get free templates
									for your next website and application project. This are some free resources for
									responsive themes and templates for the front-end of your websites and application
									or web apps.</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="how-to-get-free-website-themes" class="frm-content video-main-button button-animation"> Resources and Info</button>
							</td>
						</tr>
					</table>
				</div>

				<!-- How to Make Money -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\earn-online.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Saturday 11 April 2020</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading">How to Make Money. ($100 Everyday)</p>
								<p class="video-sub-text">In this video I will show you How to Work from home and make
									an INCOME online ! There are so many ways to make money from home and make money
									online in 2020 .in this video i will show you the best for beginners.</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="how-to-make-money-$100" class="frm-content video-main-button button-animation"> Resources and Info</button>
							</td>
						</tr>
					</table>
				</div>

				<!-- Recover Permanently Deleted Files -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\DiskDigger.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Tuesday 24 March 2020</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading">How To Recover Permanently Deleted Files For Free 2020</p>
								<p class="video-sub-text">In this video I will show you How to recover deleted files,
									like photos, documents, music, videos, and more, from your hard drive, memory cards,
									USB flash drives for free.</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="recover-permanently-deleted-files-free-2020" class="frm-content video-main-button button-animation"> Resources and Info</button>
							</td>
						</tr>
					</table>
				</div>

				<!-- How to Hack a WiFi -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\xiaopan-os.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Saturday 22 Febrary 2020</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading">How to Hack a WiFi and get the Password</p>
								<p class="video-sub-text">How to hack any WiFi network easily and get the password or
									How to hack wifi. You might not have a clear knowledge about how to hack a WiFi
									network easy without using codes. This video will help you to hack any WiFi easily.
								</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="how-to-hack-wifi-get-password" class="frm-content video-main-button button-animation"> Resources and Info</button>
							</td>
						</tr>
					</table>
				</div>

				<!-- Splash Screen -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\splash-screen.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Friday 03 Janarary 2020</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading">How to create a Splash Screen in C# 2020</p>
								<p class="video-sub-text">how to make a simple splash Screen in visual studio, using C#
									with Progress Bar in Windows Forms if you are new to programming and you are using
									IDE like Visual Studio to build software, This video has shown every works step by
									step.</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="how-to-create-splashscreen-c#-2020" class="frm-content video-main-button button-animation"> Resources and Info</button>
							</td>
						</tr>
					</table>
				</div>

				<!-- Create Login Form  -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\login-screen.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Saturday 28 December 2019</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading">How to Create Login Form in C# 2020</p>
								<p class="video-sub-text">How to Make Modern Login Form in C# or material design
									application in c# window form. Need some ideas or a simple design to make a Login
									Form in C#. This clean design will even work with your programming Projects or
									Assignments.</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="create-login-form-in-c#-2020" class="frm-content video-main-button button-animation"> Resources and Info</button>
							</td>
						</tr>
					</table>
				</div>

				<!-- Create crystal report  -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\crystal-report.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Saturday 28 December 2019</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading">How to Create Crystal Reports in C# 2020</p>
								<p class="video-sub-text">!!To be changed!! --How to Make Modern Login Form in C# or material design
									application in c# window form. Need some ideas or a simple design to make a Login
									Form in C#. This clean design will even work with your programming Projects or
									Assignments.</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="how-to-create-crystal-report-c#-2020" class="frm-content video-main-button button-animation"> Resources and Info</button>
							</td>
						</tr>
					</table>
				</div>

				<!-- intro  -->
				<div class="video-main-div">
					<table>
						<tr>
							<td class="video-main-image-tab">
								<img src="assets\images\intro.png" alt="" class="video-main-image">
								<br>
								<p class="video-image-sub-text">Published on Saturday 28 December 2019</p>
							</td>
							<td class="video-main-content-tab">
								<p class="video-main-heading">iWeb Makers Intro And Official Launch 2019</p>
								<p class="video-sub-text">We Support you to build your skills, knowledge and career in
									Software and Web Designing and Development.</p>
								<button class="video-main-button button-animation"> Watch on YouTube</button>
								<button id="iwebmakers-intro-launch-2019" class="frm-content video-main-button button-animation"> Resources and Info</button>
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
	<script src="../assets/js/main.js" charset=""></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

</body>

</html>