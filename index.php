<?php
	session_start();
	if(isset($_SESSION["user"])){
		$redirectUrl = 'Location: http://'.$_SERVER['HTTP_HOST'].'/getCatalog.php';
	}else{
		$redirectUrl = 'Location: http://'.$_SERVER['HTTP_HOST'].'/getLogin.php'; 
	}
	header($redirectUrl);
	die();
?>