<?php
	require_once("../connection.php");

	$codiClient = $_GET['id'];
	$nom = $_POST['nom'];
	$cognoms = $_POST['cognoms'];
	$dni = $_POST['dni'];
	$poblacio = $_POST['poblacio'];
	$codi_postal = $_POST['codi_postal'];
	$telefon = $_POST['telefon'];

	if($nom == "" || $cognoms == "" || $dni == "" || $poblacio == "" || $codi_postal == "" || $telefon == ""){
		unset ($nom);
		unset ($cognoms);
		unset ($dni);
		unset ($poblacio);
		unset ($codi_postal);
		unset ($telefon);
		header("Location: ../modificar/client.php?id=$codiClient");
	}else{
		$query = "update clients set nom='$nom', cognoms='$cognoms', dni='$dni', poblacio='$poblacio', codi_postal='$codi_postal', telefon='$telefon' where codi = $codiClient;";
		$result = mysqli_query($con, $query);

		if($result) header("Location: ../clients.php");
		else header("Location: ../modificar/client.php?id=$codiClient");
		echo $query;
	}
mysqli_close($con);
?>
