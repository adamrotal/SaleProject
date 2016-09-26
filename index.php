<?php
	session_start();
	if(isset($_SESSION["user"])){
		$redirectUrl = 'Location: http://'.$ServerRoot.'/getCatalog.php';
	}else{
		$redirectUrl = 'Location: http://'.$ServerRoot.'/getLogin.php'; 
	}
	header($redirectUrl);
	die();
?>