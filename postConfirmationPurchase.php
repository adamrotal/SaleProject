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
	$idPenjual = $_POST['idPenjual'];

	$query = "INSERT INTO sales(idProduk,idPembeli,namaPembeli,fullAddress,postalCode,phoneNumber,creditCard,codeVerification,kuantitas,tanggalDiBeli,idPenjual) VALUES('$idProduk','$idPembeli','$namaPembeli','$fullAddress','$postalCode','$phoneNumber','$creditCard','$codeVerification','$kuantitas',CURDATE(),'$idPenjual')";
	$idSales = insertDataToDB($query);
	
	Redirect($_POST['idPembeli'],'getPurchase.php');
?>