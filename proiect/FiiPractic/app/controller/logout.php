<?php
	if(isset($_SESSION["email"]))
	{
		unset($_SESSION);
		session_destroy();
	}
	else
	{
		header("Location: home");
	}
?>