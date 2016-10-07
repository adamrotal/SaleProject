<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $ServerRoot;?>/css/frontPage.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo $ServerRoot;?>/javascript/javascript.js"></script>
</head>

<body>
	<div class="container">
		<center><img class="logo" src="<?php echo $ServerRoot;?>/aset/logoText.png"></center>
		<h2>Please Register</h2>
		<hr>
		<form id="myFormRegister" action="postRegister.php" method="post" name="registerForm">
			<div class="validationInput">
				<b>Full Name</b>
				<span id="requiredRegisterFullName" class="tooltip">Required</span><br>
				<input class="formValidation" type="text" name="fullName" oninput="inputValid('fullName', 'requiredRegisterFullName')">
			</div>
			<br>
			<div class="validationInput">
				<b>Username</b>
				<span id="requiredRegisterUsername" class="tooltip">Required</span>
				<input class="formValidation" type="text" name="username" oninput="inputValid('username', 'requiredRegisterUsername')"><br>
			</div>
			<br>
			<div class="validationInput">
				<b>Email</b>
				<span id="requiredRegisterEmail" class="tooltip">Required</span>
				<span id="requiredRegisterEmailFormat" class="tooltip emailFormat">Email not valid</span><br>
				<input type="text" name="email" onchange="inputEmailValid('email', 'requiredRegisterEmailFormat')" oninput="inputValid('email', 'requiredRegisterEmail')">
			</div>
			<br>
			<div class="validationInput">
				<b>Password</b>
				<span id="requiredRegisterPassword" class="tooltip">Required</span><br>
				<input class="formValidation" type="password" name="password" oninput="inputValid('password', 'requiredRegisterPassword')">
			</div>
			<br>
			<div class="validationInput">
				<b>Confirm Password</b>
				<span id="requiredRegisterConfirmPass" class="tooltip">Required</span><br>
				<input class="formValidation" type="password" name="confirmpassword" oninput="inputValid('confirmpassword', 'requiredRegisterConfirmPass')">
			</div>
			<br>
			<div class="validationInput">
				<b>Full Address</b>
				<span id="requiredRegisterFullAddress" class="tooltip">Required</span><br>
				<textarea class="formValidation" name="fullAddress" oninput="inputValid('fullAddress', 'requiredRegisterFullAddress')"></textarea>
			</div>
			<br>
			<div class="validationInput">
				<b>Postal Code</b>
				<span id="requiredRegisterPostalCode" class="tooltip">Required</span><br>
				<input class="formValidation" type="text" name="postalCode" oninput="inputValid('postalCode', 'requiredRegisterPostalCode')">
			</div>
			<br>
			<div class="validationInput">
				<b>Phone Number</b>
				<span id="requiredRegisterPhoneNumber" class="tooltip">Required</span>
				<span id="requiredRegisterPhoneNumberOnly" class="tooltip">Number only</span><br>
				<input class="formValidation" type="text" name="phoneNumber" onchange="inputNumberValid('phoneNumber', 'requiredRegisterPhoneNumberOnly')" oninput="inputValid('phoneNumber', 'requiredRegisterPhoneNumber')">
			</div>
			<br>

			<br><br>
			<input type="submit" value="Register" onclick="validationRegisterButton(event)">
		</form>
		<p><b>Already registered? Login <a href="<?php echo $ServerRoot;?>/getLogin.php">here</a></b></p>
	</div>
	

</body>
</html>