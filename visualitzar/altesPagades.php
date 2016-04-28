<?php 
	require_once("../connection.php"); 
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Ventes pagades</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body>
	
		<!-- Scripts -->
			<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

		<!-- Banner -->
			<section style="background-color: #00CDCF;">
				<input type="submit" value="Sortir" onclick ="location='../conexion/logout.php'"/>
			</section>		
			<section id="banner">
				<h2>Empresa feliç</h2>
				<p>Gestiona els teus moviments desde la nostra web, tant fàbriques, clients i ventes</p>
			</section>

		<!-- One -->
			<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2>Ventes pagades</h2>
					</header>
					
					<!-- Visualització de les altes -->
					<div class="table-wrapper">
						<table class="alt">
							<thead>
								<tr>
									<th>Import</th>
									<th>Benefici</th>
									<th>Pagat</th>
									<th>Client</th>
									<th>Fàbrica</th>
								</tr>
							</thead>
							<tbody>
								<?php 			
									$beneficiTotal = 0;
									$query = "select *, f.codi as codiFactura, c.nom as nomClient, c.cognoms as cognomsClient, g.nom as nomFabrica from factures f, clients c, fabriques g where f.id_client=c.codi and f.id_fabrica = g.codi and f.pagat = 1;";
									$resultado = mysqli_query($con, $query);
									
									if(mysqli_num_rows($resultado) == 0) {
										echo "No s'han trobat factures";
									} else {
										while($fila=mysqli_fetch_array($resultado)){
											extract($fila);
											echo "<tr style='background-color:#80ff80'>
													<td><strong>$import €</strong</td> 
													<td><strong>$benefici €</strong</td> 
													<td><strong>Si</strong></td> 
													<td><strong>$cognomsClient, $nomClient</strong></td> 
													<td><strong>$nomFabrica</strong></td> 
													<td><strong><a href='../modificar/alta.php?id=$codi'>Modificar</a></strong></td> 
													<td><strong><a href='../delete/delAlta.php?id=$codi'>Eliminar</a></strong></td> 
												</tr>";
											$beneficiTotal += $import;
										}
									}
									mysqli_close($con);
								?>
							</tbody>
						</table>
						<?php echo "Benefici total: $beneficiTotal €<br/><br/>"; ?>
					</div>
					
					<input type="submit" value="Tornar" onclick ="location='../altes.php'"/>
					<input type="submit" value="Veure factures" onclick ="location='altesIndex.php'" class="special button"/>
					<input type="submit" value="Veure factures sense pagar" onclick ="location='altesNoPagades.php'" class="special button"/>

				</div>
			</section>
	</body>
</html>