<?php
	
	require "include.php";

	$user = authentification();

	$produks = catalogDefault();


	require $DocumentRoot."/html/catalog.php";
	
?>