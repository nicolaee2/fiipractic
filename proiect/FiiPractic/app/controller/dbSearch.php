<?php

	$sql = "SELECT * FROM users WHERE email=?;";
	$stmt = mysqli_stmt_init($conn);

	//$result = mysqli_query($conn, $sql);
	//$resultCheck = mysqli_num_rows($result);

	if(!mysqli_stmt_prepare($stmt,$sql))
	{
		$emailErr = "Reintroduceti datele";
	}
	else
	{
		mysqli_stmt_bind_param($stmt, "s" , $email);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);
		if($resultCheck > 0)
		{
			
			$emailErr = "Un cont cu acest email exista deja";

		}
		else
		{
			include "../app/controller/insert.php";
			
		}
	}

	


?>