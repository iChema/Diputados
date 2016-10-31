<!DOCTYPE html>
<html>
	<head>
		<title>Congreso GTO | Voto</title>
		<link rel="shortcut icon" type="image/jpg" href="Image/Logo.jpg">
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div id="contenedor" class="container">
			<nav id="barra-navegacion" class="navbar navbar-default" role="navigation">
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li id="menu1">
							<a href="">Información General</a>
						</li>
						<li id="menu2">
							<a href="">Diputados</a>
						</li>
						<li id="menu3">
							<a href="">Grupo Parlamental</a>
						</li>
						<li id="menu4">
							<a href="">Comisiones</a>
						</li>
						<li id="menu5">
							<a href="">Dictamen</a>
						</li>
						<li id="menu6">
							<a href="">Decretos</a>
						</li>
						<li class="active" id="menu7">
							<a href="">Votar</a>
						</li>
					</ul>
				</div>
			</nav>
			<div>
				<?php
					$id = $_POST['valor2'];

					$conexion = mysqli_connect('localhost', 'root', '', 'congreso', '3306');
					$query = 'select * from iniciativas';
					$resultado = mysqli_query($conexion, $query);

					$renglon = mysqli_fetch_row($resultado);
					echo "<p>$renglon[1]</p>";
					

					mysqli_close($conexion);
				?>
			</div>
		</div>
	</body>
</html>
