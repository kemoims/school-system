<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>sign up</title>
</head>
<body bgcolor="#68ff81">
	<NAV class="navbar navbar-default">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">
				signup
			</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active">signup</li>
			<li> <a href="subjects.php">Subjects taught</a></li>
			<li> <a href="home.php">Home</a></li>
		</ul>
	</nav>
	<div class="jumbotron">
		<form method="_GET">
			<label>First Name</label><br>
			<input type="text" name="fname" placeholder="input first name" required=""><br>
			<label>Last Name</label><br>
			<input type="text" name="lname" placeholder="input last name (optional)"><br>
			<label>Email</label><br>
			<input type="" name="email" placeholder="input your email" required=""><br>
			<label>Password</label><br>
			<input type="password" name="psd" placeholder="input your password" required=""><br>
			<label>Confirm Password</label><br>
			<input type="password" name="csd" placeholder="confirm your password" required="">
		</form>
	</div>
	<?php 
	ri=$_GET['psd'];
	a=$_GET['csd'];
	 if (ri===a) {
	 	# code...
	 	echo "";
	 }else
	 echo "Password mismatch";
	 ?>
	</body>
	</html>