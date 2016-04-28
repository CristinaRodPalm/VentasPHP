<!DOCTYPE HTML>
<html>
	<head>
		<title>Gestió de clients</title>
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
						<h2>Login</h2>
					</header>
					
					<!-- AFEGIR FORM -->
					<?php 
						session_start();
						if(isset($_SESSION['error'])){
							echo "<div style='color:red'>L'usuari no existeix!</div></br>";
						}
					?>
							<form method="post" action="datosLogin.php">
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="usuario" placeholder="Usuari" />
									</div>
									
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="password" placeholder="Contrasenya" />
									</div>
									
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Entrar" class="button special"/></li>
											
										</ul>
									</div>
								</div>
							</form>
							
				</div>
			</section>

	</body>
</html>