<?php

function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
  	//ClickJacking
  	header('X-FRAME-OPTIONS: DENY');


  	
?>