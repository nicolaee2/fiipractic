<?php
	
	require '../app/controller/session.php';
	require '../resources/layouts/header.php';
	require '../app/controller/security.php';
	require '../resources/includes/navbar.php';

	$profil = $_GET['user'];
	$numeErr = $prenumeErr = $emailErr = "";

	if($_SESSION['id'] != $profil)
	{
		header("Location: home");
	}
	else if(isset($_POST['submit2']))
	{


		if(isset($_POST['submit2']))
		{

			$nume = $_POST['nume'];
			$prenume = $_POST['prenume'];
			$email = $_POST['email'];
			$judet = $_POST['judet'];


			if (empty($nume))
			{

		    	$numeErr = "Introduceti Numele";
		  	}
		  	else 
		  	{
		    
			    $nume = test_input($nume);
			    
			    if (!preg_match("/^[a-zA-Z ]*$/",$nume)) 
			    {
			      $numeErr = "Numele trebuie sa contina doar litere";
			      
			    }

			}
				
			if (empty($prenume))
			{

			    $prenumeeErr = "Introduceti Prenumele";
			}
		  	else 
		  	{
		    
			    $prenume = test_input($prenume);
			    
			    if (!preg_match("/^[a-zA-Z ]*$/",$prenume)) 
			    {
			      $prenumeErr = "Prenumele trebuie sa contina doar litere";
			    }
			}

			require '../app/controller/connect.php';

			$sql = "UPDATE `users` SET `firstName`=?,`lastName`=?,`email`=?,`judet`=? WHERE id =". $profil ;
		 	$stmt = mysqli_stmt_init($conn);
		 	if(!mysqli_stmt_prepare($stmt,$sql))
		 	{
		 		$emailErr = "Reitroduceti datele";
		 	}
		 	else
		 	{
		 		
		 		
		 		mysqli_stmt_bind_param($stmt, "ssss" , $nume,$prenume,$email,$judet);


		 		mysqli_stmt_execute($stmt);
		 		mysqli_stmt_store_result($stmt);
		        header("Location: profil?user=".$profil);
		 		
		 	}
		 	mysqli_stmt_close($stmt);
			
			
	
		
		}
	}
	else
	{
		$judet = $_POST['judet'];
		$nume = $_POST['nume'];
		$prenume = $_POST['prenume'];
		$email = $_POST['email'];
	}


		

?>



<div class="login-form">
        <form action="" method="post">
        
        <h2 class="text-center">Actualizare cont</h2>       


        <div class="eroare">
            <p><?php echo $numeErr ?></p>
            <p><?php echo $prenumeErr?></p>
            <p><?php echo $emailErr ?></p>
        
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="nume" value = "<?= $nume ?>"  placeholder="Nume" >
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="prenume" placeholder="Prenume" value = "<?= $prenume ?>" required="required">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" value = "<?= $email ?>" required="required">
        </div>

        <div class="form-group">
            
            <select class="form-control form-control-sm" name="judet" value="">
              <option <?php if($judet == "Alba") echo "selected" ?>>Alba</option>
              <option <?php if($judet == "Arad") echo "selected" ?>>Arad</option>
              <option <?php if($judet == "Arges") echo "selected" ?>>Arges</option>
              <option <?php if($judet == "Bacau") echo "selected" ?>>Bacau</option>
              <option <?php if($judet == "Bihor") echo "selected" ?>>Bihor</option>
              <option <?php if($judet == "Bistrita-Nasaud") echo "selected" ?>>Bistrita-Nasaud</option>
              <option <?php if($judet == "Botosani") echo "selected" ?>>Botosani</option>
              <option <?php if($judet == "Brasov") echo "selected" ?>>Brasov</option>
              <option <?php if($judet == "Braila") echo "selected" ?>>Braila</option>
              <option <?php if($judet == "Buzau") echo "selected" ?>>Buzau</option>
              <option <?php if($judet == "Caras-Severin") echo "selected" ?>>Caras-Severin</option>
              <option <?php if($judet == "Calarasi") echo "selected" ?>>Calarasi</option>
              <option <?php if($judet == "Cluj") echo "selected" ?>>Cluj</option>
              <option <?php if($judet == "Constanta") echo "selected" ?>>Constanta</option>
              <option <?php if($judet == "Covasna") echo "selected" ?>>Covasna</option>
              <option <?php if($judet == "Dambovita") echo "selected" ?>>Dambovita</option>
              <option <?php if($judet == "Dolj") echo "selected" ?>>Dolj</option>
              <option <?php if($judet == "Galati") echo "selected" ?>>Galati</option>
              <option <?php if($judet == "Giurgiu") echo "selected" ?>>Giurgiu</option>
              <option <?php if($judet == "Gorj") echo "selected" ?>>Gorj</option>
              <option <?php if($judet == "Harghita") echo "selected" ?>>Harghita</option>
              <option <?php if($judet == "Hunedoara") echo "selected" ?>>Hunedoara</option>
              <option <?php if($judet == "Ialomita") echo "selected" ?>>Ialomita</option>
              <option <?php if($judet == "Iasi") echo "selected" ?>>Iasi</option>
              <option <?php if($judet == "Ilfov") echo "selected" ?>>Ilfov</option>
              <option <?php if($judet == "Maramures") echo "selected" ?>>Maramures</option>
              <option <?php if($judet == "Maures") echo "selected" ?>>Maures</option>
              <option <?php if($judet == "Neamt") echo "selected" ?>>Neamt</option>
              <option <?php if($judet == "Olt") echo "selected" ?>>Olt</option>
              <option <?php if($judet == "Prahova") echo "selected" ?>>Prahova</option>
              <option <?php if($judet == "Satu Mare") echo "selected" ?>>Satu Mare</option>
              <option <?php if($judet == "Salaj") echo "selected" ?>>Salaj</option>
              <option <?php if($judet == "Sibiu") echo "selected" ?>>Sibiu</option>
              <option <?php if($judet == "Suceava") echo "selected" ?>>Suceava</option>
              <option <?php if($judet == "Teleorman") echo "selected" ?>>Teleorman</option>
              <option <?php if($judet == "Timis") echo "selected" ?>>Timis</option>
              <option <?php if($judet == "Tulcea") echo "selected" ?>>Tulcea</option>
              <option <?php if($judet == "Vaslui") echo "selected" ?>>Vaslui</option>
              <option <?php if($judet == "Valcea") echo "selected" ?>>Valcea</option>
              <option <?php if($judet == "Vrancea") echo "selected" ?>>Vrancea</option>
              
            </select>
        </div>

        <div class="form-group">
            <button type="submit" name ="submit2" class="btn btn-primary btn-block">Actualizeaza</button>
        </div>

    </form>
</div>



		

	


