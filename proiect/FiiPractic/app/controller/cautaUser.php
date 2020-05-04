<?php
	
	$servername = "localhost";
	$username = "root";
	$password_r = "";
	$dbName = "anunt";

	// Create connection
	$conn2 = mysqli_connect($servername, $username, $password_r,$dbName);

	// Check connection
	if (!$conn2) {
		
	    die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";

	$sql = "SELECT * FROM users WHERE id = '${user_id}' ";
    //echo $sql;
    $results = mysqli_query($conn2, $sql);
    //var_dump($result);
    if (mysqli_num_rows($results) > 0) {
        // output data of each row
        $rows = mysqli_fetch_assoc($results); 
        $nume = $rows['firstName'];
        $prenume = $rows['lastName'];
        $judet = $rows['judet'];
    } 
    else {
        
        $nume = "Fara Nume";
        $prenume = "Fara Prenume";
        $judet = "Fara judet";
    }
     mysqli_close($conn2);

?>