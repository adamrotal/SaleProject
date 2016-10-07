<?php
	require "include.php";

	

	$user = authentification();

	$produks = getProdukPurchase();
	
	require $DocumentRoot."/html/purchase.php";

?>