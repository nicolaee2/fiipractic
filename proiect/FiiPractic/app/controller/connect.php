
<?php
	$servername = "localhost";
	$username = "root";
	$password_r = "";
	$dbName = "anunt";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password_r,$dbName);

	// Check connection
	if (!$conn) {
		
	    die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";
?> 