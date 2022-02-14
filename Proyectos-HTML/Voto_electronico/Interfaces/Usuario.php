<?php
//por el momento se queda en index
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location:../Index.php");
}
elseif($_SESSION['usuario']['estado']==1){
    header("Location:../Alertas/Alerta2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="Scripts/Redirecciones.js"></script>
    <script src="https://kit.fontawesome.com/d6fcbe9c4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Estilos/Estilo.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cabecera">
        <h1>Votemos</h1>
    </div>
    <div class="container">
    <h1> Usted se ha acreditado como<?php echo $_SESSION['usuario']['nombre']; ?></h1>
    <h1><?php echo $_SESSION['usuario']['dni']; ?></h1>
    <h1><?php echo $_SESSION['usuario']['email']; ?></h1>
    <h1><?php echo $_SESSION['usuario']['estado']; ?></h1>
    <br><br>
        <form action="../Acciones/Votar.php" method="POST">
       <table class="tabla3">
           <tr>
               <td id="backgound1"><input type="submit" name="Lista_A" value="Lista A"></td>
               <td id="vacio"></td>
               <td id="backgound2"><input type="submit" name="Lista_B" value="Lista B"></td>
           </tr>
       </table>
       <br>
       <table class="tabla3">
        <tr>
            <td id="backgound3"><input type="submit" name="Lista_C" value="Lista C"></td>
            <td id="vacio"></td>
            <td id="backgound4"><input type="submit" name="Lista_D" value="Lista D"></td>
        </tr>
       </table>
       </form>
    </div>
    <div class="container">
        <footer class="pie">
            <h2>Developed by Felix-2020®</h2>
        </footer>
    </div>
   
</body>
</html>