<?php
	
	require '../app/controller/session.php';
	require '../resources/layouts/header.php';
	require '../app/controller/security.php';
	require '../resources/includes/navbar.php';

	$nume = "";
	$prenume = "";
	$email = "";
	$judet = "";
	$nr_anunturi = 0;
	$eroare = "";

	$profil = $_GET['user'];

	if(!isset($_GET['user']))
	{
		header("Location: home");
	}

	require "../app/controller/afisareProfil.php";

	require '../app/controller/numarAnunturi.php';

?>


<?php
	
	if(empty($eroare))
	{
		?>
			<div class="text-center">
		
				<h1 class="mt-5">Nume: <?= $nume ?></h1>
				<h1 class="mt-5">Prenume: <?= $prenume ?></h1>
				<h1 class="mt-5">Judet: <?= $judet ?></h1>
				<h1 class="mt-5">Email: <?= $email ?></h1>
				<h1 class="mt-5">Numar Anunturi Active: <?= $size?> </h1>
				<a href=<?= "cont-anunturi?user=".$profil ?> ><h1 class="mt-5">Vizualizare Anunturi</h1></a>


			</div>
		<?php
	}
	else
	{
		?>

			<div>
		
				<h1 class="text-center mt-5"><?= $eroare ?></h1>

			</div>


		<?php
	}

?>