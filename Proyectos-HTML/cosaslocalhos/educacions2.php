<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="javascript/validar2.js"></script>
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
		<form class="caja" action="" method="POST">
			<h1>Informaci&oacute;n academica</h1>
			<br>
			<p style="color: white; text-align: center;">Titulo obtenido</p>
			<select name="sel1">
				<option>Licenciatura</option>
				<option>Tecnicatura</option>
				<option>Magister</option>
			</select>
			<br>
			<p style="color: white; text-align: center;">Area</p>
		
			<select name="sel2">
				<option>Informatica</option>
				<option>Literatura</option>
				<option>Cs.sociales</option>
				<option>Cs.naturales</option>
				<option>Educaci&oacute;n fisica</option>
				<option>Matematica</option>

			</select>
			<br>
			<p style="color: white; text-align: center;">Puntaje anual docente</p>
			<input type="number" name="puntaje" id="puntaje">
			<p style="color: white; text-align: center; font-size: 12px;">Si no conocesu puntaje<br>ingrese <a href="http://servicios.abc.gov.ar/servaddo/puntaje.ingreso.docencia/">Aqui</a></p>
			<br>
			<input type="submit" name="submit" onclick="validar();"> 
			<?php
				include("php/validar2.php"); 
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

					