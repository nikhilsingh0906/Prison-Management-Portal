<?php
	$servername = "localhost";
	$username = "saurav";
	$password = "saurav123";
	$database = "webportal";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check connection
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
?>
