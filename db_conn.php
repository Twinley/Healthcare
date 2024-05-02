<?php

	$serverName= "localhost";
	$unmae= "root"; //default
	$password = ""; //default no password
	$db_name = "healthcarecentre";//name of your database

	//connect to the database and return an object
	//stored in the $conn variable
	$conn = mysqli_connect($serverName, $unmae, $password, $db_name);

	if (!$conn) {
		echo "Connection failed!";
	}
?>