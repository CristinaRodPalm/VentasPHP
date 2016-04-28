<?php
	require_once("../connection.php");

	$nom = $_POST['nom'];
	$propietari = $_POST['propietari'];
	$dni = $_POST['dni'];
	$poblacio = $_POST['poblacio'];
	$codi_postal = $_POST['codi_postal'];
	$telefon = $_POST['telefon'];
	$comissio = $_POST['comissio'];

	$query = "insert into fabriques(nom, propietari, dni, poblacio, codi_postal, telefon, comissio) values('$nom', '$propietari', '$dni', '$poblacio', '$codi_postal', '$telefon', '$comissio')";
	
	if(mysqli_query($con, $query)) header("Location: ../fabriques.php");
	else echo "ERROR";
	mysqli_close($con);
?>
