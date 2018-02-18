
<?php 
//test database queries

//connect database


//start a session

//login class
$array =(new Login("Zukiswa", "sanele"))->connect(); 
print_r($array);
session_start();
$_SESSION['username']=$array[0];
$_SESSION['profile_pic']=$array[3];
echo "<br/>".$_SESSION['profile_pic'];
/**
* 
*/
class Login{
	var $username;
	var $password;
	var $data_array=array();
	function __construct($username, $password)
	{
		$this->username=$username;
		$this->password=$password;
	}

	public function getData(){

		return $data_array;
	}

	public function setPicName($value)
	{
		$pic =$value;
	}
	public function connect()
	{
		# code...
			$conn = mysqli_connect("localhost","root","zukiswa","car_wash");
			$statement = "SELECT * FROM user_details where password='{$this->password}' and name = '{$this->username}'";
			$query = mysqli_query($conn, $statement);
			//$result = mysqli_result($query);
			$row_cnt = mysqli_num_rows($query);
			$data = mysqli_fetch_row($query);

			return $data;
	}
}
 ?>