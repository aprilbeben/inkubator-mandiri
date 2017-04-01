<?php 
	session_start();
	if(!isset($_SESSION['log'])){
		echo"<script language='javascript'>	
				window.location='login.php';
			</script>";	
	}
?>