<?php


	
	$titlu = $descriere = $categorie = $fileNameNew= $telefon = "";
    $eroareImg = "";
    $eroareTitlu = "";
    $eroareDescriere = "";
    $eroareCategorie = "";
    $eroarePret = "";
    $eroareTelefon = "";

	if(isset($_POST['submit']))
	{

		if( empty($_POST['title']) )
		{
			$eroareTitlu = "Introduceti Titlu";
		}
		else if(empty($_POST['descriere']))
		{
			$eroareDescriere = "Introduceti descrierea anuntului";
		}
		else if(empty($_POST['categorie']))
		{
			$eroareCategorie = "Introduceti categoria";
		}
		else if(!isset($_POST['pret']))
		{
			$eroarePret = "Introduceti pretul";
		}
		else if(!isset($_POST['telefon']))
		{
			$eroareTelefon = "Introduceti pretul";
			
		}
		else if(!preg_replace('/[^0-9]/', '', $_POST['telefon']) || strlen($_POST['telefon']) !== 10)
		{
				$eroareTelefon = "Format la telefon invalid exemplu de telefon: 0744233098";
		}
		else
		{
			//echo $titlu;
			require '../app/controller/upload.php';
			
			if(empty($_POST['schimb']))
				$schimb = 0;
			else
				$schimb = 1;

			if(empty($_POST['negociabil']))
				$negociabil = 0;
			else
				$negociabil = 1;


			$titlu = test_input($_POST['title']);
			$descriere = test_input($_POST['descriere']);
			$categorie = test_input($_POST['categorie']);

			$pret = $_POST['pret'];
			$id = $_SESSION['id'];
			$poza = $fileNameNew;
			$telefon = $_POST['telefon'];

			if(empty($eroareImg) && empty($eroareTitlu) && empty($eroareDescriere) && empty($eroareCategorie) && empty($eroarePret) && empty($eroareTelefon))
			{

				require '../app/controller/connect.php';

				$sql = "SELECT * FROM users WHERE id = '${id}' " ;
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
				        $judet = $row['judet'];
				    }
				} else {
				    $judet = "Alba";
				}

				mysqli_close($conn);

				require '../app/controller/addAnunt.php';
			}
			// echo $titlu;
			// echo "<br>";

			// echo $descriere;
			// echo "<br>";

			// echo $categorie;
			// echo "<br>";

			// if(empty($fileDestination))
			// 	echo "Imagine neintrodusa";
			// else
			// {
			// 	
			// }

		}

		

	}

?>