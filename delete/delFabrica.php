<?php
	require_once("../connection.php");

	$codi = $_GET['id'];
	
	$result = mysqli_query($con, "delete from fabriques where codi = $codi");

	if($result){
		$result1 = mysqli_query($con, "delete from factures where id_fabrica = $codi");
		if($result1) header("Location: ../fabriques.php");
		else echo "fallo result 1";
	}else echo "fallo result";
	
	mysqli_close($con);
?>
