<?php

require_once "connection.php";

if(isset($_REQUEST['btn_register'])) //button name "btn_register"
{
	$username	= strip_tags($_REQUEST['txt_username']);	//textbox name "txt_email"
	$email		= strip_tags($_REQUEST['txt_email']);		//textbox name "txt_email"
    $password	= strip_tags($_REQUEST['txt_password']);
    $confpass	= strip_tags($_REQUEST['txt_confirm_password']);	//textbox name "txt_password"
	//textbox name "txt_password"
		
	if(empty($username)){
		$errorMsg[]="Please enter your Username";	//check username textbox not empty 
	}
	else if(empty($email)){
		$errorMsg[]="Please enter your Email";	//check email textbox not empty 
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errorMsg[]="Please enter a valid Email address";	//check proper email format 
	}
	else if(empty($password)){
		$errorMsg[]="Please enter a password";	//check passowrd textbox not empty
	}
	else if(strlen($password) < 7){
		$errorMsg[] = "Password must be atleast 8 characters";	//check passowrd must be 6 characters
	}
	else if($password != $confpass )
    {
        $errorMsg[] = "Passwords do not Match, Re Confirm";
    }
    else{
		try
		{	
			$select_stmt=$db->prepare("SELECT username, email FROM tbl_user 
										WHERE username=:uname OR email=:uemail"); // sql select query
			
			$select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email)); //execute query 
			$row=$select_stmt->fetch(PDO::FETCH_ASSOC);	
			
			if($row["username"]==$username){
				$errorMsg[]="Sorry username already exists";	//check condition username already exists 
			}
			else if($row["email"]==$email){
				$errorMsg[]="Sorry this email is already linked with an account";	//check condition email already exists 
			}
			else if(!isset($errorMsg)) //check no "$errorMsg" show then continue
			{
				$new_password = password_hash($password, PASSWORD_DEFAULT); //encrypt password using password_hash()
				
				$insert_stmt=$db->prepare("INSERT INTO tbl_user	(username,email,password) VALUES
																(:uname,:uemail,:upassword)"); 		//sql insert query					
				
				if($insert_stmt->execute(array(	':uname'	=>$username, 
												':uemail'	=>$email, 
												':upassword'=>$new_password))){
													
					$registerMsg="Registered Successfully..... Please Login to Proceed"; //execute query success message
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
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
				<div class="video-main-div" style="height: 600px; background:#121E2C;padding:50px;">
					<div class="row">
						<h1 class="" style="color:white">Login</h1><br><br>
					</div>
					<div class="row">
						<form method="post" class="form-horizontal">
							<div class="row">
								<input type="text" name="txt_username" class="unervisal-search-input" style="border-radius: 5px;float:none;" placeholder="Enter Username" />
								<br><br>
                            </div>
                            <div class="row">
								<input type="text" name="txt_email" class="unervisal-search-input" style="border-radius: 5px;float:none;" placeholder="Enter Email" />
								<br><br>
                            </div>
                            <div class="row">
								<input type="password" name="txt_password" class="unervisal-search-input" style="border-radius: 5px;float:none;" placeholder="Enter Password" />
								<br><br>
							</div>
							<div class="row">
								<input type="password" name="txt_confirm_password" class="unervisal-search-input" style="border-radius: 5px;float:none;" placeholder="Confirm Password" />
							</div>
							<br>
							<div class="row">
								<div class="col-lg-12 m-t-5">
									<input type="submit" style="width: 25%;" name="btn_register" class="btn btn-primary" value="Register">
								</div>
							</div><br><br>

							<div class="row">
								<p style="color: grey;">Already Have an Account?</p>
							</div>
							<div class="row">
								<a href="login-form.php">Login</a></div><br><br>
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
														if (isset($registerMsg)) {
										?>
										<div class="alert alert-success">
											<strong><?php echo $registerMsg; ?></strong>
										</div>
									<?php
														}
									?></div>
							</div>
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

</body>

</html>

