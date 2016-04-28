<?php 
	require_once("connection.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Gestió de ventes</title>
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
						<h2>Ventes</h2>
					</header>
					<div class="features">
						<div class="feature">
							<i class="fa fa-diamond"></i>
							<a href="afegir/alta.php"><h3>Afegir</h3></a>
							<p>Afegeix noves ventes al sistema</p>
						</div>
						<div class="feature">
							<i class="fa fa-copy"></i>
							<a href="visualitzar/altesIndex.php"><h3>Modificar</h3></a>
							<p>Edita l'estat dels <strong>pagaments</strong> al sistema</p>
						</div>
						<div class="feature">
							<i class="fa fa-paper-plane-o"></i>
							<a href="visualitzar/altesIndex.php"><h3>Veure</h3></a>
							<p>Observa les ventes que tens guardades al sistema</p>
						</div>
					</div> 
					<input type="submit" value="Tornar" onclick ="location='index.php'"/>
				</div>
			</section>

	</body>
</html>