<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $ServerRoot;?>/css/frontPage.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="container">
		<center><img class="logo" src="<?php echo $ServerRoot;?>/aset/logoText.png"></center>
		<h2>Please Register</h2>
		<hr>
		<form action="postRegister.php" method="post">
			<b>Full Name</b><br>
			<input class="formValidation" type="text" name="fullName"><br>
			<b>Username</b><br>
			<input class="formValidation" type="text" name="username"><br>
			<b>Email</b><br>
			<input type="text" name="email"><br>
			<b>Password</b><br>
			<input class="formValidation" type="password" name="password"><br>
			<b>Confirm Password</b><br>
			<input class="formValidation" type="password" name="confirmpassword"><br>
			<b>Full Address</b><br>
			<textarea class="formValidation" name="fullAddress"></textarea><br>
			<b>Postal Code</b><br>
			<input class="formValidation" type="text" name="postalCode"><br>
			<b>Phone Number</b><br>
			<input class="formValidation" type="text" name="phoneNumber"><br>

			<br><br>
			<input type="submit" value="Register">
		</form>
		<p><b>Already registered? Login <a href="<?php echo $ServerRoot;?>/getLogin.php">here</a></b></p>
	</div>
	

</body>
</html>