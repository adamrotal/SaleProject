<?php
	require "include.php";

	$user = authentification();
	$produks = getProdukSales();
	require $DocumentRoot."/html/sales.php";

?>