<?php
	require_once("../connection.php");

	$codi_factura = $_GET['id'];
	$pagat = $_POST['pagat'];

	if($pagat == ""){
		unset ($pagat);
	}else{
		$query = "update factures set pagat=$pagat where codi = $codi_factura;";
		mysqli_query($con, $query);
	}

	header("Location: ../visualitzar/altesIndex.php");
mysqli_close($con);
?>
