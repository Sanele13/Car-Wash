<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>
<body>
	<?php 
		//session_start();
		include("../templates/header.php");
		include('../templates/menu.php');
	 ?>
	 <div class="container-in-body">
	 	<img width = "100px" height = "100px" src="<?php echo '../images/profile/'.$_SESSION['username'].'/'.$_SESSION['profile_pic']; ?>" >
	 	<div class = "">

	 	</div>>
	 </div>
	<!--footer-->
	<?php 
		include("../templates/footer.php");

	?>
</body>
</html>