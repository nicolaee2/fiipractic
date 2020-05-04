<?php

	require '../app/controller/connect.php';


	if(!empty($poza))
		$sql = "INSERT INTO `anunt` (`titlu`,`pret`, `categorie`, `descriere`,`telefon`, `img`,`schimb`, `negociabil`,`judet`, `user_id`) VALUES (?,?,?,?,?,?,?,?,?,?)";
 	else
 		$sql = "INSERT INTO `anunt` (`titlu`,`pret`, `categorie`, `descriere`,`telefon`,`schimb`, `negociabil`,`judet`, `user_id`) VALUES (?,?,?,?,?,?,?,?,?)";
 	$stmt = mysqli_stmt_init($conn);
 	if(!mysqli_stmt_prepare($stmt,$sql))
 	{
 		
 		$eroareTitlu = "Reitroduceti datele";
 	}
 	else
 	{
 		if(!empty($poza))
 			mysqli_stmt_bind_param($stmt, "sdssssssss" , $titlu,$pret,$categorie,$descriere,$telefon,$poza,$schimb,$negociabil,$judet,$id);
 		else
 			mysqli_stmt_bind_param($stmt, "sdsssssss" , $titlu,$pret,$categorie,$descriere,$telefon,$schimb,$negociabil,$judet,$id);

 		mysqli_stmt_execute($stmt);
 		mysqli_stmt_store_result($stmt);
 		
        mysqli_stmt_close($stmt);
        header("Location: home");

 		
 		
 	}

?>