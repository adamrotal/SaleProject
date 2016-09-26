<?php
	session_start();
	$_SESSION["user"] = "fajar";
	$redirectUrl = 'Location: http://'.$ServerRoot.'/getCatalog.php';
	header($redirectUrl);
	die();
?>