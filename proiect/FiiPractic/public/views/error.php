<?php
	require '../resources/layouts/header.php';
	require '../resources/includes/navbar.php';

	$request = $_SERVER['REQUEST_URI'];

	
	$BASE_URL = '/FiiPractic/public'; 

	$path = str_replace($BASE_URL,'', $request);

	$path = str_replace('/','', $path);
	echo $path;
?>
	
	

	<div class="content">
		<h1>Error</h1>
		
	</div>



<?php
	require '../resources/layouts/footer.php';
?>