<?php 
	require_once("../connection.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Afegir client</title>
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
						<h2>Afegir nou client</h2>
					</header>
					
					<!-- AFEGIR FORM -->
							<form method="post" action="../insert/inClient.php">
								<div class="row uniform">
								
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="nom" placeholder="Nom" />
									</div>
									
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="cognoms" placeholder="Cognoms" />
									</div>
									
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="dni" placeholder="DNI" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="poblacio" placeholder="Població" />
									</div>
									
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="codi_postal" placeholder="Codi postal" />
									</div>
									
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="telefon" placeholder="Telèfon" />
									</div>
							
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Afegir" class="button special"/></li>
											
										</ul>
									</div>
								</div>
							</form>
							<input type="submit" value="Sortir" class="alt" onclick ="location='../altes.php'"/>
							
				</div>
			</section>

	</body>
</html>