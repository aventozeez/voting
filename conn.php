<?php
	$conn = mysqli_connect("localhost", "root", "", "voting");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>