<?php
	session_start();
	$_SESSION["user"] = "fajar";
	$redirectUrl = 'Location: http://'.$_SERVER['HTTP_HOST'].'/getCatalog.php';
	header($redirectUrl);
	die();
?>