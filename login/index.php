<?php 
	/*
		1. Check if the form data is legit
		2. Connect to database, and check if the user data exists
		3. If all is well, create a session and include home page
		4. Else, send error message to the user

	*/
	
		
	
	// 1. Check if the form data is legit. Check email.
		//I wont do this now. At this point, I am not really worried about security of the application
			
	//2. Connect to database, and check if the user data exists
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = new Login($username,$password);
	if($login->userExists()){
		//echo "logged in!";
		session_start();
		$_SESSION['username']=$username;
		header("Location:../index.php");
	}
	else{
		echo "You have entered incorrect user credentials";
	}

	class Login{
		var $username;
		var $password;
		function __construct($username,$password){
			$this->username=$username;
			$this->password=$password;
		}

		function userExists(){

			$conn = mysqli_connect("localhost","root","zukiswa","car_wash");
			$statement = "SELECT username FROM users where password='{$this->password}' and username = '{$this->username}'";
			$query = mysqli_query($conn, $statement);
			//$result = mysqli_result($query);
			$row_cnt = mysqli_num_rows($query);
			//echo $row_cnt;
			if($row_cnt!=0){
				return true;	
			}else{
				return false;
			}
		}

	}
?>