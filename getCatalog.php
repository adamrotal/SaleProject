<?php
	
	require "include.php";

	$user = authentification();
	
	if(isset($_GET['keyword'])){
		$produks = getCatalogSearch();
		$keyword = $_GET['keyword'];
		$category = $_GET['category'];
	}else{
		
		$produks = catalogDefault();
		$keyword = "";
		$category = "";	
	}
	

	


	require $DocumentRoot."/html/catalog.php";
	
?>