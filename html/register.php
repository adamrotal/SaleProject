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
			<b>Full Name</b><br>
			<div class="validationInput">
				<input class="formValidation" type="text" name="fullName" oninput="inputValid('fullName', 'requiredRegisterFullName')">
				<span id="requiredRegisterFullName" class="tooltip">Required</span>
			</div>
			<br>
			<b>Username</b><br>
			<div class="validationInput">
				<input class="formValidation" type="text" name="username" oninput="inputValid('username', 'requiredRegisterUsername')">
				<span id="requiredRegisterUsername" class="tooltip">Required</span>
			</div>
			<br>
			<b>Email</b><br>
			<div class="validationInput">
				<input type="text" name="email" onchange="inputEmailValid('email', 'requiredRegisterEmailFormat')" oninput="inputValid('email', 'requiredRegisterEmail')">
				<span id="requiredRegisterEmail" class="tooltip">Required</span>
				<span id="requiredRegisterEmailFormat" class="tooltip emailFormat">Email not valid</span>
			</div>
			<br>
			<b>Password</b><br>
			<div class="validationInput">
				<input class="formValidation" type="password" name="password" oninput="inputValid('password', 'requiredRegisterPassword')">
				<span id="requiredRegisterPassword" class="tooltip">Required</span>
			</div>
			<br>
			<b>Confirm Password</b><br>
			<div class="validationInput">
				<input class="formValidation" type="password" name="confirmpassword" oninput="inputValid('confirmpassword', 'requiredRegisterConfirmPass')">
				<span id="requiredRegisterConfirmPass" class="tooltip">Required</span>
			</div>
			<br>
			<b>Full Address</b><br>
			<div class="validationInput">
				<textarea class="formValidation" name="fullAddress" oninput="inputValid('fullAddress', 'requiredRegisterFullAddress')"></textarea>
				<span id="requiredRegisterFullAddress" class="tooltip">Required</span>
			</div>
			<br>
			<b>Postal Code</b><br>
			<div class="validationInput">
				<input class="formValidation" type="text" name="postalCode" oninput="inputValid('postalCode', 'requiredRegisterPostalCode')">
				<span id="requiredRegisterPostalCode" class="tooltip">Required</span>
			</div>
			<br>
			<b>Phone Number</b><br>
			<div class="validationInput">
				<input class="formValidation" type="text" name="phoneNumber" onchange="inputNumberValid('phoneNumber', 'requiredRegisterPhoneNumberOnly')" oninput="inputValid('phoneNumber', 'requiredRegisterPhoneNumber')">
				<span id="requiredRegisterPhoneNumber" class="tooltip">Required</span>
				<span id="requiredRegisterPhoneNumberOnly" class="tooltip numberonly">Number only</span>
			</div>
			<br>

			<br><br>
			<input type="submit" value="Register" onclick="validationRegisterButton(event)">
		</form>
		<p><b>Already registered? Login <a href="<?php echo $ServerRoot;?>/getLogin.php">here</a></b></p>
	</div>
	

</body>
</html>