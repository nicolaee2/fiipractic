<?php
	
	require '../app/controller/session.php';
	require '../resources/layouts/header.php';
	require '../app/controller/security.php';
	require '../resources/includes/navbar.php';
	require '../app/controller/connect.php';

	$eroareImg = "";
    $eroareTitlu = "";
    $eroareDescriere = "";
    $eroareCategorie = "";
    $eroarePret = "";
    $eroareTelefon = "";

	if(isset($_POST['submit']))
	{

		$id_postare = $_POST['id'];
		//echo $id_postare;

		$schimb = $_POST['schimb_'];
		$negociabil = $_POST['negociabil_'];



		$titlu = test_input($_POST['titlu_']);
		$pret = $_POST['pret_'];
		$img = test_input($_POST['img_']);
		$telefon = $_POST['telefon_'];
		$categorie = $_POST['categorie_'];
		$id_user = $_POST['id_user'];

		$descriere = test_input($_POST['descriere_']);

		require '../resources/includes/content.php';

	}
	else if(isset($_POST['submitUpd']))
	{

		$titlu = $descriere = $categorie = $fileNameNew= $telefon = "";


		$id_postare = $_POST['id'];

		$schimb = $_POST['schimb'];
		$negociabil = $_POST['negociabil'];
	    $titlu = test_input($_POST['titlu']);
		$descriere = test_input($_POST['descriere']);
		$categorie = test_input($_POST['categorie']);
		$pret = $_POST['pret'];
		$telefon = $_POST['telefon'];
		$id = $_POST['id_user'];

		if( empty($_POST['titlu']) )
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

			require '../app/controller/upload.php';
			$poza = $fileNameNew;

			if(empty($eroareImg) && empty($eroareTitlu) && empty($eroareDescriere) && empty($eroareCategorie) && empty($eroarePret) && empty($eroareTelefon))
			{
				require '../app/controller/updateAnunt.php';
			}
		}

		require '../resources/includes/content.php';

	}
	else
	{
		header("Location: home");
	}

?>