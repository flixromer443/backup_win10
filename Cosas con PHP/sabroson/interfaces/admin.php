<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../estilos/estilo.css">    

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Sabros&oacute;n</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         cuenta
        </a>
        <?php
        //Mirar aca!!
        session_start();
            if(isset($_SESSION['admin'])){
              $nombre=$_SESSION['admin']['nombre'];
               echo "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                    echo "<a class='dropdown-item' href='#'>$nombre</a>"; 
                    echo "<a class='dropdown-item' href='#'>Cambiar contrase??a</a>";
                    echo"<form action='../acciones/cerrar.php' method='POST'>";
                         echo"<input type='submit' class='dropdown-item' value='Cerrar sesi&oacute;n'>"; 
                    echo"</form>"; 
             echo"</div>"; 
            }
            if(!isset($_SESSION['admin'])){
              header("Location:../index.php");
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
        <a class="nav-link" href="#">Carrito</a>
      </li>
    
    </ul>
  </div>
</nav><br><br>



<div class="container">
<h1>Pedidos</h1>
<?php
      $archivo=fopen("../archivos/pedidos.csv",'r');
      echo "<table class='table'>";
      echo "<tr>";
          echo "<td scope='col' style='color:white;'>productos</td>";
          echo "<td scope='col' style='color:white;'>precio</td>";
          echo "<td scope='col' style='color:white;'>dirreccion</td>";
          echo "<td scope='col' style='color:white;'>localidad</td>";
          echo "<td scope='col' style='color:white;'>estado</td>";
          echo "<td scope='col' style='color:white;'>hora de pedido</td>";
      echo "</tr>";
      echo "</table>";   
          while($campos=fgetcsv($archivo,999,"|")){
              echo "<table class='table bg-light'>";
              echo "<tr>";
              $btn=0;
              
             
                 foreach($campos as $campo){
                      if(strlen($campo)>0)
                      echo "<td scope='col' >$campo </td>";
                     // if($campo=="Libertad"){
                     //   $barrio=$campos[1];
                     //   echo "<td>";
                     //    echo "<form action='../acciones/entregado.php' method='POST'>";
                     //   echo "<input type='hidden' name='direccion' value='$barrio'>";
                     //   echo "<input type='submit' class='btn btn-secondary' value='Entregado'>";
                     //   echo "</form>";
                     //   echo "</td>";
//
                     // } 
                     //
                      }
              echo "</tr>";
              echo "</table>";
              if($campos[1]=="No entregado"){
              echo "<br><br>";   

              }
             
              }
        fclose($archivo);
      
        ?>

<br>
</div>
</body>
</html>
