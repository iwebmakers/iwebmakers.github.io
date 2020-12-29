<?php

require_once 'connection.php';
// session_start();
// session_destroy();
session_start();

if(isset($_SESSION["user_login"]))	//check condition user login not direct back to index.php page
{
	header("location: ../logged-index.php");
}

if(isset($_REQUEST['btn_login']))	//button name is "btn_login" 
{
	$username	=strip_tags($_REQUEST["txt_username_email"]);	//textbox name "txt_username_email"
	$email		=strip_tags($_REQUEST["txt_username_email"]);	//textbox name "txt_username_email"
	$password	=strip_tags($_REQUEST["txt_password"]);			//textbox name "txt_password"
		
	if(empty($username)){						
		$errorMsg[]="please enter username or email";	//check "username/email" textbox not empty 
	}
	else if(empty($email)){
		$errorMsg[]="please enter username or email";	//check "username/email" textbox not empty 
	}
	else if(empty($password)){
		$errorMsg[]="please enter password";	//check "passowrd" textbox not empty 
	}
	else
	{
		try
		{
			$select_stmt=$db->prepare("SELECT * FROM tbl_user WHERE username=:uname OR email=:uemail"); //sql select query
			$select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));	//execute query with bind parameter
			$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
			
			if($select_stmt->rowCount() > 0)	//check condition database record greater zero after continue
			{
				if($username==$row["username"] OR $email==$row["email"]) //check condition user taypable "username or email" are both match from database "username or email" after continue
				{
					if(password_verify($password, $row["password"])) //check condition user taypable "password" are match from database "password" using password_verify() after continue
					{
						$_SESSION["user_login"] = $row["user_id"];	//session name is "user_login"
						$loginMsg = "Successfully Login...";		//user login success message
						header("refresh:2; ../logged-index.php");			//refresh 2 second after redirect to "welcome.php" page
					}
					else
					{
						$errorMsg[]="wrong password";
					}
				}
				else
				{
					$errorMsg[]="wrong username or email";
				}
			}
			else
			{
				$errorMsg[]="Account Doesn't Exist, Create a new account";
			}
		}
		catch(PDOException $e)
		{
			$errorMsg[]="Request Error: "+$e->getMessage()+".";
		}		
	}
}
?>

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
            <li class="active"><a href="http://www.onlyxcodes.com/2019/04/login-and-register-script-in-php-pdo.html">Back to Tutorial</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		
		<?php
		if(isset($errorMsg))
		{
			foreach($errorMsg as $error)
			{
			?>
				<div class="alert alert-danger">
					<strong><?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
		if(isset($loginMsg))
		{
		?>
			<div class="alert alert-success">
				<strong><?php echo $loginMsg; ?></strong>
			</div>
        <?php
		}
		?>   
			<center><h2>Login Page</h2></center>
			<form method="post" class="form-horizontal">
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Username or Email</label>
				<div class="col-sm-6">
				<input type="text" name="txt_username_email" class="form-control" placeholder="enter username or email" />
				</div>
				</div>
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Password</label>
				<div class="col-sm-6">
				<input type="password" name="txt_password" class="form-control" placeholder="enter passowrd" />
				</div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit" name="btn_login" class="btn btn-success" value="Login">
				</div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				You don't have a account register here? <a href="register.php"><p class="text-info">Register Account</p></a>		
				</div>
				</div>
					
			</form>
			
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>