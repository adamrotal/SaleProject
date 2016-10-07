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
			<div class="validationInput">	
				<b>Email or Username</b>
				<span id="requiredLoginEmail" class="tooltip">Required</span><br>
				<input class="formValidation" type="text" name="email" oninput="inputValid('email', 'requiredLoginEmail')">
			</div>
			<br>
			<div class="validationInput">
				<b>Password</b>
				<span id="requiredLoginPassword" class="tooltip pass">Required</span><br>
				<input class="formValidation" type="password" name="password" oninput="inputValid('password', 'requiredLoginPassword')">
			</div>
			<br><br>
			<input type="submit" value="LOGIN" onclick="validationLoginButton(event)">
		</form>
		<p><b>Don't have an account yet? Register <a href="<?php echo $ServerRoot;?>/getRegister.php">here</a></b></p>
	</div>
	

</body>
</html>