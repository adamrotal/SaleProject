<?php
	require "include.php";
	
	if($_POST['action']=='CANCEL'){
		Redirect($_POST['idPembeli'],'getCatalog.php');
	}

	$idProduk = $_POST['idProduk'];
	$idPembeli = $_POST['idPembeli'];
	$namaPembeli = $_POST['namaPembeli'];
	$fullAddress = $_POST['fullAddress'];
	$postalCode = $_POST['postalCode'];
	$phoneNumber = $_POST['phoneNumber'];
	$creditCard = $_POST['creditCard'];
	$codeVerification = $_POST['codeVerification'];
	$kuantitas = $_POST['kuantitas'];

	$query = "INSERT INTO sales(idProduk,idPembeli,namaPembeli,fullAddress,postalCode,phoneNumber,creditCard,codeVerification,kuantitas,tanggalDiBeli) VALUES('$idProduk','$idPembeli','$namaPembeli','$fullAddress','$postalCode','$phoneNumber','$creditCard','$codeVerification','$kuantitas',CURDATE())";
	$idSales = insertDataToDB($query);
	
	Redirect($_POST['idPembeli'],'getPurchase.php');
?>