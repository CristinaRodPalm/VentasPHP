<?php 
	require_once("../connection.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Afegir venta</title>
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
						<h2>Afegir nova venta</h2>
					</header>
					
					<!-- AFEGIR FORM -->
							<form method="post" action="../insert/inAlta.php">
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="import" id="import" value="" placeholder="Import (€)" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="pagat" id="pagat" value="" placeholder="Pagat (1 si, 0 no)" />
									</div>
									
									<div class="12u$">
										<div class="select-wrapper">
											<select name="client" id="client">
												<?php 
													//SELECT DE CLIENTS
													$result = mysqli_query($con, "select * from clients;");
													while($fila = mysqli_fetch_array($result)){
														extract($fila);
														echo "<option value='$codi'>$cognoms, $nom</option>";
													}
												?>
											</select>
										</div>
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="fabrica" id="fabrica">
												<?php 
													//SELECT DE FÀBRIQUES
													$result = mysqli_query($con, "select * from fabriques;");
													while($fila = mysqli_fetch_array($result)){
														extract($fila);
														echo "<option value='$codi'>$nom</option>";
													}
												?>												
											</select>
										</div>
									</div>
									
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Afegir" class="button special"/></li>
											
										</ul>
									</div>
								</div>
							</form>
							<input type="submit" value="Tornar" onclick ="location='../altes.php'"/>
							
				</div>
			</section>

	</body>
</html>