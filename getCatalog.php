<?php
	require "database/insertToDB.php";
	require "database/getFromDB.php";
	require "config.php";
	if (isset($_GET["id_active"])) {
		$id = $_GET["id_active"];
		$query = "SELECT * FROM user WHERE id = '$id'";
		
		$result = selectDataFromDB($query);

		if ($result == null) {
			$redirectUrl = 'Location: '.$ServerRoot.'/getLogin.php';
			header($redirectUrl);
			die();			
		} else {
			$result = $result->fetch_assoc();
		}

		require $DocumentRoot."/html/catalog.php";
	} else {
		$redirectUrl = 'Location: '.$ServerRoot.'/getLogin.php';
		header($redirectUrl);
		die();
	}
?>