<?php
	//for MySQLi OOP
	$conn = new mysqli('localhost', 'travel_php', '', 'mydatabase');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}



?>