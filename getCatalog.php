<?php
	session_start();
	if (!isset($_GET["id_active"])) {
		$redirectUrl = 'Location: http://'.$_SERVER['HTTP_HOST'].'/getLogin.php';
		header($redirectUrl);
		die();
	}
	require $_SERVER["DOCUMENT_ROOT"]."/html/catalog.php";
?>