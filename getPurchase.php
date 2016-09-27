<?php
	require "include.php";

	

	$user = authentification();

	$produk = getProdukPurchase();
	
	require $DocumentRoot."/html/purchase.php";

?>