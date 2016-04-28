<?php 
	session_start();
	if(!isset($_SESSION['login'])){
		header('Location: conexion/login.php');
	}
	$con = mysqli_connect("localhost","root","","ventes") or die("No s'ha pogut accedir a la base de dades."); 
?>
