<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $ServerRoot;?>/css/dashboard.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo $ServerRoot;?>/javascript/javascript.js"></script>
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
			<li><a href="<?php RoutingDashboard('getCatalog.php');?>">Catalog</a></li>
			<li><a href="<?php RoutingDashboard('getProduk.php');?>">Your Product</a></li>
			<li><a class="active" href="<?php RoutingDashboard('getAddProduct.php');?>">Add Product</a></li>
			<li><a href="<?php RoutingDashboard('getSales.php');?>">Sales</a></li>
			<li><a href="<?php RoutingDashboard('getPurchase.php');?>">Purchases</a></li>
		</ul>
		<h1>Please add your product here</h1>
		<hr>
		
		<div class="detailProduct">
			<form id="myFormAddProduct" action="postAddFile.php" method="post" enctype="multipart/form-data" name="addProductForm">
				<b>Name</b>
				<span id="requiredAddProductName" class="tooltip">Required</span><br>
				<input id="name" type="text" name="name" oninput="inputValid('name', 'requiredAddProductName')">
				
				<b>Description (max 200 chars)</b>
				<span id="requiredAddProductDescription" class="tooltip">Required</span><br>
				<textarea id="description" name="description" maxlength="200" oninput="inputValid('description', 'requiredAddProductDescription')"></textarea>
				
				<b>Price (IDR)</b>
				<span id="requiredAddProductPrice" class="tooltip">Required</span>
				<span id="requiredAddProductPriceNumber" class="tooltip numberonly">Not valid</span><br>
				<input id="price" type="text" name="price" onchange="inputNumberValid('price', 'requiredAddProductPriceNumber')" oninput="inputValid('price', 'requiredAddProductPrice')">
				
				<b>Photo</b>
				<span id="requiredAddProductPhoto" class="tooltip">Required</span><br>
				<input type="file" name="photo" onchange="inputValid('photo', 'requiredAddProductPhoto')">
				<br>
				<br>
				<input type="hidden" value="<php echo $user['id']?>" name="id_active">
				<button type="cancel" onclick="#">CANCEL</button>
				<button type="submit" value="submit" onclick="validationAddProductButton(event)">ADD</button>
			</form>
		</div>
	</div>
</body>
</html>
