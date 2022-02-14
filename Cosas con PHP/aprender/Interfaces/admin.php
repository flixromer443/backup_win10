<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        if(!isset($_SESSION['admin'])){
            header("Location:../interfaces/login.php");
        }
    ?>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="../estilos/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1><?php echo $_SESSION['admin']['nombre'];?> </h1>

  <div class="container">
        <form action="../acciones/cerrar.php" method="post">
            <h1>cerrar sesion</h1>
          
            <br>
            <input type="submit" value="cerrar sesion" name="cerrar">
        </form>
    </div>

</body>
</html>