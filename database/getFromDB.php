<?php
	require "database/config.php";

	function selectDataFromDB($query){
		global $servername, $usernameDatabase, $passwordDatabase, $dbname;
		
		// Create connection
		$conn = new mysqli($servername, $usernameDatabase, $passwordDatabase, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$result = $conn->query($query);
		if ($result->num_rows <= 0){
			$result = null;
		}

		$conn->close();
		
		return $result;
	}
?>
