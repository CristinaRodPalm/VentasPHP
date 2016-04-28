<?php 
	session_start();
	$usu = $_POST["usuario"];
	$password = $_POST["password"];

	if($usu == "admin" && $password == "admin"){
		$_SESSION['login'] = 1;
		unset($_SESSION['error']);
		header("Location: ../index.php");	
	}else{ 
		$_SESSION['error'] = "L'usuari no existeix";
		header("Location: login.php");	
	}
	
?>