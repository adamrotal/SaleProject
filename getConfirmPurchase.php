<?php
	require "include.php";

	$user = authentification();
	require $DocumentRoot."/html/confirmation_purchase.php";
?>