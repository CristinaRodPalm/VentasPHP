<?php
	require_once("../connection.php");

	$id_fabrica = $_GET['id'];
	$nom = $_POST['nom'];
	$propietari = $_POST['propietari'];
	$dni = $_POST['dni'];
	$poblacio = $_POST['poblacio'];
	$codi_postal = $_POST['codi_postal'];
	$telefon = $_POST['telefon'];
	$comissio = $_POST['comissio'];

	if($nom == "" || $propietari == "" || $dni == "" || $poblacio == "" || $codi_postal == "" || $telefon == "" || $comissio == ""){
		unset ($nom);
		unset ($apellidos);
		unset ($dni);
		unset ($poblacio);
		unset ($codi_postal);
		unset ($telefon);
		unset ($comissio);
		header("Location: ../modificar/fabrica.php?id=$id_fabrica");
	}else{
		$query = "update fabriques set nom='$nom', propietari='$propietari', dni='$dni', poblacio='$poblacio', codi_postal='$codi_postal', telefon='$telefon', comissio='$comissio' where codi = $id_fabrica;";
		$result = mysqli_query($con, $query);

		if($result) header("Location: ../fabriques.php");
		else header("Location: ../modificar/fabrica.php?id=$id_fabrica");

	}
mysqli_close($con);
?>
