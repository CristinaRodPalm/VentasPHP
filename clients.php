<?php 
	require_once("connection.php"); 
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Gestió de clients</title>
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
						<h2>Clients</h2>
					</header>
					
					<!-- Visualització dels clients -->
					<div class="table-wrapper">
						<table class="alt">
							<thead>
								<tr>
									<th>Nom</th>
									<th>Cognoms</th>
									<th>DNI</th>
									<th>Població</th>
									<th>Codi postal</th>
									<th>Telèfon</th>
								</tr>
							</thead>
							<tbody>
								<?php 						
									$query = "select * from clients;";
									$resultado = mysqli_query($con, $query);
									
									if(mysqli_num_rows($resultado) == 0) {
										echo "No s'han trobat clients";
									} else {
										while($fila = mysqli_fetch_array($resultado)){
											extract($fila);
											echo "<tr>
												<td>$nom</td>
												<td>$cognoms</td>
												<td>$dni</td>
												<td>$poblacio</td>
												<td>$codi_postal</td>
												<td>$telefon</td>
											<td><a href='modificar/client.php?id=$codi'>Modificar</a></td>
											<td><a href='delete/delClient.php?id=$codi'>Eliminar</a></td>
											</tr>";
										}
									}
									mysqli_close($con);
									
								?>
							</tbody>
						</table>
					</div>
					
					<input type="submit" value="Tornar" onclick ="location='index.php'"/>
					<input type="submit" value="Afegir client" onclick ="location='afegir/client.php'" class="special but"/>

				</div>
			</section>
	</body>
</html>