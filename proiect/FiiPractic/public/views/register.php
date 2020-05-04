<?php 

    require '../resources/layouts/headerLogin.php';
    require '../app/controller/register.php';
?>

<div class="login-form">
        <form action="" method="post">
        
        <h2 class="text-center">Sign Up</h2>       
        
        <div class="eroare">
            <p><?php echo $firstnameErr ?></p>
            <p><?php echo $lastnameErr?></p>
            <p><?php echo $emailErr ?></p>
            <p><?php echo $judetErr ?></p>
            <p><?php echo $passwordErr ?></p>
            <p><?php echo $passwordRptErr ?></p>
            <p><?php echo $passwordMatch ?></p>

        
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="firstName" value = "<?= $firstName ?>"  placeholder="Nume" >
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="lastName" placeholder="Prenume" value = "<?= $lastName ?>" required="required">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" value = "<?= $email ?>" required="required">
        </div>

        <div class="form-group">
            
            <select class="form-control form-control-sm" name="judet" value="">
              <option>Alba</option>
              <option>Arad</option>
              <option>Arges</option>
              <option>Bacau</option>
              <option>Bihor</option>
              <option>Bistrita-Nasaud</option>
              <option>Botosani</option>
              <option>Brasov</option>
              <option>Braila</option>
              <option>Buzau</option>
              <option>Caras-Severin</option>
              <option>Calarasi</option>
              <option>Cluj</option>
              <option>Constanta</option>
              <option>Covasna</option>
              <option>Dambovita</option>
              <option>Dolj</option>
              <option>Galati</option>
              <option>Giurgiu</option>
              <option>Gorj</option>
              <option>Harghita</option>
              <option>Hunedoara</option>
              <option>Ialomita</option>
              <option>Iasi</option>
              <option>Ilfov</option>
              <option>Maramures</option>
              <option>Maures</option>
              <option>Neamt</option>
              <option>Olt</option>
              <option>Prahova</option>
              <option>Satu Mare</option>
              <option>Salaj</option>
              <option>Sibiu</option>
              <option>Suceava</option>
              <option>Teleorman</option>
              <option>Timis</option>
              <option>Tulcea</option>
              <option>Vaslui</option>
              <option>Valcea</option>
              <option>Vrancea</option>
              
            </select>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Parola" required="required">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="passwordRpt" placeholder="Confirmare Parola" required="required">
        </div>

        <input type="hidden" name="_csrfname" value="<?php echo $name; ?>">
        <input type="hidden" name="_csrfvalue"value="<?php echo $token; ?>">

        <div class="form-group">
            <button type="submit" name ="submit" class="btn btn-primary btn-block">Sign Up</button>
        </div>

  
    </form>
    <p class="text-center"><a href="login">Ai cont?</a></p>
    <p class="text-center"><a href="home">Pagina de start</a></p>
</div>



<?php
	require '../resources/layouts/footerLogin.php';
?>