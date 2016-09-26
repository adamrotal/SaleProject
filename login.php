<?php
	require "config.php";
	session_start();
	$_SESSION["user"] = "fajar";
	$redirectUrl = 'Location: '.$ServerRoot.'/getCatalog.php';
	header($redirectUrl);
	die();
?>