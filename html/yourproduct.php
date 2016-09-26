<!DOCTYPE html>
<html>
<head>
	<title>Your Product</title>
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
			<li><a class="active" href="getYourProduct.php">Your Product</a></li>
			<li><a href="getAddProduct.php">Add Product</a></li>
			<li><a href="getSales.php">Sales</a></li>
			<li><a href="getPurshase.php">Purchases</a></li>
		</ul>
		<h1>What are you going to sell today?</h1>
		<hr>
		

		<div class="catalog">
			<b>Sunday, 14 September 2016</b><br>
			at 12.00<br>
			<hr>
			<table id="produk"  cellpadding="10">
				<tr>
					<td id="foto"><img class="fotoProduk" src="../aset/batik turquoise.jpg" alt="foto produk"></td>
					<td id="deskripsi">
						<font size="5"><b>Batik Turquoise</b></font><br><br>
						<font size="5">IDR 115.000</font><br>
						Beautiful batik cloth. Size 1.15m x 2m.
					</td>
					<td id="data">
						7 likes <br>
						0 purchase<br><br>
						<a id="editButton" href="#">EDIT</a>
						<a id="deleteButton" href="#">DELETE</a>
					</td>
				</tr>
			</table>
			<hr>
		</div>

		<div class="catalog">
			<b>Sunday, 14 September 2016</b><br>
			at 12.00<br>
			<hr>
			<table id="produk"  cellpadding="10">
				<tr>
					<td id="foto"><img class="fotoProduk" src="../aset/batik turquoise.jpg" alt="foto produk"></td>
					<td id="deskripsi">
						<font size="5"><b>Batik Turquoise</b></font><br><br>
						<font size="5">IDR 115.000</font><br>
						Beautiful batik cloth. Size 1.15m x 2m.
					</td>
					<td id="data">
						7 likes <br>
						0 purchase<br><br>
						<a id="editButton" href="#">EDIT</a>
						<a id="deleteButton" href="#">DELETE</a>
					</td>
				</tr>
			</table>
			<hr>
		</div>
	</div>
</body>
</html>