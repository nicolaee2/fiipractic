<?php
	
	if(isset($_POST['submit']) || isset($_POST['submitUpd']))
	{
		$file = $_FILES['file'];
		
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileType = $_FILES['file']['type'];
		$fileError = $_FILES['file']['error'];
		$fileDestination = "";
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg','jpeg','png');
		if(in_array($fileActualExt,$allowed))
		{
			if($fileError === 0)
			{
				if($fileSize < 5000000)
				{
					$fileNameNew = uniqid('',true).'.'. $fileActualExt;
					$fileDestination =  __DIR__.'/uploads/'. $fileNameNew;
					
					move_uploaded_file($fileTmpName, $fileDestination);
					
				}
				else
				{
					$eroareImg = "Imaginea este prea mare < 5MB";
				}
			}
			else
			{
				$eroareImg = "Eroare la publicarea imaginii";
			}
		}
		else
		{
			
			$fileDestination = "";
		}
		
	}

?>