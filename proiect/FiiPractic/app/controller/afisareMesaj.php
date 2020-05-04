<?php

	require '../app/controller/connect.php';

    $sql = "SELECT * FROM mesaje WHERE post_id = '${id_postare}' ORDER BY created_at ASC ";
    //echo $sql;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
      {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {

              $text = $row['postare'];
              $user_id = $row['user_id'];

              $nume = "Fara Nume";
              $prenume = "Fara Prenume";
              $judet = "Fara judet";

              require "../app/controller/cautaUser.php";


              if($user_id == $id_user)
              {

              	?>

              	  <h5 class="text-danger">De la: <a class="text-danger" href=<?= "profil?user=".$user_id ?> > <?php echo $nume;echo " "; echo $prenume; ?></h5></a>
	              	<h5 class="text-danger">Din: <?php echo $judet; ?></h5>
	              	<p class="text-danger"><?php echo $text ?></p>
	              	<br>

              	<?php

              }
              else
              {
              	?>
              	 <h5>De la: <a href=<?= "profil?user=".$user_id ?> > <?php echo $nume;echo " "; echo $prenume; ?></h5> </a>
		             <h5>Din: <?php echo $judet; ?></h5>
		             <p><?php echo $text ?></p>
		             <br>
              	<?php
              }

          }
      } 
      else {
          echo "Nu Exista Mesaje";
      }

?>