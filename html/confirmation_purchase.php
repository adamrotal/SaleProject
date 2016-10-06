<!DOCTYPE html>
<html>
<head>
	<title>Confirm Purches</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $ServerRoot;?>/css/dashboard.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo $ServerRoot;?>/javascript/javascript.js"></script>
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
		<form id="myFormConfirmation_Purchase" action="postConfirmationPurchase.php" method="post">
			<div class="remainder">	
				<span class="product">Product</span>  : Sembarang<br>
				<input id="initialPrice" type="hidden" name="initPrice" value="<?php echo $produk['price'];?>"> 
				<span class="price">Price</span> : IDR <span id="aPrice"><?php echo number_format($produk['price']);?></span><br>
				<span class="qual">Quantity</span> : <input id="quantity" value="1" name="kuantitas" onchange="countPrice()"> PCS<br>
				<span class="totalprice">Total Price</span> : IDR <span id="totalPrice"><?php echo number_format($produk['price']);?></span><br>
				<span class="del">Delivery To</span> : <br>
			</div>
			<br>

			<div class="confirm"">
			
				Consignee<br>
				<input id="consignee" type="text" name="namaPembeli" value="<?php echo $user['fullName'];?>" required><br>
				<br>Full Address<br>
				<textarea id="address" name="fullAddress" required><?php echo $user['fullAddress'];?></textarea>
				<br>Postal Code<br>
				<input id="postal" type="text" name="postalCode" value="<?php echo $user['postalCode'];?>" required><br>
				<br>Phone Number<br>
				<input id="phone" type="text" name="phoneNumber" value="<?php echo $user['phoneNumber'];?>" required><br>
				<br>12 Digits Credit Card Number<br>
				<div class="validationInput">
					<input id="credit" type="text" name="creditCard" oninput="validationCreditCard()">
					<span id="creditCardTooltip" class="tooltip">Must be consist of 12 digits number</span>
				</div>
				<br>
				<br>3 Digit Card Verification Value<br>
				<div class="validationInput">
					<input id="verification" type="text" name="codeVerification" oninput="validationVerification()">
					<span id="digitCardTooltip" class="tooltip">Must be consist of 3 digits number</span>
				</div>
				<br><br>
				<br>
				<input type="hidden" name="idPembeli" value="<?php echo $user['id'];?>">
				<input type="hidden" name="idProduk" value="<?php echo $produk['id'];?>">
				<input type="hidden" name="idPenjual" value="<?php echo $produk['idPenjual'];?>">
				<button id="btnCancel" value="CANCEL" name="action">CANCEL</button>
				<button id="btnConfirm" value="CONFIRM" name="action" onclick="validationDataDigit(event)">CONFIRM</button>
				<div id="myModal" class="modal">
					<div class="modal-content">
					    <span class="btnNoModal">no</span>
					    <span class="btnYesModal">yes</span>
					    <p>Do you really want to submit the form?</p>
					</div>

				</div>
			
			</div>
		</form>
	</div>
</body>
</html>