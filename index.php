<?php
	require "config.php";
	session_start();
	if(isset($_SESSION["user"])){
		$redirectUrl = 'Location: '.$ServerRoot.'/getCatalog.php';
	}else{
		$redirectUrl = 'Location: '.$ServerRoot.'/getLogin.php'; 
	}
	header($redirectUrl);
	die();
?>