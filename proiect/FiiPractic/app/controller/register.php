<?php

	require '../app/controller/session.php';
	require '../app/controller/security.php';
	
	$firstnameErr = $lastnameErr = $emailErr = $judetErr =  $passwordErr = $passwordRptErr = $passwordMatch =  "";
    $firstName = $lastName = $email = $judet = $password  = "";


    if(!empty($_SESSION['email']))
    {
        header("Location: home");
    }

    $name = 'token-' . mt_rand();
    $token = bin2hex(random_bytes(32));
    $_SESSION[$name] = $token;


    if (isset($_POST['submit'])) 
    {

			    require '../app/controller/validate.php';

                if(    empty($firstnameErr) 
                    && empty($lastnameErr) 
                    && empty($emailErr) 
                    && empty($judetErr) 
                    && empty($passwordErr) 
                    && empty($passwordRptErr) 
                    && empty($passwordMatch) 
                  )
                {
                    //echo "1";
                	require '../app/controller/connect.php';
                    require '../app/controller/dbSearch.php';
                    //require '../app/controller/insert.php';
                    mysqli_stmt_close($stmt);
                    
                    
                }
        
    }		
	
?>

