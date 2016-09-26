<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $ServerRoot;?>/css/dashboard.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
		<center><img class="logo" src="<?php echo $ServerRoot;?>/aset/logoText.png"></center>
		<div id="userLogOut">	
			<b>Hi, USERNAME!</b><br>
			<b><a href="#">logout</a></b>
		</div>
		<ul class="navig">
			<li><a href="getCatalog.php">Catalog</a></li>
			<li><a href="getProduct.php">Your Product</a></li>
			<li><a href="getAddProduct.php">Add Product</a></li>
			<li><a href="getSales.php">Sales</a></li>
			<li><a href="getPurshase.php">Purchases</a></li>
		</ul>
		<h1>Please update your product here</h1>
		<hr>
		
	<div class="detailProduct">
		<form action="action_page.php">
			<b>Name</b><br>
			<input id="name" type="text" name="name"></textarea>
			<b>Description (max 200 chars)</b><br>
			<textarea id="description" name="description"></textarea>
			<b>Price (IDR)</b><br>
			<input id="price" type="text" name="price">
			<b>Photo</b><br>
			<input type="file" name="photo"><br><br>
			<button type="cancel" onclick="#">CANCEL</button>
			<button type="submit" value="submit">UPDATE</button>
		</form>
	</div>

		
	</div>
</body>
</html>