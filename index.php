<!DOCTYPE html>
<html>
<head>
	<title>Congreso GTO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="shorcut icon" href="Image/Logo.jpg">
</head>
<body>
	
	<header class="col-md-12  text-center">
		<img src="Image/logo_congreso.png">
		<hr>
	</header>


	<div  class="col-md-10 col-md-offset-1 ">
		<div class="text-center ">
				<div  class="row">
					<div class="col-md-10 sin-m-p ">					
		
						<dir class=" text-center sin-m-p">
						<a class="btn btn-success margin-4" href="#">Inicio</a>
						<a class="btn btn-success margin-4" href="#">Pleno</a>
						<a class="btn btn-success margin-4" href="#">Diputación Permanente</a>
						<a class="btn btn-success margin-4" href="#">Mesa Directiva</a>
						<a class="btn btn-success margin-4" href="#">Junta de Gobierno</a>
						<a class="btn btn-success margin-4" href="#">Diputadas y Diputados</a>
						<a class="btn btn-success margin-4" href="#">Comisiones Legislativas</a>
						<a class="btn btn-success margin-4" href="#">Auditoría Superior del Estado</a>
						<a class="btn btn-success margin-4" href="#">Diario de los debates</a>
						<a class="btn btn-success margin-4" href="#">Pleno</a>
						<a class="btn btn-success margin-4" href="#">Unidad de Transparencia</a>
						<a class="btn btn-success margin-4" href="#">Unidad de Finanzas</a>
						<a class="btn btn-success margin-4" href="#">Instituto de la Investigaciones Legislativas</a>
						<a class="btn btn-success margin-4" href="#">Armonización Contable</a>
						<a class="btn btn-success margin-4" href="#">Sala de Prensa</a>
				    </div>
				</dir> 

				<div class="col-md-2 ">
					<form class="form-group">
						<p>Correo electrónico<input class="from-control" type="text" name=""></p>
						<p>Contraseña<input class="from-control" type="password" name=""></input></p>
	 
						<input class="btn btn-primary barra-grande" type="submit" value="Inicia Sesión" name="">
					</form>
					<button onclick="displayBlock()" class="sin-fondo" style="text-decoration: underline;">¿Eres nuevo?</button>
				</div>		
		</div>
		<script type="text/javascript">
			function displayBlock(){			
			
				document.getElementById("REGISTRAR").classList.remove("escondido");
			}
			function displayNone(){
				document.getElementById("REGISTRAR").classList.add("escondido");
			}
		</script>		
		<div class="col-md-12">
			<button class="btn btn-default barra-mediana">Busqueda</button>
			<button class="btn btn-default barra-mediana">Busqueda por tema</button>
			<hr>
		</div>
		<div >
			<div class="col-md-4">
				<h1 style="font-family: Open Sans; font-size: 60px;">Iniciativas</h1>
			</div>
			<div class="col-md-8">				
					<h4 style="margin: 0px" align="left">¿Qué son la iniciativas?</h4><br/>
				<p style="text-align: justify;">
					Una iniciativa de ley o decreto es la propuesta por medio de la cual se hace llegar al órgano órganos depositarios del Poder Legislativo del Estado un proyecto de ley, que puede ser nueva en su totalidad o ya existente pero que, por circunstancias sobrevivientes necesita ser reformada o modificada por adición, corrección o supresión de algunas de sus normas o un proyecto de decreto.   (Prontuario del Reglamento del Senado de la República  y Glosario de Términos Legislativos. Arturo Garita, p. 141  LXI Legislatura. Senado de la República).
				</p>
			</div>
		</div>
		<br/>
		<div id="REGISTRAR" class="escondido volatil text-center imagen-fondo-b redondo-14 blanco animated bounceIn">
			<p class="text-4">Registrate</p>
			<form class="form-group">
				<p align="center">Nombre:<br><input class="barra-grande negro form-control" type="text" name="nombre"></p>
				<p align="center">Apellido:<br><input class="barra-grande negro form-control" type="text" name="apellido"></p>
				<p align="center">Edad: <br><input class="barra-grande negro form-control" type="number" name="edad" min="0" max="99"></p>
				<p align="center">E-Mail<br><input class="barra-grande negro form-control" type="email" name="correo"></p>
				<p align="center">Contraseña<br><input class="barra-grande negro form-control" type="password" name="pass">
				<p align="center">Repite tu Contraseña<br><input class="barra-grande negro form-control" type="password" name="word"></p>
				<input type="submit" value="Registrar" class="btn barra-mediana" style="color:black">
				<button onclick="displayNone()" class="btn barra-mediana" style="color:black">Cancelar</button>
			</form>		
		</div>
		<!-- De aquí para abajo es lo que resta de la página-->
		<div id="contenedor" class="container col-md-12" align="left"> 
			<nav id="barra-navegacion-inicial" class="navbar navbar-default" role="navigation">
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active" id="menu1">
							<a href="">Iniciativas</a>
						</li>
						<li id="menu2">
							<a href="">Dictámenes</a>
						</li>
						<li id="menu3">
							<a href="">Decretos</a>
						</li>
						<li id="menu4">
							<a href="">Votaciones Generales</a>
						</li>
						<li id="menu5">
							<a href="">Ejercicios Fiscales</a>
						</li>
						<li id="menu6">
							<a href="">Puntos de Acuerdo</a>
						</li>
						<li id="menu7">
							<a href="">Proposiciones</a>
						</li>
					</ul>
				</div>
			</nav>
			<input type="text" name="buscar" id="buscar" class="form-control" placeholder="Buscar Iniciativa"/>
			<br/>
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="tabla1" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Clave</th>
							<th>Descripción</th>
							<th>Fecha</th>
							<th>Status</th>
							<th>Dictamen</th>
						</tr>
					</thead>
					<tbody>
						<!--Conectar a MySQL-->
						<?php
							$conexion = mysqli_connect('localhost', 'root', '', 'congreso', '3306');
							$query = 'select * from iniciativas';
							$resultado = mysqli_query($conexion, $query);

							while($renglon = mysqli_fetch_row($resultado)) {
								echo "<tr>";
								echo "<td>$renglon[0]</td>";
								echo "<td><a href='#' onclick='validar($renglon[0]);'>$renglon[1]</a></td>";
								echo "<td>$renglon[2]</td>";
								echo "<td>$renglon[3]</td>";
								echo "<td>$renglon[4]</td>";
								echo "</tr>";
							}

							mysqli_close($conexion);
						?>
						<!--Desconectar-->
					</tbody>
				</table>
			</div>
			<input type="hidden" name="valor" id="valor" value=""/>
			<script type="text/javascript">
				function validar(id) {
					console.log(id);
					var identificador = {"valor" : id};
					$.ajax({
						data: identificador,
						url: 'iniciativas.php',
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
	</div>	
</body>
</html>