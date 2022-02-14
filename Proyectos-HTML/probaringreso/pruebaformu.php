<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="estilos/estilo.css">
    <link rel="stylesheet" type="text/css" href="estilos/formulariop.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: grey;">
    <div class="cont-load">
        <div class="loader"></div> 
        </div>     
    
   

    
    
   
    <script>
        $(window).on("load",function(){
            $(".cont-load").fadeOut(1000)
         
        });
       
    </script>
    <div>
    <div id="headerr" >
		<ul class="navi">
			<li><h2 id="letras">Concursos docentes</h1></li>
			<li>
				<a href="index.html">inicio</a>
				<ul>
					<li><a href="">Proximas fechas</a></li>
				</ul>
			</li>
			<li>
				<a href="">Men&uacute;</a>
				<ul>
					<li><a href="">Inscripci&oacute;n</a>
						<ul>
							<li><a href="educacionp1.html" >Educaci&oacute;n primaria</a></li>
						    <li><a href="educacions1.html">Educaci&oacute;n secundaria</a></li>
						</ul>
					</li>
				
				</ul>
			</li>

		</ul>
		
    </div>
    </div>
    <br>
<div>
    <div class="cajapiola">
		<form action="registrar.php" method="POST">
			<h1>Datos personales</h1>
			<br>
			<input type="text" name="nombre" placeholder="Nombre y apellido" id="nombre">
			<br>
			<input type="date" name="fecha" placeholder="Fecha de nacimiento" id="fecha">
			<br>
			<input type="number" name="dni" placeholder="Dni" id="dni">
			<br>
			<input type="email" name="correo" placeholder="***@gmail.com" id="correo">
			<br>
			<input type="phone" name="telefono" placeholder="Tel&eacute;fono" id="telefono">
			<br>
			<input type="submit"name="submit" onclick="validar();">
        </form>
   
       
    </div>
    </div>
    <br>
    <br>
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
    <style>
          .cont-load{
        background-color: black;
        width: 100%;
        height: 100vh;
        position: fixed;
        align-items: center;
        justify-content: center;
        display: flex;
    }
    
    .loader{
        width: 50px;
        height: 50px;
        color: blue;
        border-style: solid;
        border-radius: 50%;
        border-top: transparent;
        animation: loader 0.7s linear infinite;
    }
   

        @keyframes loader{
          25%{
              color: chartreuse;
          }
          50%{
              color: darkorchid;
          }
          75%{
              color: gold;
          }
         to{
             transform: rotate(360deg);

         }
            
        }
    </style>
</body>
</html>