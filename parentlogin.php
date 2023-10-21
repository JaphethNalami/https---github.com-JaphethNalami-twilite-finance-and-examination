<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parent Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="icon" href="talogo2.png" type="image/icon type">
</head>
<body>
	<section id="plogin">
		<div class="form-box">
			<div class="form-value">
				<form action="pchecklogin.php" method="post"> 
					<h2>Login</h2>
					<div class="inputbox">
						<ion-icon name="mail-outline"></ion-icon>
						<input type="email" name="email" required>
						<label>Email</label>
					</div>
					<div class="inputbox">
						<ion-icon name="lock-closed-outline"></ion-icon>
						<input type="Password" name="pass" required>
						<label>Password</label>
					</div>
					<div class="forget">
						<label><a href="forget.html">Forget Password</a></label>
					</div>
					<input id="login" type="submit" name="" value="Login">
					<?php 
					if(isset($_SESSION['status']))
					{
					echo $_SESSION['status'];
					unset($_SESSION['status']);
					}
					?>
					<div class="register">
						<p>Dont have an account <a href="parentregister.php">Register</a></p>
					</div>
				</form>
			</div>
		</div>
	</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>