<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../css/frontPage.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="container">
		<center><img class="logo" src="../aset/logoText.png"></center>
		<h2>Please Register</h2>
		<hr>
		<form action="postRegister.php">
			<b>Full Name</b><br>
			<input type="text" name="fullname"><br>
			<b>Username</b><br>
			<input type="text" name="username"><br>
			<b>Email</b><br>
			<input type="text" name="email"><br>
			<b>Password</b><br>
			<input type="password" name="password"><br>
			<b>Confirm Password</b><br>
			<input type="password" name="confirmpassword"><br>
			<b>Full Address</b><br>
			<input type="text" name="address"><br>
			<b>Postal Code</b><br>
			<input type="text" name="postalcode"><br>
			<b>Phone Number</b><br>
			<input type="text" name="phonenumber"><br>

			<br><br>
			<input type="submit" value="Register">
		</form>
		<p><b>Already registered? Login <a href="#">here</a></b></p>
	</div>
	

</body>
</html>