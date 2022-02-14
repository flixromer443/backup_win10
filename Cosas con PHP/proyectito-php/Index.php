<?php
include("Conec.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="formu">
        <form action="Enviar.php" method="POST">
            <h1>Formulario</h1>
            <br>
            <input type="text" placeholder="Nombre" name="Nombre">
            <br>
            <input type="text" placeholder="Apellido" name="Apellido" >
            <br>
            <input type="submit" name="enviar">
            <br>
        </form>
    </div>
    
</body>
</html>