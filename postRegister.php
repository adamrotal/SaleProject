<?php
	require "database/getFromDB.php";
	require "database/insertToDB.php";
	require "config.php";

	$fullName = $_POST["fullName"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$fullAddress = $_POST["fullAddress"];
	$postalCode = $_POST["postalCode"];
	$phoneNumber = $_POST["phoneNumber"];

	$query = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
	
	$result = selectDataFromDB($query);
	
	if($result != null){
		$redirectUrl = 'Location: http://'.$ServerRoot.'/getRegister.php';
		header($redirectUrl);
		die();
	}else{
		$query = "INSERT INTO user(fullName,username,email,password,fullAddress,postalCode,phoneNumber) VALUES('$fullName','$username','$email','$password','$fullAddress','$postalCode','$phoneNumber')";

		$result = insertDataToDB($query);
		$redirectUrl = 'Location: http://'.$ServerRoot.'/getCatalog.php?id_active='.$result;
		header($redirectUrl);
		die();	
	}
?>