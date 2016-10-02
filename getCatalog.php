<?php
	
	require "include.php";

	$user = authentification();
	
	if(isset($_GET['keyword'])){

	}else{
		
	}
	$produks = catalogDefault();

	


	require $DocumentRoot."/html/catalog.php";
	
?>