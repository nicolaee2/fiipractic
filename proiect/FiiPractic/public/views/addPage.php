<?php 

  require '../app/controller/session.php';
  require '../app/controller/security.php';
  require '../resources/layouts/header.php';
  require '../resources/includes/navbar.php';
  require '../app/controller/adaugaAnunt.php';


?>

<div class="login-form">
  <form action="" method="post" enctype="multipart/form-data">


    <h1 class="text-center">Adauga Anunt</h1>


    <div class="eroare">
      <p><?php echo $eroareImg ?></p>
      <p><?php echo $eroareDescriere ?></p>
      <p><?php echo $eroareTitlu ?></p>
      <p><?php echo $eroarePret ?></p>
      <p><?php echo $eroareTelefon ?></p>
    </div>


    <div class="form-group mt-5 col-md-4">
      <h5>*Titlu:</h5>
      <input type="text" class="form-control" name="title" placeholder="Adauga titlu" required="required">
    </div>

    <h5 class="mt-5 ml-2">*Pret:</h5>

    <div class="form-inline col-md-5">
      <input type="number" class="form-control" name="pret" placeholder="Pret in lei" min=0 required="required">
      <p class="ml-2 pt-2">Lei</p>
    </div>


    <div class="checkbox ml-3 mt-2">
      <label><input type="checkbox" name = "negociabil" value="negociabil">Negociabil</label>
    </div>

    <div class="checkbox ml-3">
      <label><input type="checkbox" name= "schimb" value="schimb">Schimb</label>
    </div>


    <div class="form-group mt-5 col-md-4">
      <h5>*Categoria:</h5>
      <select class="form-control form-control-sm" name="categorie" value="">
        <option>Auto,moto si ambarcatiuni</option>
        <option>Imobiliare</option>
        <option>Locuri de munca</option>
        <option>Electronice si electrocasnice</option>
        <option>Moda si frumusete</option>
        <option>Casa si gradina</option>
        <option>Mama si copilul</option>
        <option>Sport, timp liber, arta</option>
        <option>Animale de companie</option>
        <option>Agro si Industrie</option>
        <option>Servicii,afaceri,echipamente firme</option>
      </select>
    </div>

      <div class="form-group mt-5">
        <h5>*Descriere:</h5>
        <textarea name="descriere" class="form-control" rows="5" cols="15" placeholder="Adauga o descriere"></textarea>
      </div>

      <div class="form-group mt-5">
        <h5>*Telefon:</h5>
        <h6>Ex: 0744233098</h6>
        <input name="telefon" class="form-control" rows="5" cols="15" placeholder="Numar de telefon:"></input>
      </div>

      <div class="form-group mt-5">
        <h5>Adauga imagine</h5>
        <input type="file" name="file">
      </div>


      <input type="hidden" name="_csrfname" value="<?php echo $name; ?>">
      <input type="hidden" name="_csrfvalue"value="<?php echo $token; ?>">

      <div class="form-group mt-5">
        <button type="submit" name="submit" class="btn btn-primary btn-block">Adauga Anunt</button>
      </div>    
    </form>

  </div>


<?php
  require '../resources/layouts/footerLogin.php';
?>