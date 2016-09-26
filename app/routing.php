<?php
	require 'config.php';
	
	function RoutingDashboard($url){
		global $ServerRoot,$user;
		echo $ServerRoot.'/'.$url.'?id_active='.$user['id'];
	}

	function RoutingBuy($idProduk){
		global $ServerRoot,$user;
		echo $ServerRoot.'/getConfirmPurchase.php?id_active='.$user['id'].'&id_produk='.$idProduk;	
	}
?>