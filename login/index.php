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
		$array = $login->getData();
		$_SESSION['username']=$array[0];
		$_SESSION['profile_pic']=$array[3];
		header("Location:../index.php");
	}
	else{
		echo "You have entered incorrect user credentials";
	}

	class Login{
		var $name;
		var $password;
		var $pic;
		function __construct($username,$password){
			$this->name=$username;
			$this->password=$password;
		}


		function userExists(){

			$conn = mysqli_connect("localhost","root","zukiswa","car_wash");
			$statement = "SELECT * FROM user_details where password='{$this->password}' and name = '{$this->name}'";
			$query = mysqli_query($conn, $statement);
			//$result = mysqli_result($query);
			$row_cnt = mysqli_num_rows($query);
			//echo $row_cnt;
			if($row_cnt!=0){
				//get profile_pic

				return true;	
			}else{
				return false;
			}
		}

		public function getData(){
		# code...
			$conn = mysqli_connect("localhost","root","zukiswa","car_wash");
			$statement = "SELECT * FROM user_details where password='{$this->password}' and name = '{$this->name}'";
			$query = mysqli_query($conn, $statement);
			//$result = mysqli_result($query);
			$row_cnt = mysqli_num_rows($query);
			$data = mysqli_fetch_row($query);

			return $data;
		}

	}
?>