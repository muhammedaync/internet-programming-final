<?php
	$conn = mysqli_connect("localhost", "root", "", "ses");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>