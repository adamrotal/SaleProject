<?php
	require "include.php";

	$user = authentification();

	$produks = yourProduk();
	require $DocumentRoot."/html/yourproduct.php";

?>