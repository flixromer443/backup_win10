<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        if(!isset($_SESSION['usuario'])){
            header("Location:../interfaces/login.php");
        }
    ?>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="../estilos/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>bienvenid@ <?php echo $_SESSION['usuario']['apellido']; ?></h1>
    <h1> <?php echo $_SESSION['usuario']['nombre']; ?></h1>
<div class="container">
        <form action="../acciones/cerrar.php" method="post">
            <h1>cerrar sesion</h1>
          
            <br>
            <input type="submit" value="cerrar sesion" name="cerrar">
        </form>
    </div>

</body>
</html>