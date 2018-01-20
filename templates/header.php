<div class = "header">
	<div class = "logo">
		<!--img src = ""/-->
	</div>
	<div class = "login">
		<?php 
			
			if (isset($_SESSION['username'])) {
				echo "Hello ".$_SESSION['username'];
			} else {
				echo '

				<form action="login.php">
					<span style="color: white;font-weight: bold;">Username</span>
					<input type="text" name="username"/><br/>
					<span style="color: white;font-weight: bold;">Password</span>
					<input type="password" name="password"/><br/><br/>
				</form>'; 
			}
			



		?>

	</div>
</div>