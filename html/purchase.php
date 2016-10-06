<!DOCTYPE html>
<html>
<head>
	<title>Purchase</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $ServerRoot;?>/css/dashboard.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
		<center><img class="logo" src="<?php echo $ServerRoot;?>/aset/logoText.png"></center>
		<div id="userLogOut">	
			<b>Hi, <?php echo $user["username"];?>!</b><br>
			<b><a href="<?php logout();?>">logout</a></b>
		</div>
		
		<ul class="navig">
			<li><a href="<?php RoutingDashboard('getCatalog.php');?>">Catalog</a></li>
			<li><a href="<?php RoutingDashboard('getProduk.php');?>">Your Product</a></li>
			<li><a href="<?php RoutingDashboard('getAddProduct.php');?>">Add Product</a></li>
			<li><a href="<?php RoutingDashboard('getSales.php');?>">Sales</a></li>
			<li><a class="active" href="<?php RoutingDashboard('getPurchase.php');?>">Purchases</a></li>
		</ul>
		<h1>Here are your purchases</h1>
		<hr>
		
		<?php if(isset($produks)){
			foreach ($produks as $produk) {?>
				<div class="purchases">
					<b>Sunday, <?php echo $produk['tanggal'];?></b><br>
					at 12.00<br>
					<hr>
					<table id="produk"  cellpadding="10">
						<tr>
							<td id="foto"><img class="fotoProduk" src="<?php echo $produk['gambar'];?>" alt="foto produk"></td>
							<td id="deskripsi">
								<font size="5"><b><?php echo $produk['nameProduk'];?></b></font><br><br>
								<font size="5">IDR <?php echo number_format($produk['totalPrice']);?></font><br>
								<?php echo $produk['kuantitas'];?> pcs<br>
								@IDR <?php echo number_format($produk['price']);?><br><br>
								bought from <b><?php echo $produk['username'];?></b>
							</td>
							<td id="dataPurchase">
								Delivery to <b><?php echo $produk['namaPembeli'];?></b><br>
								<?php echo $produk['fullAddress'];?><br>
								<?php echo $produk['postalCode'];?><br>
								<?php echo $produk['phoneNumber'];?><br>
							</td>
						</tr>
					</table>
					<hr>
				</div>
	<?php 	}

		}?>
		

		
	</div>
</body>
</html>