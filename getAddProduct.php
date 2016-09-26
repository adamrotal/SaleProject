<?php
<<<<<<< HEAD
	require "config.php";
=======
	
>>>>>>> 4a6051ee9ac3bf20da8e9c84579970887b7584c0
	if (!isset($_GET["id_active"])) {
		$redirectUrl = 'Location: http://'.$ServerRoot.'/getLogin.php';
		header($redirectUrl);
		die();
	}
	require $DocumentRoot."/html/addproduct.php";
?>