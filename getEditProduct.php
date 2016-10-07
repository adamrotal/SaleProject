<?php
	require "include.php";

	$idProduk = $_GET['id_produk'];

	$user = authentification();
	$produk = getSingleProduct($idProduk);
	require $DocumentRoot."/html/edit_product.php";
	
?>