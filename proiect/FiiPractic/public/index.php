<?php

//url path starting from localhost
$request = $_SERVER['REQUEST_URI'];

//base url path of the application
$BASE_URL = '/FiiPractic/public'; 

$path = str_replace($BASE_URL,'', $request);


switch ($path) {
    case '/' :
        require __DIR__ . '/views/main.php';
        break;

    case '' :
        require __DIR__ . '/views/main.php';
        break;

    case '/home':
        require __DIR__ . '/views/main.php';
        break;

    case '/about' :
        require __DIR__ . '/views/login.php';
        break;

    case '/login' :
        require __DIR__ . '/views/login.php';
        break;

    case '/register' :
        require __DIR__ . '/views/register.php';
        break;
    case '/logout' :
        require __DIR__ . '/views/logout.php';
        break;

    case '/adauga-anunt' :
        require __DIR__ . '/views/addPage.php';
        break;

    case '/update':
        require __DIR__ . '/views/update.php';
        break;    

    case '/update-result':
        require __DIR__ . '../views/update-result.php';
        break;  
        
    case  strncmp($path, "/cont-anunturi",14) == 0:
        require __DIR__ . '/views/contAnunturi.php';
        break;
    
    case strncmp($path, "/postare",8) == 0 :
        require __DIR__ . '/views/anunt.php';
        break;

    case strncmp($path, "/anunturi",9) == 0 :
        require __DIR__ . '/views/anunturi.php';
        break;
        
    case strncmp($path, "/profil",6) == 0 :
        require __DIR__ . '/views/profil.php';
        break;
    
    
    default:
        http_response_code(404);
        //echo $path;
        require __DIR__ . '/views/error.php';
        break;
}

?>