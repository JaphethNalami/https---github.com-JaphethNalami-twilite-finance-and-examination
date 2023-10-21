<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teacher Registration</title>
	<link rel="stylesheet" type="text/css" href="registration.css">
	<link rel="icon" href="talogo2.png" type="image/icon type">
</head>
<body id="reg3">
	<div class="container">
		<?php 
			if(isset($_SESSION['status']))
			{
				echo $_SESSION['status'];
				unset($_SESSION['status']);
			}
		?>
		<form action="tregistration.php" method="post">
			<h2 class="form-title">Registration</h2>
			<div class="content">
				<div class="input-box">
					<label for="id">National ID</label>
					<input type="Number" name="id" placeholder="Enter your National ID" maxlength="8">
				</div>
				<div class="input-box">
					<label for="staff_no">Staff Number</label>
					<input type="text" name="staff_no" placeholder="Enter Staff Number">
				</div>
				<div class="input-box">
					<label for="name">Name</label>
					<input type="text" name="name" placeholder="Enter your Name">
				</div>
				<div class="input-box">
					<label for="phone">Phone Number</label>
					<input type="tel" name="phone" placeholder="Enter your Phone Number" maxlength="10">
				</div>
				<div class="input-box">
					<label for="email">Email</label>
					<input type="email" name="email" placeholder="Enter your Email">
				</div>
				<div class="input-box">
					<label for="password">Password</label>
					<input type="Password" name="password" placeholder="Enter your Password">
				</div>
				<div class="input-box">
					<label for="confirm_password">Confirm Password</label>
					<input type="Password" name="confirm_password" placeholder="Confirm your Password">
				</div>
				<div class="alert">
					<p>By clicking Register you agree to our Terms and Conditions.</p>
				</div>
				<div class="button-container">
					<br><br><input type="submit" name="submit" id="button3" value="Register">
				</div>
				<div class="alert">
					<p>Already have an account? <a href="teacherlogin.php" style="text-decoration: none; color: #fff;">Login</a></p>
				</div>
		</form>
	</div>
</body>
</html>