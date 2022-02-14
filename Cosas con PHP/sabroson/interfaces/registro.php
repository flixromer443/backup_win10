<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="estilos/estilo.css">    
<script src="../scripts/validar.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo.css">
    <title>Document</title>
</head>
<body onload="iniciar();">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Sabros&oacute;n</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="../Index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cuenta
        </a>
        <?php
            if(isset($_SESSION['user'])){
               echo "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                    echo "<a class='dropdown-item' href='#'>Mis datos</a>"; 
                    echo "<a class='dropdown-item' href='#'>Cambiar contraseña</a>";
                    echo "<a class='dropdown-item' href='#'>Cerrar sesi&oacute;n</a>"; 
             echo"</div>"; 
            }
            if(!isset($_SESSION['user'])){
                echo "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                     echo "<a class='dropdown-item' href='login.php'>Iniciar sesi&oacute;n</a>"; 
                     echo "<a class='dropdown-item' href='#'>Crear una cuenta</a>";
              echo"</div>"; 
             }
        ?>
        
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Combos</a>
          <a class="dropdown-item" href="#">Pizzas</a>
          <a class="dropdown-item" href="#">Empanadas</a>
          <a class="dropdown-item" href="#">Hamburguesas</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="carrito.php">Carrito</a>
      </li>
  
    </ul>
  </div>
</nav><br><br>





<div class="container" >
    <div class="container_registro container" style="border-radius: 20px;border-color:aliceblue;">
             <form action="../acciones/registrar.php" method="POST">
                 <h1 style="color: white;">Registrate</h1>
                 <br>
                 <input type="text" placeholder="Nombre y apellido" id="nombre" name="nombre">
                 <br>
                 <input type="number" placeholder="Tel&eacute;fono" id="telefono" name="telefono">
                 <br>
                 <input type="text" placeholder="***@gmail.com" id="mail" name="mail">
                 <br>
                 <input type="password" placeholder="Contraseña" id="pass"name="pass">
                 <br>
                 <input type="password" placeholder="Confirmar contraseña" id="confirmar"name="confirmar">
                 <p id="error"></p>
                 <br>
                 <p id="mensajeformu">Datos de envio</p>
                 <input type="text" placeholder="direcci&oacute;n de envio" id="direccion" name="direccion">
                 <br>
                 <select name="barrio" id="">
                     <option value="Libertad">libertad</option>
                     <option value="Merlo">Merlo</option>
                     <option value="Padua">Padua</option>
                     <option value="Pontevedra">Pontevedra</option>
                 </select>
                 <br>
                 <br>
                 <input type="submit" value="Enviar" id="enviar">
                 <br>
                 <p id="mensajeformu">ATENCION: Luego de crear la cuenta NO podr&aacute; cambiar los <br>datos de envio</p>
             </form>
    </div>
    </div>
    
</body>
</html>