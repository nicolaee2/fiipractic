<div class="login-form">
	    <form action="" method="post" enctype="multipart/form-data">

	        <h2 class="text-center">Actualizeaza Anunt</h2> 

          <div class="eroare">
            <p><?php echo $eroareImg ?></p>
            <p><?php echo $eroareDescriere ?></p>
            <p><?php echo $eroareTitlu ?></p>
            <p><?php echo $eroarePret ?></p>
            <p><?php echo $eroareTelefon ?></p>
        </div>

          <div class="form-group mt-5 col-md-4">
            	<h5>*Titlu:</h5>
                <input type="text" class="form-control" name="titlu" placeholder="Adauga titlu" value="<?= $titlu ?>" required="required">
          </div>

            <h5 class="mt-5 ml-2">*Pret:</h5>
            <div class="form-inline col-md-5">
                <input type="number" class="form-control" name="pret" placeholder="Pret in lei" min=0 value ="<?= $pret ?>" required="required">
                <p class="ml-2 pt-2">Lei</p>
            	
            </div>


            <div class="checkbox ml-3 mt-2">
              <label><input type="checkbox" name = "negociabil" <?php if($negociabil == 1) echo "checked" ?> value="negociabil">Negociabil</label>
            </div>
            
            <div class="checkbox ml-3">
              <label><input type="checkbox" name= "schimb" <?php if($schimb == 1) echo "checked" ?> value="schimb">Schimb</label>
            </div>

            <div class="form-group mt-5 col-md-4">
            	<h5>*Categoria:</h5>
                <select class="form-control form-control-sm" name="categorie" value="">
                  
                  <option <?php if($categorie == "Auto,moto si ambarcatiuni") echo "selected" ?> >Auto,moto si ambarcatiuni</option>
                  <option <?php if($categorie == "Imobiliare") echo "selected" ?> >Imobiliare</option>
                  <option <?php if($categorie == "Locuri de munca") echo "selected" ?> >Locuri de munca</option>
                  <option <?php if($categorie == "Electronice si electrocasnice") echo "selected" ?> >Electronice si electrocasnice</option>
              	  <option <?php if($categorie == "Moda si frumusete") echo "selected" ?> >Moda si frumusete</option>
                  <option <?php if($categorie == "Casa si gradina") echo "selected" ?> >Casa si gradina</option>
                  <option <?php if($categorie == "Mama si copilul") echo "selected" ?> >Mama si copilul</option>
                  <option <?php if($categorie == "Sport, timp liber, arta") echo "selected" ?> >Sport, timp liber, arta</option>
                  <option <?php if($categorie == "Animale de companie") echo "selected" ?> >Animale de companie</option>
                  <option <?php if($categorie == "Agro si Industrie") echo "selected" ?> >Agro si Industrie</option>
                  <option <?php if($categorie == "Servicii,afaceri,echipamente firme") echo "selected" ?> >Servicii,afaceri,echipamente firme</option>
                </select>
            </div>



            <div class="form-group mt-5">
            	<h5>*Descriere:</h5>
            	<textarea name="descriere" class="form-control" rows="5" cols="15"  placeholder="Adauga o descriere"><?= $descriere ?></textarea>
                
            </div>

            <div class="form-group mt-5">
              <h5>*Telefon:</h5>
              <h6>Ex: 0744233098</h6>
              <input name="telefon" class="form-control" rows="5" cols="15" value="<?= $telefon ?>" placeholder="Numar de telefon:" required></input>
                
            </div>

            <div class="form-group mt-5">
            	<h5>Adauga imagine</h5>
            	<input type="file" name="file">
            </div>

            <input type="hidden" name="id" value="<?php echo $id_postare; ?>">
            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">

            <div class="form-group mt-5">
                <button type="submit" name="submitUpd" class="btn btn-primary btn-block">Actualizeaza Anunt</button>
            </div>    

	    </form>
	</div>
