<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Actividad obligatoria</h1>
<br>

<?php
    if(!file_exists("archivos/facturacion.txt") &&!file_exists("archivos/marcas.txt") && !file_exists("archivos/direccion(calle).txt")&& !file_exists("archivos/direccion(altura,codigo_postal).txt")  && !file_exists("archivos/codigos_de_barra.txt")){
        echo"<form action='acciones/generar_archivos.php' method='post'>
                 <input type='submit' name='Generar' value='Generar datos'>
            </form>";
    }
?> 
 


<?php
    if(file_exists("archivos/facturacion.txt") &&file_exists("archivos/marcas.txt") && file_exists("archivos/direccion(calle).txt")&& file_exists("archivos/direccion(altura,codigo_postal).txt")  && file_exists("archivos/codigos_de_barra.txt")){
        echo "<a href='interfaces/crud1.php'>Panel de control</a>";
    }
?>                   
</body>
</html>