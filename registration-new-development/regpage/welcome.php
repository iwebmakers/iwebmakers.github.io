<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Login and Register Script using PHP PDO with MySQL : onlyxcodes.com</title>
		
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
		
</head>

	<body>
	
	
	<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.onlyxcodes.com/">onlyxcodes</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="">Back to Tutorial</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	<div class="wrapper">
	<div class="container">
			
		<!-- <div class="col-lg-12">
			<center>
				<h2>
				<?php
				
				require_once 'connection.php';
				
				session_start();

				if(!isset($_SESSION['user_login']))	//check unauthorize user not access in "welcome.php" page
				{
				header("location: ../index.php");
				}
				?>
					Welcome,
				<?php
				// 		echo $row['username'];
				// }
				?>
				</h2>
					<a href="logout.php">Logout</a>
			</center>
			
		</div> -->
		
	</div>	
	</div>
										
	</body>
</html>