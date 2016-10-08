<?php
	require "include.php";
	$idUser = $_GET['idUser'];
	$idProduk = $_GET['idProduk'];
	

	$query = "SELECT * FROM liked WHERE (idUser = '$idUser') AND (idProduk = '$idProduk')";
	$result = selectDataFromDB($query);

	$liked;
	$nLiked;
	
	
	if($result == null){
		$liked = true;
		$query = "INSERT INTO liked(idUser,idProduk) VALUES('$idUser',$idProduk)";
		$result = insertDataToDB($query);

		//hitung like
		$query = "SELECT * FROM liked WHERE idProduk = '$idProduk'";
		$result = selectDataFromDB($query);
		$nLiked = $result->num_rows;

	}else{
		$liked = false;
		$query = "DELETE FROM liked WHERE (idUser = '$idUser') AND (idProduk = '$idProduk')";
		$result = insertDataToDB($query);

		//hitung like
		$query = "SELECT * FROM liked WHERE idProduk = '$idProduk'";
		$result = selectDataFromDB($query);
		if($result!=null){
			$nLiked = $result->num_rows;	
		}else{
			$nLiked = 0;
		}
				
	}

	$output = array(
			"liked" => $liked,
			"nLiked" => $nLiked,
		);

	echo json_encode($output);
	

?>