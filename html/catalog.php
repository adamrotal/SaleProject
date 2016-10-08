<!DOCTYPE html>
<html>
<head>
	<title>Catalog</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $ServerRoot;?>/css/dashboard.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo $ServerRoot;?>/javascript/like.js"></script>
</head>
<body>
	<div class="container">
		<center>
			<h1 class="logo">
				<span class="sale">Sale</span><span class="project">Project</span>
			</h1>
		</center>
		<div id="userLogOut">	
			<b>Hi, <?php echo $user["username"];?>!</b><br>
			<b><a id="logoutButton" href="<?php logout();?>">logout</a></b>
		</div>
		<ul class="navig">
			<li><a class="active" href="<?php RoutingDashboard('getCatalog.php');?>">Catalog</a></li>
			<li><a href="<?php RoutingDashboard('getProduk.php');?>">Your Product</a></li>
			<li><a href="<?php RoutingDashboard('getAddProduct.php');?>">Add Product</a></li>
			<li><a href="<?php RoutingDashboard('getSales.php');?>">Sales</a></li>
			<li><a href="<?php RoutingDashboard('getPurchase.php');?>">Purchases</a></li>
		</ul>
		<h1>What are you going to buy today?</h1>
		<hr>

		<form action="getCatalog.php" method="get">
			<div class="searchbox">	
		        <input type="text" placeholder="Search catalog..." name="keyword" value="<?php issetEcho($keyword);?>" required>
		        <input id="searching" type="submit" value="GO">
			</div>
			<div class="byRadio"">
				<div id="by">by</div><br>
					<input type="radio" name="category" value="product" <?php ifValueChecked("product",$category);?> checked> product<br>
					<input type="radio" name="category" value="store" <?php ifValueChecked("store",$category);?> > store<br>
					<input type="hidden" name="id_active" id="idUsernameData" value="<?php echo $user['id'];?>">
			</div>	
		</form>
		
		<?php if(isset($produks)){
			foreach ($produks as $produk) {?>
				<div class="catalog">
					<b><?php echo $produk['usernamePenjual'];?></b><br>
					added this on <?php echo toDateFormat($produk['tanggalDiTambah']);?><br>
					<hr>
					<table id="produk"  cellpadding="10">
						<tr>
							<td id="foto"><img class="fotoProduk" src="<?php echo $produk['gambar'];?>" alt="foto produk"></td>
							<td id="deskripsi">
								<font size="5"><b><?php echo $produk['name'];?></b></font><br><br>
								<font size="5">IDR <?php echo number_format($produk['price']);?></font><br>
								<?php echo $produk['description'];?>
							</td>
							<td id="data">
								<span class="idProdukData"><?php echo $produk['id'];?></span>
								<span class="nLike"><?php echo $produk['nLike'];?></span> likes <br>
								<?php echo $produk['nSales'];?> purchase<br><br>
								<?php isLiked($produk['liked']);?>
								<a id="buyButton" href="<?php RoutingBuy($produk['id']);?>">BUY</a>
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