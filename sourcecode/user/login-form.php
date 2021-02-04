<?php
require_once 'connection.php';

session_start();

if (isset($_SESSION["user_login"]))	//check condition user login not direct back to index.php page
{
	header("location: index.php");
}

if (isset($_REQUEST['btn_login']))	//button name is "btn_login" 
{
	$username	= strip_tags($_REQUEST["txt_username_email"]);	//textbox name "txt_username_email"
	$email		= strip_tags($_REQUEST["txt_username_email"]);	//textbox name "txt_username_email"
	$password	= strip_tags($_REQUEST["txt_password"]);			//textbox name "txt_password"

	if (empty($username)) {
		$errorMsg[] = "Please enter your Username or Email";	//check "username/email" textbox not empty 
	} else if (empty($email)) {
		$errorMsg[] = "Please enter your Username or Email";	//check "username/email" textbox not empty 
	} else if (empty($password)) {
		$errorMsg[] = "Please enter your Password";	//check "passowrd" textbox not empty 
	} else {
		try {
			$select_stmt = $db->prepare("SELECT * FROM tbl_user WHERE username=:uname OR email=:uemail"); //sql select query
			$select_stmt->execute(array(':uname' => $username, ':uemail' => $email));	//execute query with bind parameter
			$row = $select_stmt->fetch(PDO::FETCH_ASSOC);

			if ($select_stmt->rowCount() > 0)	//check condition database record greater zero after continue
			{
				if ($username == $row["username"] or $email == $row["email"]) //check condition user taypable "username or email" are both match from database "username or email" after continue
				{
					if (password_verify($password, $row["password"])) //check condition user taypable "password" are match from database "password" using password_verify() after continue
					{
						$_SESSION["user_login"] = $row["user_id"];	//session name is "user_login"
						$loginMsg = "Successfully Logged In...";		//user login success message
						header("refresh:1; index.php");			//refresh 2 second after redirect to "welcome.php" page
					} else {
						$errorMsg[] = "Incorrect Password";
					}
				} else {
					$errorMsg[] = "Incorrect Email";
				}
			} else {
				$errorMsg[] = "Account Does not Exist, Create an Account to continue";
			}
		} catch (PDOException $e) {
			$errorMsg[] = "Request Error: " + $e->getMessage() + ".";
		}
	}
}
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
		<div class="container center">
			<div class="col-lg-12">
				<div class="video-main-div" style="background:#121E2C;padding:50px;">
					<div class="row">
						 <?echo "Specially Welcomed for you" .$_GET["s"];?>
						<h1 class="" style="color:white">Login</h1><br><br>
					</div>
					<div class="row">
						<form method="post" class="form-horizontal">
							<div class="row">
								<input type="text" name="txt_username_email" class="unervisal-search-input" style="border-radius: 5px;float:none;" placeholder="Enter Username or Email" />
								<br><br>
							</div>
							<div class="row">
								<input type="password" name="txt_password" class="unervisal-search-input" style="border-radius: 5px;float:none;" placeholder="Enter Password" />
							</div>
							<br>
							<div class="row">
								<div class="col-lg-12 m-t-5">
									<input type="submit" style="width: 25%;" name="btn_login" class="btn btn-primary" value="Login">
								</div>
							</div><br>
							<div class="row" style="padding: 0 12%;">
								<div class="col-lg-12"><?php
														if (isset($errorMsg)) {
															foreach ($errorMsg as $error) {
														?>
											<div class="alert alert-danger">
												<strong><?php echo $error; ?></strong>
											</div>
										<?php
															}
														}
														if (isset($loginMsg)) {
										?>
										<div class="alert alert-success">
											<strong><?php echo $loginMsg; ?></strong>
										</div>
									<?php
														}
									?></div>
							</div><br><br>

							<div class="row">
								<a class="btn- btn-sm" href="register-form.php">Don't Have an Account?, Create one now.</a>
							</div><br>
						</form>
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