<?php
	$conn = new PDO('mysql:host=localhost;dbname=restaurant', 'root', '');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>