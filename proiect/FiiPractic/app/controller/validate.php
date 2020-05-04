<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["firstName"])) {
	    $firstnameErr = "Introduceti Numele";
	  } else {
	    $name = test_input($_POST["firstName"]);
	    
	    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
	      $firstnameErr = "Numele trebuie sa contina doar litere";
	      $firstName = "";
	    }
	    else
	    {
	    	$firstName =  $_POST["firstName"];

	    }
	  }
	  
	  if (empty($_POST["lastName"])) {
	    $lastnameErr = "Introduceti Prenumele";
	  } else {
	    $name = test_input($_POST["lastName"]);
	    
	    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
	      $lastnameErr = "Prenumele trebuie sa contina doar litere";
	      $lastName = "";
	    }
	    else
	    {
	    	$lastName =  $_POST["lastName"];
	    }
	  }

	  if (empty($_POST["email"])) {
	    $emailErr = "Introduceti Email-ul";
	  } else {
	    $email = test_input($_POST["email"]);
	    
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      $emailErr = "Formatul email-ului este incorect";
	      $email = "";
	    }
	    else
	    {
	    	$email =  $_POST["email"];
	    }
	  }
	    
	  if (empty($_POST["judet"])) {
	    $judetErr = "Judet Invalid";
	  } else {
	    $name = test_input($_POST["judet"]);
	    
	    $judet =  $_POST["judet"];
	  }

	  if(empty($_POST["password"]))
	  {
	  	$passwordErr = "Introduceti Parola";
	  }
	  else
	  {
	  	$password =  $_POST["password"];
	  }
	  
	  if(empty($_POST["passwordRpt"]))
	  {
	  	$passwordRptErr = "Reintroduceti Parola";
	  }
	  

	  if($_POST["password"] != $_POST["passwordRpt"])
	  {
	  	$passwordMatch = "Reintroduceti parola";
	  }

	  
	}

	

?>