<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
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
			<li><a class="active" href="<?php RoutingDashboard('getAddProduct.php');?>">Add Product</a></li>
			<li><a href="<?php RoutingDashboard('getSales.php');?>">Sales</a></li>
			<li><a href="<?php RoutingDashboard('getPurchase.php');?>">Purchases</a></li>
		</ul>
		<h1>Please add your product here</h1>
		<hr>
		
	<div class="detailProduct">
		<form action="action_page.php">
			<b>Name</b><br>
			<input id="name" type="text" name="name">
			<b>Description (max 200 chars)</b><br>
			<textarea id="description" name="description"></textarea>
			<b>Price (IDR)</b><br>
			<input id="price" type="text" name="price">
			<b>Photo</b><br>
			<input type="file" name="photo"><br><br>
			
			<button type="cancel" onclick="#">CANCEL</button>
			<button type="submit" value="submit">ADD</button>
		</form>
	</div>

		
	</div>
</body>
</html>