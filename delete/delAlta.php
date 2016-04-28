<?php
	require_once("../connection.php");

	$codi = $_GET['id'];
	
	$query = "delete from factures where codi = $codi";
	$result = mysqli_query($con, $query);
	if($result) header("Location: ../visualitzar/altesIndex.php");	
	else echo $query;
	mysqli_close($con);
?>
