<!DOCTYPE html>
<html>
	<head>
		<title>Create Account</title>
		<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
		<style type="text/css">
			.login{
				display: none;
			}
		</style>
	</head>
<body>
	<?php 
		//session_start();
		include("../templates/header.php");
		include('../templates/menu.php');
	 ?>
	<div class = "reg">
		<form action="index.php" method = "POST" enctype="multipart/form-data">
			<input name = "name" type = "text" placeholder = "Name" class="reg_input" /><br/><br/>
			<input name = "last_name" type = "text" placeholder = "Last name" class="reg_input" /><br/><br/>
			<input name = "number" type = "text" placeholder = "Cell Number" class="reg_input" /><br/><br/>
			<input name = "email" type = "text" placeholder = "Email Address" class="reg_input" /><br/><br/>
			<input name = "password" type = "password" placeholder = "Password" class="reg_input" /><br/><br/>
			<input name = "conf-password" type = "password" placeholder = "Confirm Password" class="reg_input" /><br/><br/>
			Select profile image: <input name = "profile_pic" type = "file" /><br/><br/><br/>
			<input id = "reg_button" name = "submit" type = "submit" value="Sign Up">
		</form><br/>
			
	</div>
</body>
</html>