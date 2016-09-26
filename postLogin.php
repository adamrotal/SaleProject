<?php
	require "database/getFromDB.php";
	require "database/insertToDB.php";
	require "config.php";

	$name = $_POST["email"];
	$password = $_POST["password"];

	$query = "SELECT * FROM user WHERE (username = '$name' OR email = '$name') AND password = '$password'";
	
	$result = selectDataFromDB($query);
	
	if($result != null){
		$redirectUrl = 'Location: '.$_SERVER['HTTP_HOST'].'/getRegister.php';
		header($redirectUrl);
		die();
	}else{
		$query = "INSERT INTO user(fullName,username,email,password,fullAddress,postalCode,phoneNumber) VALUES('$fullName','$username','$email','$password','$fullAddress','$postalCode','$phoneNumber')";

		$result = insertDataToDB($query);
		$redirectUrl = 'Location: '.$_SERVER['HTTP_HOST'].'/getCatalog.php?id_active='.$result;
		header($redirectUrl);
		die();	
	}
?>