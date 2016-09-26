<?php 
	function catalogDefault(){
				
		$query = "SELECT * FROM produk";
		
		$resultProduk = selectDataFromDB($query);
		
		
		$result = getAttributProduk($resultProduk);

		return $result;
		
		
	}


	function getAttributProduk($resultProduk){
		global $user,$ServerGambar;
		$idUser = $user['id'];

		$result = array();
		
		while($row = $resultProduk->fetch_assoc()){	
			$idPenjual = $row['idPenjual'];
			$idProduk = $row['id'];
				 
			$query = "SELECT * FROM liked WHERE idProduk = '$idProduk'";
			$resultNLiked = selectDataFromDB($query);

			$query = "SELECT * FROM liked WHERE idProduk = '$idProduk' AND idUser = '$idUser'";
			$resultLiked = selectDataFromDB($query);

			$query = "SELECT * FROM sales WHERE idProduk = '$idProduk";
			$resultNSales = selectDataFromDB($query);

			$query = "SELECT * FROM user WHERE id = $idPenjual";
			$resultPenjual = selectDataFromDB($query);
			
			if($resultNLiked == null){
				$nLike = 0;	
			}else{
				$nLike = $resultNLiked->num_rows;
			}

			
			if($resultLiked == null){
				$liked = 0;
			}else{
				$liked = 1;
			}


			if($resultNSales == null){
				$nSales = 0;
			}else{
				$nSales = $resultNSales->num_rows;
			}

			
			$penjual = $resultPenjual->fetch_assoc();
			
			$gambar = $ServerGambar.$row['gambar'];

			
			
			$produk = array(
				'id' => $row['id'],
				'usernamePenjual' => $penjual['username'],
				'tanggalDiTambah' => $row['tanggalDiTambah'],
				'name' => $row['name'],
				'price' => $row['price'],
				'description' => $row['description'],
				'gambar' => $gambar,
				'nLike' => $nLike,
				'nSales' => $nSales,
				'liked' => $liked,
			);

			array_push($result, $produk);

		}

		return $result;
	}

?>