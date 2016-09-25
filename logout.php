<?php
	session_start();
	session_unset();
	$redirectUrl = 'Location: http://'.$_SERVER['HTTP_HOST'].'/getLogin.php';
	header($redirectUrl);
	die();
?>