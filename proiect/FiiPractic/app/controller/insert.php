<?php


 	$sql = "INSERT INTO users (firstName, lastName, email, judet, password) VALUES (?,?,?,?,?)";
 	$stmt = mysqli_stmt_init($conn);
 	if(!mysqli_stmt_prepare($stmt,$sql))
 	{
 		$emailErr = "Reitroduceti datele";
 	}
 	else
 	{
 		
 		$passwordHash = password_hash($password, PASSWORD_DEFAULT);
 		mysqli_stmt_bind_param($stmt, "sssss" , $firstName,$lastName,$email,$judet,$passwordHash);
 		mysqli_stmt_execute($stmt);
 		mysqli_stmt_store_result($stmt);
 		
 		//echo 1;

        mysqli_stmt_close($stmt);
        header("Location: login");

 		
 		
 	}

 	

?>