<?php

	require "include.php";

	$idProduk = $_GET['id_produk'];

	$user = authentification();
	$produk = getSingleProduct($idProduk);

	if($user['id'] == $produk['idPenjual']){

		$query = "UPDATE produk SET deleted = true WHERE id = '$idProduk'";
		$result = selectDataFromDB($query);
	}

	Redirect($user['id'],'getProduk.php');
?>