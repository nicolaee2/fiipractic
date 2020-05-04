<?php

	if(empty($_POST['negociabil']))
		$negociabil = 0;
	else
		$negociabil = 1;

	if(empty($_POST['schimb']))
		$schimb = 0;
	else
		$schimb = 1;

	$sql = "UPDATE `anunt` SET `titlu`=?,`pret`=?,`categorie`=?,`descriere`=?,`telefon`=?,`img`=?,`schimb` = ?,`negociabil` = ?, `user_id`=? WHERE id =". $id_postare ;
 	$stmt = mysqli_stmt_init($conn);
 	if(!mysqli_stmt_prepare($stmt,$sql))
 	{
 		$titluErr = "Reitroduceti datele";
 	}
 	else
 	{
 		
 		
 		mysqli_stmt_bind_param($stmt, "sdsssssss" , $titlu,$pret,$categorie,$descriere,$telefon,$poza,$schimb,$negociabil,$id);


 		mysqli_stmt_execute($stmt);
 		mysqli_stmt_store_result($stmt);
 		

        mysqli_stmt_close($stmt);
        header("Location: cont-anunturi?user=".$id);

 		
 		
 	}
 	mysqli_stmt_close($stmt);
	
	
?>