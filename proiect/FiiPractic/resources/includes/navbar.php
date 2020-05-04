

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="home">
    <img src="https://static-olxeu.akamaized.net/static/olxro/naspersclassifieds-regional/olxeu-atlas-web-olxro/static/img/fb/fb-image200x200.png" width="30" height="30" class="d-inline-block align-top" alt="">
  </a>

    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="home">Anunturi Gratuite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">

            <?php

                if(empty($_SESSION["email"]))
                {

            ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                    

                    <li class="nav-item">
                        <a class="nav-link" href="register">Signup</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="login">Publica Anunt</a>
                    </li>

            <?php

                }

                else
                {

            ?>  

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cont
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?= 'profil?user='. $_SESSION['id']  ?>">Vizualizare cont</a>
                            <a class="dropdown-item" href=<?="cont-anunturi?user=".$_SESSION['id'] ?> >Anunturile tale</a>
                            <a class="dropdown-item" href="logout">Delogheaza-te</a>
                        </div>
                    </div>


                    <li class="nav-item">
                        <a class="nav-link" href="adauga-anunt">Publica Anunt</a>
                    </li>
            <?php

                }

            ?>


        </ul>
    </div>

</nav>