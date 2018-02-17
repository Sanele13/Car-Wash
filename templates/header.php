<div class = "header">
	<?php session_start(); ?>
	<div class = "logo">
		<!--img src = ""/-->
	</div>
	<div class = "login">
		<?php 
			//session_start();
			if (isset($_SESSION['username'])) {
				$link = "<a href = '' style = 'color:white'>".$_SESSION['username']."</a>";
				echo "<span style='color: white;'>"."Hello ".$link."!</span>";
				echo "<div><img style = 'height: 80px;width: 80px;border-radius: 40px;border-color: white;border-style:solid;margin:10px 0px 0px 10px' src ='http://127.0.0.1/car%20wash/images/profile/WIN_20160803_200515.jpg'></div>";
				echo "<span style='color: white;'><a href='http://127.0.0.1/car%20wash/account/' style = 'color:white'
				>Edit Profile</a></span>";
			} else {
				echo '

				<form action="http://127.0.0.1/car%20wash/login/" method="POST">
					<span style="color: white;font-weight: bold;">Username</span>
					<input type="text" name="username"/><br/>
					<span style="color: white;font-weight: bold;">Password</span>
					<input type="password" name="password"/><br/>
					<input type="submit" class = "login-button" value="Log In"/> 
					&nbsp;&nbsp;<a href="register/reg.php" style="color:white;font-size:18px">Register</a>
				</form>

				'; 
			}
			



		?>

	</div>
</div>