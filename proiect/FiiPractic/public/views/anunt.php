
<link rel="stylesheet" type="text/css" href="../resources/css/produs.css">

<?php
    
  require '../app/controller/session.php';
  require '../resources/layouts/header.php';
  require '../app/controller/security.php';
  require '../resources/includes/navbar.php';
  require '../app/controller/addMesaj.php';

  $id_postare = test_input($_GET['a']);

  require '../app/controller/deleteMesaj.php';
  require '../app/controller/connect.php';

  $telefon = "Nu exista";
  $sql = "SELECT * FROM anunt WHERE id = '${id_postare}' ";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result); 
        $negociabil = $row['negociabil'];
        $schimb = $row['schimb'];
        $titlu = $row['titlu'];
        $categorie = $row['categorie'];
        $descriere = $row['descriere'];
        $pret = $row['pret'];
        $img = $row['img'];
        $id_user = $row['user_id'];
        $telefon = $row['telefon'];
        
    } 
    else 
    {
        $negociabil = 0;
        $schimb = 0;
        $titlu = "Nu exista titlu";
        $descriere = "Nu exista Descriere";
        $pret = "Nu exista Pret";
        $img = "";
        $id_user = "";
        $telefon = "Nu exista";
    }

    if(!empty($id_user))
    {
        $sql = "SELECT * FROM users WHERE id = '${id_user}' ";
        //echo $sql;
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) 
        {
            $row = mysqli_fetch_assoc($result); 
            $nume = $row['firstName'];
            $prenume = $row['lastName'];
            $email = $row['email'];
            $judet = $row['judet'];
            
        } 
        else 
        {
            $nume = "Nu exista user";
            $prenume = "";
            $email = "Nu exista email";
            $judet = "Nu exista judet";
            
        }
    }
    else
    {
        $nume = "Nu exista user";
        $prenume = "";
        $email = "Nu exista email";
        $judet = "Nu exista judet";
        
    }

    mysqli_close($conn);
?>


<div class="container">
  
<div class="card">
  <div class="row">
    <aside class="col-sm-5 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="#"><img src=<?php echo "../app/controller/uploads/".$img ?>></a></div>
</div> <!-- slider-product.// -->

</article> <!-- gallery-wrap .end// -->
    </aside>
    <aside class="col-sm-7">
<article class="card-body p-5">
  <h3 class="title mb-3"><?= $titlu ?> <?php if(isset($_SESSION['email']) && $_SESSION['email'] == $email)  echo "(Anuntul tau)" ?></h3>

<p class="price-detail-wrap"> 
  <span class="price h3 text-warning"> 
    <span class="num">Pret: <?=$pret?> LEI</span>
  </span> 
</p> <!-- price-detail-wrap .// -->
<p>
  <span>
    <?php
        if($negociabil == 1)
        {
          ?>
            <span class="num font-weight-bold">Pret negociabil</span>
          <?php
        }
        else
        {
          ?>
            <span class="num font-weight-bold">Pretul nu este negociabil</span>
          <?php
        }
    ?>
  </span>

</p>

<p>
  <span>
    <?php
        if($schimb == 1)
        {
          ?>
            <span class="num font-weight-bold">Vanzatorul accepta schimburi</span>
      <?php
        }
        else
        {
      ?>
            <span class="num font-weight-bold">Vanzatorul nu accepta schimburi</span>
          <?php
        }
    ?>
  </span>

</p>

<dl class="item-property">
  <dt>Descriere</dt>
  <dd><p><?=$descriere ?> </p></dd>
</dl>
<dl class="item-property">
  <dt>Judet</dt>
  <dd><p><?=$judet ?> </p></dd>
</dl>

<hr>

<div id="vanzator">
  <h3>Vanzator:</h3>
  <dl class="item-property">
    <dt>Nume:</dt>
    <dd><p><?=$nume?> </p></dd>
  </dl>
  <dl class="item-property">
    <dt>Prenume:</dt>
    <dd><p><?=$prenume?> </p></dd>
  </dl>
  <dl class="item-property">
    <dt>Email:</dt>
    <dd><p><?=$email?> </p></dd>
  </dl>
  <dl class="item-property" id="tel" style="display:none">
    <dt>Telefon:</dt>
    <dd><p><?=$telefon?> </p></dd>
  </dl>
  <dl class="item-property">
  <a href=<?= "cont-anunturi?user=" . $id_user ?> ><dt>Vezi alte anunturi ale acestui Vanzator</dt></a>
  
</dl>
</div>


<div class="row" id="mes" style="display:none">
  
   <form action="" method="post">

      <div class="form-group mt-3">
        <h5>Mesaj:</h5>
        <textarea name="text" class="form-control" rows="2" cols="30" placeholder="Trimite un mesaj"></textarea>
      </div>

      <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
      <input type="hidden" name="post_id" value="<?php echo $id_postare; ?>">

      <div class="form-group mt-2">
          <button type="submit" name="submit_mesaj" class="btn btn-warning btn-block">Trimite Mesaj</button>
      </div>    

   </form>


</div>

<hr>

<div class="row ">

  <div class="mr-2 mt-2">
    <button type="button" class="btn btn-primary" onclick="telefon()">Arata Telefon</button>  
  </div>


  <?php

    if(isset($_SESSION['email']))
    {

  ?>
        <div class="mr-2 mt-2">
          <button type="button" class="btn btn-warning" onclick="mesaj()">Trimite Mesaj Public</button>
        </div>
    
  <?php

    }

    if(isset($_SESSION['email']) && $_SESSION['email'] == $email)
    {

  ?>
      <div class="mr-2 mt-2">

        <form action="update" method="post" >
          
          <input type="hidden" name="titlu_" value="<?php echo $titlu; ?>">
          <input type="hidden" name="descriere_" value="<?php echo $descriere; ?>">
          <input type="hidden" name="pret_" value="<?php echo $pret; ?>">
          <input type="hidden" name="img_" value="<?php echo $img; ?>">
          <input type="hidden" name="telefon_" value="<?php echo $telefon; ?>">
          <input type="hidden" name="id" value="<?php echo $id_postare; ?>">
          <input type="hidden" name="categorie_" value="<?php echo $categorie; ?>">
          <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
          <input type="hidden" name="negociabil_" value="<?php echo $negociabil; ?>">
          <input type="hidden" name="schimb_" value="<?php echo $schimb; ?>">
          <button type="submit" name = "submit" class="btn btn-primary">Modifica Anunt</button>  
        </form>
      </div>

      <div class="mt-2">
        <form action="" method="post" >
          <button type="submit" name = "submitDlt" class="btn btn-danger">Sterge Anunt</button>  
        </form>
      </div>
        
  <?php
    }
  ?>
</div>

<div class="row mt-5">
  <h4>Mesaje:</h4>
</div>

<?php

  echo "<br>";
  require '../app/controller/afisareMesaj.php';

?>

</div>


<script type="text/javascript">
  
  function telefon()
  {
    var x = document.getElementById("tel");
    if (x.style.display === "none") 
    {
      x.style.display = "block";
    } 
    else 
    {
      x.style.display = "none";
    }
  } 

  function mesaj() 
  {
    var x = document.getElementById("mes");
    if (x.style.display === "none")
    {
      x.style.display = "block";
    } 
    else 
    {
      x.style.display = "none";
    }
  } 

</script>
