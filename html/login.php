<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $ServerRoot;?>/css/frontPage.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
		<center><img class="logo" src="<?php echo $ServerRoot;?>/aset/logoText.png"></center>
		<h2>Please Login</h2>
		<hr>
		<form action="postLogin.php" method="post">
			<b>Email or Username</b><br>
			<input type="text" name="email" required><br>
			<b>Password</b><br>
			<input type="password" name="password" required>
			<br><br>
			<input type="submit" value="LOGIN">
		</form>
		<p><b>Don't have an account yet? Register <a href="<?php echo $ServerRoot;?>/getRegister.php">here</a></b></p>
	</div>
	

</body>
</html>