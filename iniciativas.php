<!DOCTYPE html>
<html>
	<head>
		<title>Congreso GTO | Iniciativas</title>
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
						<li class="active" id="menu1">
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
						<?php
							$id = $_POST['valor'];
						?>
						<input type="hidden" name="idd" id="idd" value="<?php echo($id); ?>"/>
						<li id="menu7">
							<a href="#" onclick="validar2(document.getElementById('idd').value);">Votar</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					<h5>Fondo:</h5>
				</div>
				<div class="col-md-2">
					<h5>Sub-fondo:</h5>
				</div>
				<div class="col-md-2">
					<h5>Sección:</h5>
				</div>
				<div class="col-md-2">
					<h5>Lugar:</h5>
				</div>
				<div class="col-md-2">
					<h5>Comisión:</h5>
				</div>
			</div>

			<!--Conexión a MySQL-->
			<?php
				$conexion = mysqli_connect('localhost', 'mysql', '');
				if (!$conexion) {
					die('No se pudo conectar a la BD, error: ' + mysql_error());
				}
				mysqli_close($conexion);
			?>
			<!--Termina conexión MySQL-->
			
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					<h5>Fondo:</h5>
				</div>
				<div class="col-md-2">
					<h5>Sub-fondo:</h5>
				</div>
				<div class="col-md-2">
					<h5>Sección:</h5>
				</div>
				<div class="col-md-2">
					<h5>Lugar:</h5>
				</div>
				<div class="col-md-2">
					<h5>Comisión:</h5>
				</div>
			</div>
			<script type="text/javascript">
				function validar2(id) {
					console.log(id);
					var identificador = {"valor2" : id};
					$.ajax({
						data: identificador,
						url: 'votar.php',
						type: 'post',
						beforeSend: function() {
							$("#contenedor").html("Procesando, espere por favor...");
						},
						success: function(response) {
							$("#contenedor").html(response);	
						}
					});
				}
			</script>
		</div>
	</body>
</html>
