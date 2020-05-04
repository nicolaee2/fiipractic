<?php
	
	require '../app/controller/connect.php';

	$sql = "SELECT * FROM users WHERE id=?;";
	$stmt = mysqli_stmt_init($conn);

	//$result = mysqli_query($conn, $sql);
	//$resultCheck = mysqli_num_rows($result);

	$sql = "SELECT * FROM users WHERE id=?";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        $eroare = "Problema la server";
    }
    else
    {

        mysqli_stmt_bind_param($stmt, "s" , $profil);
        mysqli_stmt_execute($stmt);
        $results = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($results))
        {

                //echo 1;
                $email = $row['email'];
                $nume = $row['firstName'];
                $prenume = $row['lastName'];
                $judet = $row['judet'];
                
        }
        else
        {
            $emailErr = "Email sau parola nu exista";

        }   
    }

?>