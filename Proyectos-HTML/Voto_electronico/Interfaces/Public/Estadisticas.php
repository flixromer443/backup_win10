<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../../Funciones/Porcentajes.php");
    $lista1=lista_A();
    $lista2=lista_B();
    $lista3=lista_C();
    $lista4=lista_D();
    ?>
    <meta charset="UTF-8">
    <script src="../../Scripts/Contador.js"></script>
    <script src="https://kit.fontawesome.com/d6fcbe9c4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../Estilos/Estilo.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cabecera">
    <button><a href="../../Index.php"><i class="fas fa-arrow-left"></i> </a></button>
        <h1>Votemos</h1>
        <nav class="navegacion">
            <ul>
                <li><a href="#"id="active" >Estadisticas</a> </li>
                <li><a  href="Instructivo.php" >Como voto??</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
       <table class="tabla2" >
           <tr>
               <td id="color1"><p><?php echo $lista1?>%</p></td>
               <td id="vacio"></td>
               <td id="color2"><p><?php echo $lista2?>%</p></td>
           </tr>
       </table>
       <br>
       <table class="tabla2">
        <tr>
            <td id="color3"><p><?php echo $lista3;?>%</p></td>
            <td id="vacio"></td>
            <td id="color4"><p><?php echo $lista4;?>%</p></td>
        </tr>
       </table>
    </div>
    <div class="container">
        <footer class="pie">
            <h2>Developed by Felix-2020®</h2>
        </footer>
    </div>
   
</body>
</html>