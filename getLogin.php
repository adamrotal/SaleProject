<?php
	session_start();
	if (isset($_SESSION["user"])) {
		$redirectUrl = 'Location: http://'.$_SERVER['HTTP_HOST'].'/getCatalog.php';
		header($redirectUrl);
		die();
	}
	require $_SERVER["DOCUMENT_ROOT"]."/html/login.php";
?>