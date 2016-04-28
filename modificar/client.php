<?php 
	require_once("../connection.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Modificació de clients</title>
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
						<h2>Editar client</h2>
					</header>
					
					<!-- AFEGIR FORM -->
					
					<?php 
						$codiClient = $_GET['id'];
						$query = "select * from clients where codi = $codiClient;";
						$result = mysqli_query($con, $query);
						extract(mysqli_fetch_array($result));
						echo"
							<form method='post' action='../update/upClient.php?id=$codiClient'>
								<div class='row uniform'>
								<div class='6u$ 12u$(xsmall)'>
									<input type='text' name='nom' value=$nom />
								</div>
								<div class='6u$ 12u$(xsmall)'>
									<input type='text' name='cognoms' value=$cognoms />
								</div>
								<div class='6u$ 12u$(xsmall)'>
									<input type='text' name='dni' value=$dni />
								</div>
								<div class='6u$ 12u$(xsmall)'>
									<input type='text' name='poblacio' value=$poblacio />
								</div>
								<div class='6u$ 12u$(xsmall)'>
									<input type='text' name='codi_postal' value=$codi_postal />
								</div>
								<div class='6u$ 12u$(xsmall)'>
									<input type='text' name='telefon' value=$telefon />
								</div>
						";
					
					?>
							
								<div class="12u$">
									<ul class="actions">
										<li><input type="submit" value="Editar" class="button special"/></li>
											</ul>
									</div>
								</div>
							</form>
							<input type="submit" value="Tornar" class="alt" onclick ="location='../clients.php'"/>
							
				</div>
			</section>

	</body>
</html>