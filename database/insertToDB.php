<?php

	require "config.php";
	
	function insertDataToDB($query){
		global $servername, $username, $password, $dbname;

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		
		mysqli_query($conn,$query);
		
		if(mysqli_insert_id($conn) == 0){
			$result = null;
		}else{
			$result = mysqli_insert_id($conn);
		}

		$conn->close();

		return $result;
	}

?>
