<?php
	require 'config.php';
	
	function RoutingDashboard($url){
		global $ServerRoot,$user;
		echo $ServerRoot.'/'.$url.'?id_active='.$user['id'];
	}
?>