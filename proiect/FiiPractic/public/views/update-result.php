<?php
	
	require '../app/controller/session.php';
	require '../resources/layouts/header.php';
	require '../app/controller/security.php';
	require '../resources/includes/navbar.php';

	echo $_FILES['file'];
	require '../app/controller/update.php';


?>