<?php
	session_start();

	if(!isset($_SESSION['login'] ) ){
		header("LOCATION: view/index.html");
	}

	else{
		header("LOCATION: view/pages_adm/page_adm.php");	
	}
?>