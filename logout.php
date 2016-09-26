<?php
	require "config.php";
	$redirectUrl = 'Location: '.$ServerRoot.'/getLogin.php';
	header($redirectUrl);
	die();
?>