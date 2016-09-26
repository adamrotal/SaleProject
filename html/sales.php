<!DOCTYPE html>
<html>
<head>
	<title>Sales</title>
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
		<center><img class="logo" src="../aset/logoText.png"></center>
		<div id="userLogOut">	
			<b>Hi, USERNAME!</b><br>
			<b><a href="#">logout</a></b>
		</div>
		<ul class="navig">
			<li><a href="getCatalog.php">Catalog</a></li>
			<li><a href="getProduct.php">Your Product</a></li>
			<li><a href="getAddProduct.php">Add Product</a></li>
			<li><a class="active" href="getSales.php">Sales</a></li>
			<li><a href="getPurshase.php">Purchases</a></li>
		</ul>
		<h1>Here are your sales</h1>
		<hr>
		

		<div class="sales">
			<b>Sunday, 14 September 2016</b><br>
			at 12.00<br>
			<hr>
			<table id="produk"  cellpadding="10">
				<tr>
					<td id="foto"><img class="fotoProduk" src="../aset/batik turquoise.jpg" alt="foto produk"></td>
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

		<div class="sales">
			<b>Sunday, 14 September 2016</b><br>
			at 12.00<br>
			<hr>
			<table id="produk"  cellpadding="10">
				<tr>
					<td id="foto"><img class="fotoProduk" src="../aset/batik turquoise.jpg" alt="foto produk"></td>
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