<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $ServerRoot;?>/css/frontPage.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo $ServerRoot;?>/javascript/javascript.js"></script>
</head>
<body>
	<div class="container">
		<center><img class="logo" src="<?php echo $ServerRoot;?>/aset/logoText.png"></center>
		<h2>Please Login</h2>
		<hr>
		<form id="myFormLogin" action="postLogin.php" method="post" name="loginForm">
			<b>Email or Username</b><br>
			<div class="validationInput">	
				<input class="formValidation" type="text" name="email" oninput="inputValid('email', 'requiredLoginEmail')">
				<span id="requiredLoginEmail" class="tooltip">Required</span>
			</div>
			<br>
			<b>Password</b><br>
			<div class="validationInput">
				<input class="formValidation" type="password" name="password" oninput="inputValid('password', 'requiredLoginPassword')">
				<span id="requiredLoginPassword" class="tooltip pass">Required</span>
			</div>
			<br><br>
			<input type="submit" value="LOGIN" onclick="validationLoginButton(event)">
		</form>
		<p><b>Don't have an account yet? Register <a href="<?php echo $ServerRoot;?>/getRegister.php">here</a></b></p>
	</div>
	

</body>
</html>