<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="javascript/validar1.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos/bgcolors.css">
	<link rel="stylesheet" type="text/css" href="estilos/estilo.css">
	<link rel="stylesheet" type="text/css" href="estilos/formularios.css">
	<title></title>
</head>
<body>
		<div id="headerr" >
		<ul class="navi">
			<li><h2 id="letras">Concursos docentes</h1></li>
			<li>
				<a href="index.php">Inicio</a>
			</li>
			
			
			
		</ul>
		
	</div>
	<div style="padding-top: 70%">
		<form class="caja" action="" method="POST" id="formulario">
			<h1>Datos personales</h1>
			<br>
			<input type="" name="nombre" placeholder="Nombre y apellido">
			<br>
			<input type="date" name="fecha" placeholder="Fecha de nacimiento">
			<br>
			<input type="number" name="dni" placeholder="Dni">
			<br>
			<input type="email" name="correo" placeholder="***@gmail.com">
			<br>
			<input type="phone" name="telefono" placeholder="Tel&eacute;fono">
			<br>
			
			<?php 
				include("php/validars.php");
			 ?>
		</form>
	</div>

	
	<div class="pie">
		<table style="margin-left: 10%;">
			<tr>
				<td  id="tdcont"><h3>Concursos docentes</h3><br><p>Direcci&oacute;n : Zapiola 1420 (Libertad/Merlo)<br>Para mas informacion <br>Contactenos <br><img src="imagenes/whatsapp.png" id="whatsapp"> 11-5930-5824</p></td>

				<td><a href="https://www.facebook.com" ><img src="imagenes/botones/face.png" id="facebook"class="tdt" ></a></td>
				<td><a href="https://twitter.com/login?lang=es" ><img src="imagenes/botones/twitter.png" id="twitter"></a></td>
			</tr>
		</table>
		<br><br>
		<div class="foot">
			<footer>
					<h2>Designed By Felix</h2>
								
			</footer>
						
		</div>
		
	</div>
</body>
</html>

					