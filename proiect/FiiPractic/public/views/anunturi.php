<?php
	
	require '../app/controller/session.php';
	require '../app/controller/security.php';
	require '../resources/layouts/header.php';
    require '../resources/includes/navbar.php';

    $categ = "";
    $tit = "";
    $prmin = 0;
    $prmax = 999999999;
    $judet = "";
    $negociabil = 0;
    $schimb = 0;

    if(isset($_GET['c']))
		$categ = test_input($_GET['c']);
	else
		$categ = "";

	if(isset($_POST['t']))
		$tit = test_input($_POST['t']);
	else
		$tit = "";

	if(isset($_POST['submitFlt']))
	{

		$tit = test_input($_POST['title']);
		$categ = $_POST['categorie'];
		$prmin = $_POST['pret_minim'];
		if(empty($prmin))
			$prmin = 0;
		$prmax = $_POST['pret_maxim'];
		if(empty($prmax))
			$prmax = 999999999;

		$judet = $_POST['judet'];
		

		if(isset($_POST['schimb']))
			$schimb = 1;
		else
			$schimb = 0;

		if(isset($_POST['negociabil']))
			$negociabil = 1;
		else
			$negociabil = 0;



	}

	if(!isset($_GET['c']) && !isset($_POST['t']) && !isset($_POST['submitFlt']) )
	{
		header("Location: home");
	}

	else
	{

		require '../resources/includes/filter.php';

		if($categ != "")
		{

			
			switch($categ)
			{
				case 'auto':
				case 'Auto,moto si ambarcatiuni':
					$categ = "Auto,moto si ambarcatiuni";
					break;
				case 'Imobiliare':
				case 'Imobiliare':
					$categ = "Imobiliare";
					break;
				case 'locuri_de_munca':
				case 'Locuri de munca':
					$categ = "Locuri de munca";
					break;
				case 'electronice_si_electrocasnice':
				case 'Electronice si electrocasnice':
					$categ = "Electronice si electrocasnice";
					break;
				case 'moda_si_frumusete':
				case 'Moda si frumusete':
					$categ = "Moda si frumusete";
					break;
				case 'casa_si_gradina':
				case 'Casa si gradina':
					$categ = "Casa si gradina";
					break;
				case 'mama_si_copilul':
				case 'Mama si copilul':
					$categ = "Mama si copilul";
					break;
				case 'sport':
				case 'Sport, timp liber, arta':
					$categ = "Sport, timp liber, arta";
					break;
				case 'animal':
				case 'Animale de companie':
					$categ = "Animale de companie";
					break;
				case 'agro':
				case 'Agro si Industrie':
					$categ = "Agro si Industrie";
					break;
				case 'servicii':
				case 'Servicii,afaceri,echipamente firme':
					$categ = "Servicii,afaceri,echipamente firme";
					break;
				default:
					header("Location: home");
		
			}

		}
		

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "anunt";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT * FROM anunt WHERE pret >= '${prmin}' AND pret <= '${prmax}' ";
		if(!empty($categ))
		{
			$sql .= " AND categorie = '${categ}' ";
		}
		if(!empty($judet))
		{
			$sql .= " AND judet = '${judet}'";
		}
		if($negociabil == 1)
		{
			$sql .=" AND negociabil = 1";
		}
		if($schimb == 1)
		{
			$sql .= " AND schimb = 1";
		}
		if(!empty($tit))
		{
			$sql .= " AND titlu LIKE '%${tit}%'";
		}

		$sql .= " ORDER BY created_at DESC";

		//echo $sql;
		
		$result = mysqli_query($conn, $sql);
		//var_dump($result);
		if (mysqli_num_rows($result) > 0) 
		{
		   
		    while($row = mysqli_fetch_assoc($result)) {

		    		$titlu = $row['titlu'];
		    		$descriere = $row['descriere'];
		    		$img = $row['img'];
		    		$pret = $row['pret'];
		    		$id = $row['id'];
		    		$user_id = $row['user_id'];
		    		$creat = $row['created_at'];

		    	?>

		    		<div class="anunt">
		    		<a href="<?= "postare?a=".$id ?>" >
				    		<div class="card flex-row flex-wrap mt-5">
							    <div class="card-header border-0">
							        <img src="<?php echo "../app/controller/uploads/".$img ?>" alt="">
							    </div>
							    <div class="card-block px-2">
							        <h4 class="card-title"><?= $titlu ?></h4>
							        <p class="card-text"><?= $descriere ?></p>
							        <p class="card-text">Pret: <?= $pret ?> LEI</p>
							    	<p class="card-text">Anunt publicat:<?= $creat ?></p>
							    </div>						    

							</div>
		   			</a>
		   		</div>
		    	
		    	<?php

		    	echo "<br>";

		    }
		} else {
		    ?>

		    <div class="text-center mt-5">
		    	
		    	<h1>Nu exista anunturi in aceasta categorie</h1>

		    </div>

		    <?php
		}

		mysqli_close($conn);


	}

?>