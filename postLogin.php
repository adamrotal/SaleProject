<?php
	require "database/getFromDB.php";
	require "database/insertToDB.php";
	require "config.php";

	$name = $_POST["email"];
	$password = $_POST["password"];

	$query = "SELECT * FROM user WHERE (username = '$name' OR email = '$name') AND password = '$password'";
	
	$result = selectDataFromDB($query);
	
	if($result == null){
		$redirectUrl = 'Location: '.$ServerRoot.'/getLogin.php';
		header($redirectUrl);
		die();
	}else{
		$result = $result->fetch_assoc();
		$redirectUrl = 'Location: '.$ServerRoot.'/getCatalog.php?id_active='.$result['id'];
		header($redirectUrl);
		die();	
	}
?>