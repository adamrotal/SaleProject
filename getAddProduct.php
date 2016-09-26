<?php
	require "config.php";
	if (!isset($_GET["id_active"])) {
		$redirectUrl = 'Location: http://'.$ServerRoot.'/getLogin.php';
		header($redirectUrl);
		die();
	}
	require $DocumentRoot."/html/addproduct.php";
?>