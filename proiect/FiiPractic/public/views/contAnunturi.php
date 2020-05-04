<?php

	require '../app/controller/session.php';
	require '../resources/layouts/header.php';
	require '../app/controller/security.php';
	require '../resources/includes/navbar.php';
	require '../app/controller/connect.php';

	$id_user = test_input($_GET['user']);
	$eroare = "";
	$sql = "SELECT * FROM anunt  WHERE user_id =" .  $id_user. " ORDER BY created_at DESC" ;

	//echo $sql;

    $result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) 
		{
		    
		   $mesaj = "Anunturile Vanzatorului";
		   if(isset($_SESSION['email']) && $_SESSION['id'] == $id_user)
		   		$mesaj = "Anunturile tale";

		    ?>

		    	<h1 class="text-center mt-5"><?= $mesaj ?> </h1>
		    	<a href=<?= "profil?user=".$id_user ?> ><h5 class="text-center mt-5">Vizualizare profil</h5></a>

		    <?php


		    while($row = mysqli_fetch_assoc($result)) {
		    		


		    		$titlu = $row['titlu'];
		    		$descriere = $row['descriere'];
		    		$img = $row['img'];
		    		$pret = $row['pret'];
		    		$id = $row['id'];
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
		} 
		else {

		    $eroare = "Nu ai publicat niciun anunt";
		}
    

?>



<div>
		
	<h1 class="text-center mt-5"><?= $eroare ?></h1>

</div>