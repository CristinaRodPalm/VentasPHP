<?php 
	require_once("connection.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Gestió empresarial</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
	
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

		
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
						<h2>Accions</h2>
					</header>
					<div class="features">
						<div class="feature">
							<i class="fa fa-diamond"></i>
							<a href="clients.php"><h3>Clients</h3></a>
							<p>Pots veure els teus clients</p>
						</div>
						<div class="feature">
							<i class="fa fa-copy"></i>
							<a href="altes.php"><h3>Ventes</h3></a>
							<p>Afegeix, modifica i mira les teves altes.</p>
						</div>
						<div class="feature">
							<i class="fa fa-paper-plane-o"></i>
							<a href="fabriques.php"><h3>Fàbriques</h3></a>
							<p>Pots veure les teves fàbriques</p>
						</div>
					</div>
				</div>
			</section>
	</body>
</html>