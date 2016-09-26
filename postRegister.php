<?php
	require "database/getFromDB.php";
	require "database/insertToDB.php";

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
		$redirectUrl = 'Location: http://'.$_SERVER['HTTP_HOST'].'/getRegister.php';
		header($redirectUrl);
		die();
	}else{
		$query = "INSERT INTO user(fullName,username,email,password,fullAddress,postalCode,phoneNumber) VALUES('$fullName','$username','$email','$password','$fullAddress','$postalCode','$phoneNumber')";

		$result = insertDataToDB($query);
		$redirectUrl = 'Location: http://'.$_SERVER['HTTP_HOST'].'/getCatalog.php?id_active='.$result;
		header($redirectUrl);
		die();	
	}
?>