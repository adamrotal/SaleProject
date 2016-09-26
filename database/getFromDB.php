<?php
	require "config.php";

	function selectDataFromDB($query){
		global $servername, $username, $password, $dbname;
	
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
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
