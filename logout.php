<?php
	require "config.php";
	session_start();
	session_unset();
	$redirectUrl = 'Location: '.$ServerRoot.'/getLogin.php';
	header($redirectUrl);
	die();
?>