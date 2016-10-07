<?php
	function authentification(){
		global $ServerRoot;
		if (isset($_GET["id_active"])) {
			$id = $_GET["id_active"];
			$query = "SELECT * FROM user WHERE id = '$id'";
			
			$result = selectDataFromDB($query);

			if ($result == null) {
				$redirectUrl = 'Location: '.$ServerRoot.'/getLogin.php';
				header($redirectUrl);
				die();			
			} else {
				$result = $result->fetch_assoc();
			}

		} else {
			$redirectUrl = 'Location: '.$ServerRoot.'/getLogin.php';
			header($redirectUrl);
			die();
		}

		return $result;
	}

	function logout(){
		global $ServerRoot;
		echo $ServerRoot.'/logout.php';
	}
	
?>