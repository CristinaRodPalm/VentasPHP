<?php
	require_once("../connection.php");

	$import = $_POST['import'];
	$pagat = $_POST['pagat'];
	$client = $_POST['client'];
	$fabrica = $_POST['fabrica'];
	
	$query1 = "select comissio from fabriques where codi = $fabrica";
	$result = mysqli_query($con, $query1);
	
	while($fila = mysqli_fetch_array($result)){
		extract($fila);
	}
	
	$benefici = $import * ($comissio / 100);

	$query = "insert into factures(benefici, pagat, id_client, id_fabrica, import) values('$benefici', $pagat, '$client', '$fabrica', '$import')";
	if(mysqli_query($con, $query)) header("Location: ../visualitzar/altesIndex.php");	
	
	mysqli_close($con);
?>
