<?php //session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
	<style type="text/css">
		h1{
			text-decoration: underline;
			text-align: center;
			color: #333;
		}
		p{
			text-align: center;
		}

	</style>
</head>
<body>
	<?php 
		//session_start();
		include("../templates/header.php");
		include('../templates/menu.php');
	 ?>
	 <div class="body-container">
		 <div class="container-in-body">
		 	<h1>Services We Offer</h1>
		 </div>

	<!--footer-->
		<?php 
			include("../templates/footer.php");

		?>
	</div>
	</body>
</html>