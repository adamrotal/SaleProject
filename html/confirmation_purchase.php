<!DOCTYPE html>
<html>
<head>
	<title>Confirm Purches</title>
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
			<li><a href="<?php RoutingDashboard('getPurchase.php');?>">Purchases</a></li>
		</ul>
		<h1>Please confirm your purchase</h1>
		<hr>
		<div class="remainder">	
			<span class="product">Product</span>  : Sembarang<br> 
			<span class="price">Price</span> : xxxxxxxxx<br>
			<span class="qual">Quality</span> : <input type="qual" id="quality"> PCS<br>
			<span class="totalprice">Total Price</span> : xxxxxxxxxxxxxx<br>
			<span class="del">Delivery To</span> : <br>
		</div>
		<br>

		<div class="confirm">
			<form>
				Consignee<br>
				<input id="consignee" type="text"><br>
				Full Address<br>
				<input id="address" type="longtext"><br>
				Postal Code<br>
				<input id="postal" type="text"><br>
				Phone Number<br>
				<input id="phone" type="text"><br>
				12 Digits Credit Card Number<br>
				<input id="credit" type="text"><br>
				3 Digit Card Verification Value<br>
				<input id="verification" type="text"><br>
				<br>
				<br>
				<button type="submit" value="CONFIRM">CONFIRM</button>
			</form>
		</div>
	</div>
</body>
</html>