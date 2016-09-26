<?php
	session_start();
	session_unset();
	$redirectUrl = 'Location: http://'.$ServerRoot.'/getLogin.php';
	header($redirectUrl);
	die();
?>