<?php
	require_once("../connection.php");

	$nom = $_POST['nom'];
	$cognoms = $_POST['cognoms'];
	$dni = $_POST['dni'];
	$poblacio = $_POST['poblacio'];
	$codi_postal = $_POST['codi_postal'];
	$telefon = $_POST['telefon'];

	$query = "insert into clients(nom, cognoms, dni, poblacio, codi_postal, telefon) values('$nom', '$cognoms', '$dni', '$poblacio', '$codi_postal', '$telefon')";
	$result = mysqli_query($con, $query);
	if($result) header("Location: ../clients.php");
	else echo $query;
	mysqli_close($con);
?>
