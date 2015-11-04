<?php

	// $password = NULL;

	$dbname = "DBLP";

	try{
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		//create query

		$sql  = "SELECT author.name FROM `author` WHERE 1;"; 

		//send query
		$result = $conn->query($sql);

		//loop through resulting rows
		foreach($result as $row){
			
		 	$name =  $row["name"];
		 	echo $name;
		 	echo ' '; 
		 	
		}


	}
	catch (mysqli_sql_exception $e){
        	throw new MySQLiQueryException($SQL, $e->getMessage(), $e->getCode());

	}

	//Close connection
	mysqli_close($conn);
?>