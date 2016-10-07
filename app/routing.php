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

	function RoutingEdit($idProduk){
		global $ServerRoot,$user;
		echo $ServerRoot.'/getEditProduct.php?id_active='.$user['id'].'&id_produk='.$idProduk;	
	}

	function RoutingDelete($idProduk){
		global $ServerRoot,$user;
		echo $ServerRoot.'/getDelete.php?id_active='.$user['id'].'&id_produk='.$idProduk;	
	}

	function Redirect($idUser,$url){
		global $ServerRoot;
		$redirectUrl = 'Location: '.$ServerRoot.'/'.$url.'?id_active='.$idUser;
		header($redirectUrl);
		die();
	}
?>