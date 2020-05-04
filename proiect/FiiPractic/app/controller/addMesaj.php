<?php
	if(isset($_POST['submit_mesaj']))
	{
		
		$post_id = $_POST['post_id'];
		$user_id = $_POST['user_id'];
		$text = test_input($_POST['text']);
		$eroareMesaj = "";
		
		require '../app/controller/connect.php';

		$sql = "INSERT INTO mesaje (postare,user_id,post_id) VALUES (?,?,?)";
	 	$stmt = mysqli_stmt_init($conn);
	 	if(!mysqli_stmt_prepare($stmt,$sql))
	 	{
	 		
	 		$eroareMesaj = "Reitroduceti datele";
	 	}
	 	else
	 	{
	 		
	 		mysqli_stmt_bind_param($stmt, "sss" , $text,$user_id,$post_id);
	 		mysqli_stmt_execute($stmt);
	 		mysqli_stmt_store_result($stmt);
	 		

	        mysqli_stmt_close($stmt);
 		
 		}
 		mysqli_close($conn);
	}
?>