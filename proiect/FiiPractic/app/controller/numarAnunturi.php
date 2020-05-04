<?php
	
	require '../app/controller/connect.php';

	$result = mysqli_query($conn,"SELECT COUNT(*) FROM anunt WHERE user_id =" . $profil);
	$row = mysqli_fetch_assoc($result);
	$size = $row['COUNT(*)'];

?>