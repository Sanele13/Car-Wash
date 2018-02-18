<?php
	//name | last_name | password | profile_pic | email | number

	//get data
	$name = $_POST['name'];
	$last_name = $_POST['last_name'];
	$password = $_POST['password'];
	$profile_pic = $_FILES['profile_pic']['name']; //
	$email = $_POST['email'];
	$number = $_POST['number'];
	//path: ../images/profile/'.$name.'/'.$profile_pic;
	mkdir('../images/profile/'.$name.'/');
	//save image
	if( $_FILES['profile_pic']['name'] != "" ){
		copy( $_FILES['profile_pic']['tmp_name'], '../images/profile/'.$name.'/'.$profile_pic ) or die( "Could not copy file!");
	}
	//store data
	$conn = mysqli_connect("ec2-23-21-101-174.compute-1.amazonaws.com","rxtgqfxfcogpjk","d5644497df9db5ba0662be23d640c1dab93d7bfb4aad01cc23c3061bcb4ba2fa","d338a782pecr9b"); //connect to server and select db
	$statement = "insert into user_details(name,last_name,password,profile_pic,email,number) values ('{$name}','{$last_name}','{$password}','{$profile_pic}','{$email}','{$number}')";//query
	$query = mysqli_query($conn, $statement);

	//$conn->mysql_close();

?>
