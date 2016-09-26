<?php
	require "include.php";

	$user = authentification();
	require $DocumentRoot."/html/catalog.php";
	
?>