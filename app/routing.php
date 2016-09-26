<?php
	require 'config.php';
	function RoutingDashboard($url,$username){
		global $ServerRoot;
		echo $ServerRoot.'/'.$url.'?id_active='.$username['id'];
	}
?>