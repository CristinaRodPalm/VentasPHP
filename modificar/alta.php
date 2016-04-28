<?php 
	require_once("../connection.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Modificació de ventes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body>
	
		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

		<!-- Banner -->
			<section style="background-color: #00CDCF;">
				<input type="submit" value="Sortir" onclick ="location='conexion/logout.php'"/>
			</section>		
			<section id="banner">
				<h2>Empresa feliç</h2>
				<p>Gestiona els teus moviments desde la nostra web, tant fàbriques, clients i ventes</p>
			</section>
				

		<!-- One -->
			<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2>Editar venta</h2>
					</header>
					
					<!-- AFEGIR FORM -->
					
					<?php 
						$codi_factura = $_GET['id'];
						$query = "select * from factures where codi = $codi_factura;";
						$result = mysqli_query($con, $query);
						extract(mysqli_fetch_array($result));
						echo"
							<form method='post' action='../update/upAlta.php?id=$codi_factura'>
								<div class='row uniform'>
								<div class='6u$ 12u$(xsmall)'>
									<input type='text' name='benefici' value='$benefici €' readonly/>
								</div>
								<div class='6u$ 12u$(xsmall)'>
									Pagat (1 si, 0 no): <input type='text' name='pagat' value='$pagat'/>
								</div>";
								$result = mysqli_query($con, "select * from clients where codi = $id_client;");
								while($client = mysqli_fetch_array($result)){
									extract($client);
									echo "<div class='6u$ 12u$(xsmall)'>
										<input type='text' name='client' value='$cognoms, $nom' readonly />
									</div>";
								}
								$result = mysqli_query($con, "select * from fabriques where codi = $id_fabrica;");
								while($fabrica = mysqli_fetch_array($result)){
									extract($fabrica);
									echo "<div class='6u$ 12u$(xsmall)'>
										<input type='text' name='fabrica' value='$nom' readonly />
									</div>";
								}
									
								
					
					?>
							
								<div class="12u$">
									<ul class="actions">
										<li><input type="submit" value="Editar" class="button special"/></li>
											</ul>
									</div>
								</div>
							</form>
							<input type="submit" value="Tornar" class="alt" onclick ="location='../altes.php'"/>
							
				</div>
			</section>

	</body>
</html>