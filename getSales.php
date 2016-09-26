<?php
	require "config.php";
	if (!isset($_GET["id_active"])) {
		$redirectUrl = 'Location: '.$ServerRoot.'/getLogin.php';
		header($redirectUrl);
		die();
	}
	require $DocumentRoot."/html/sales.php";
?>