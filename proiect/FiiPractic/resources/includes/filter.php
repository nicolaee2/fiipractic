<div>
	
	<div class="login-form">
    <form action="anunturi" method="post" enctype="multipart/form-data">
        

        <h1 class="text-center">Filtreaza Anunturi</h1>


        <div class="form-group mt-2 col-md-4">
        	<h5>Titlu:</h5>
            <input type="text" class="form-control" name="title" placeholder="Adauga titlu">
        </div>

        <h5 class="mt-2 ml-2">Pret minim:</h5>
        <div class="form-inline col-md-5">
            <input type="number" class="form-control" name="pret_minim" placeholder="Pret in lei" min=0 value="<?php echo $prmin ?>">
            <p class="ml-2 pt-2">Lei</p>
        	
        </div>

        <h5 class="mt-2 ml-2">Pret maxim:</h5>
        <div class="form-inline col-md-5">
            <input type="number" class="form-control" name="pret_maxim" placeholder="Pret in lei" min=0 value="<?php echo $prmax ?>">
            <p class="ml-2 pt-2">Lei</p>
        	
        </div>
          
        <div class="checkbox ml-3 mt-2">
          <label><input type="checkbox" name = "negociabil" value="negociabil" <?php if($negociabil == 1) echo "checked" ?> > Doar negociabil</label>
        </div>
        
        <div class="checkbox ml-3">
          <label><input type="checkbox" name= "schimb" value="schimb" <?php if($schimb == 1) echo "checked" ?>>Doar Schimb</label>
        </div>
        
        

        <div class="form-group mt-2 col-md-4">
        	<h5>Categoria:</h5>
            <select class="form-control form-control-sm" name="categorie" >
              <option value="">Toate categoriile</option>
              <option <?php if($categ == "Auto,moto si ambarcatiuni" || $categ == "auto") echo "selected" ?> > Auto,moto si ambarcatiuni</option>
              <option <?php if($categ == "Imobiliare" || $categ == "Imobiliare") echo "selected" ?> >Imobiliare</option>
              <option <?php if($categ == "Locuri de munca" || $categ == "locuri_de_munca" ) echo "selected" ?> >Locuri de munca</option>
              <option <?php if($categ == "Electronice si electrocasnice" || $categ == "electronice_si_electrocasnice" ) echo "selected" ?>>Electronice si electrocasnice</option>
          	  <option <?php if($categ == "Moda si frumusete" || $categ == "moda_si_frumusete" ) echo "selected" ?>>Moda si frumusete</option>
              <option <?php if($categ == "Casa si gradina" || $categ == "casa_si_gradina" ) echo "selected" ?>>Casa si gradina</option>
              <option <?php if($categ == "Mama si copilul" || $categ == "mama_si_copilul" ) echo "selected" ?>>Mama si copilul</option>
              <option <?php if($categ == "Sport, timp liber, arta" || $categ == "sport" ) echo "selected" ?>>Sport, timp liber, arta</option>
              <option <?php if($categ == "Animale de companie" || $categ == "animal" ) echo "selected" ?>>Animale de companie</option>
              <option <?php if($categ == "Agro si Industrie" || $categ == "agro" ) echo "selected" ?>>Agro si Industrie</option>
              <option <?php if($categ == "Servicii,afaceri,echipamente firme" || $categ == "servicii" ) echo "selected" ?>>Servicii,afaceri,echipamente firme</option>
            </select>
        </div>

        <div class="form-group mt-2 col-md-4">
        	<h5>Judet:</h5>
            <select class="form-control form-control-sm" name="judet" value="">
              <option value="">Toate judetele</option>
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

        <div class="form-group mt-2">
            <button type="submit" name="submitFlt" class="btn btn-primary btn-block">Filtreaza anunturi</button>
        </div>    
    </form>
    
</div>


</div>