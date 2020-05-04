<?php

	if(isset($_POST['submitDlt']))
	{
		require '../app/controller/connect.php';

		// Check connection
		if (!$conn) {
			
		    die("Connection failed: " . mysqli_connect_error());
		}
		//echo "Connected successfully";

		$sql = "DELETE FROM anunt WHERE id=".$id_postare;

		if (mysqli_query($conn, $sql)) {
			mysqli_close($conn);
		    header("Location: cont-anunturi?user=".$_SESSION['id']);
		} else {
		    echo "Error deleting record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	}

?>