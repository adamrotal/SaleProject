<?php
	
	require "include.php";

	$user = authentification();
	
	if(isset($_GET['keyword'])){
		$produks = getCatalogSearch();
	}else{
		$produks = catalogDefault();	
	}
	

	


	require $DocumentRoot."/html/catalog.php";
	
?>