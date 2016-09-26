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
			<b>Hi, <?php echo $result["username"];?>!</b><br>
			<b><a href="#">logout</a></b>
		</div>
		
		<ul class="navig">
			<li><a href="<?php RoutingDashboard('getCatalog.php',$result);?>">Catalog</a></li>
			<li><a href="<?php RoutingDashboard('getProduk.php',$result);?>">Your Product</a></li>
			<li><a href="<?php RoutingDashboard('getAddProduct.php',$result);?>">Add Product</a></li>
			<li><a href="<?php RoutingDashboard('getSales.php',$result);?>">Sales</a></li>
			<li><a class="active" href="<?php RoutingDashboard('getPurchase.php',$result);?>">Purchases</a></li>
		</ul>
		<h1>Here are your purchases</h1>
		<hr>
		

		<div class="purchases">
			<b>Sunday, 14 September 2016</b><br>
			at 12.00<br>
			<hr>
			<table id="produk"  cellpadding="10">
				<tr>
					<td id="foto"><img class="fotoProduk" src="<?php echo $ServerRoot;?>/aset/batik turquoise.jpg" alt="foto produk"></td>
					<td id="deskripsi">
						<font size="5"><b>Batik Turquoise</b></font><br><br>
						<font size="5">IDR 1.000.000</font><br>
						2 pcs<br>
						@IDR 500.000<br><br>
						bought by <b>usernameBUYER</b>
					</td>
					<td id="data">
						Delivery to <b>namaBuyer(?)</b><br>
						Jl Cibening barat no 20.<br>
						Bandung<br>
						40280<br>
						085815072108<br>
					</td>
				</tr>
			</table>
			<hr>
		</div>

		<div class="purchases">
			<b>Sunday, 14 September 2016</b><br>
			at 12.00<br>
			<hr>
			<table id="produk"  cellpadding="10">
				<tr>
					<td id="foto"><img class="fotoProduk" src="<?php echo $ServerRoot;?>/aset/batik turquoise.jpg" alt="foto produk"></td>
					<td id="deskripsi">
						<font size="5"><b>Batik Turquoise</b></font><br><br>
						<font size="5">IDR 1.000.000</font><br>
						2 pcs<br>
						@IDR 500.000<br><br>
						bought by <b>usernameBUYER</b>
					</td>
					<td id="data">
						Delivery to <b>namaBuyer(?)</b><br>
						Jl Cibening barat no 20.<br>
						Bandung<br>
						40280<br>
						085815072108<br>
					</td>
				</tr>
			</table>
			<hr>
		</div>
	</div>
</body>
</html>