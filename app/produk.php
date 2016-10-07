<?php 
	function catalogDefault(){
				
		$query = "SELECT * FROM produk WHERE deleted = false ORDER BY id DESC ";
		
		$resultProduk = selectDataFromDB($query);
		
		if($resultProduk!=null){
			$result = getAttributProduk($resultProduk);	
		}else{
			$result = null;
		}
		

		return $result;
		
		
	}

	function getCatalogSearch(){
		$keyword = $_GET['keyword'];
		if($_GET['category'] == "product"){
			$query = "SELECT * FROM produk WHERE (name LIKE '%$keyword%') AND (deleted = false) ORDER BY id DESC";	
		}else{
			$_GET['category'] = "store";
			$query = "SELECT * FROM produk WHERE (namaPenjual LIKE '%$keyword%') AND (deleted = false) ORDER BY id DESC";			
		}
		
		
		

		$resultProduk = selectDataFromDB($query);
		
		if($resultProduk!=null){
			$result = getAttributProduk($resultProduk);	
		}else{
			$result = null;
		}

		
		return $result;
	}

	function yourProduk(){
		global $user;
		$idUser = $user['id'];
		$query = "SELECT * FROM produk WHERE (idPenjual='$idUser') AND (deleted = false) ORDER BY id DESC";
		
		$resultProduk = selectDataFromDB($query);
		
		
		if($resultProduk!=null){
			$result = getAttributProduk($resultProduk);	
		}else{
			$result = null;
		}

		return $result;
	}

	function getSingleProduct($idProduk){
		$query = "SELECT * FROM produk WHERE id = '$idProduk'";
		$result = selectDataFromDB($query);
		$result = $result->fetch_assoc();

		return $result;
	}

	function getProdukPurchase(){
		global $user,$ServerGambar;
		$idUser = $user['id'];
		$result = array();

		$query = "SELECT * FROM sales WHERE idPembeli = '$idUser' ORDER BY id DESC";
		$resultProduk = selectDataFromDB($query);

		if($resultProduk != null){
			while($row = $resultProduk->fetch_assoc()){

				$idProduk = $row['idProduk'];
				$idPenjual = $row['idPenjual'];
				
				$query = "SELECT * FROM produk WHERE id = '$idProduk'";
				$tempProduk = selectDataFromDB($query);
				$tempProduk = $tempProduk->fetch_assoc();

				$query = "SELECT * FROM user WHERE id = '$idPenjual'";
				$penjual = selectDataFromDB($query);
				$penjual = $penjual->fetch_assoc();


				$tanggal = $row['tanggalDiBeli'];
				$gambar = $ServerGambar.$tempProduk['gambar'];
				$nameProduk = $tempProduk['name'];
				$totalPrice = $row['kuantitas'] * $tempProduk['price'];
				$kuantitas = $row['kuantitas'];
				$price = $tempProduk['price'];
				$username = $penjual['username'];
				$namaPembeli = $row['namaPembeli'];
				$fullAddress = $row['fullAddress'];
				$postalCode = $row['postalCode'];
				$phoneNumber = $row['phoneNumber'];

				$produk = array(
					'tanggal' => $tanggal,
					'gambar' => $gambar,
					'nameProduk' => $nameProduk,
					'totalPrice' => $totalPrice, 
					'kuantitas' => $kuantitas,
					'price' => $price,
					'username' => $username,
					'namaPembeli' => $namaPembeli,
					'fullAddress' => $fullAddress,
					'postalCode' => $postalCode,
					'phoneNumber'=>  $phoneNumber,
				);


				array_push($result, $produk);
			}	
		}else{
			$result = null;
		}
		
		return $result;

	}

	function getProdukSales(){
		global $user,$ServerGambar;
		$idUser = $user['id'];
		$result = array();

		$query = "SELECT * FROM sales WHERE idPenjual = '$idUser' ORDER BY id DESC";
		$resultProduk = selectDataFromDB($query);

		if($resultProduk != null){
			while($row = $resultProduk->fetch_assoc()){

				$idProduk = $row['idProduk'];
				$idPembeli = $row['idPembeli'];
				
				$query = "SELECT * FROM produk WHERE id = '$idProduk'";
				$tempProduk = selectDataFromDB($query);
				$tempProduk = $tempProduk->fetch_assoc();

				$query = "SELECT * FROM user WHERE id = '$idPembeli'";
				$pembeli = selectDataFromDB($query);
				$pembeli = $pembeli->fetch_assoc();


				$tanggal = $row['tanggalDiBeli'];
				$gambar = $ServerGambar.$tempProduk['gambar'];
				$nameProduk = $tempProduk['name'];
				$totalPrice = $row['kuantitas'] * $tempProduk['price'];
				$kuantitas = $row['kuantitas'];
				$price = $tempProduk['price'];
				$username = $pembeli['username'];
				$namaPembeli = $row['namaPembeli'];
				$fullAddress = $row['fullAddress'];
				$postalCode = $row['postalCode'];
				$phoneNumber = $row['phoneNumber'];

				$produk = array(
					'tanggal' => $tanggal,
					'gambar' => $gambar,
					'nameProduk' => $nameProduk,
					'totalPrice' => $totalPrice, 
					'kuantitas' => $kuantitas,
					'price' => $price,
					'username' => $username,
					'namaPembeli' => $namaPembeli,
					'fullAddress' => $fullAddress,
					'postalCode' => $postalCode,
					'phoneNumber'=>  $phoneNumber,
				);


				array_push($result, $produk);
			}	
		}else{
			$result = null;
		}
		
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

			$query = "SELECT * FROM sales WHERE idProduk = '$idProduk'";
			$resultNSales = selectDataFromDB($query);

			$query = "SELECT * FROM user WHERE id = '$idPenjual'";
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