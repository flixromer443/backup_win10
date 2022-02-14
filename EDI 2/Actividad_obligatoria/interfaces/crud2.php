<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="../scripts/inner.js"></script>
<link rel="stylesheet" href="../estilos/estilo.css">

<title>Document</title>
</head>
<body onload="cargar();">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary" >
  <a class="navbar-brand" href="#">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Facturaci&oacute;n<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="crud1.php">Vehiculos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="../acciones/buscar.php" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Id" name="id" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>

  </div>
</nav>

</div>
<br><br>
    <table class="table table-dark bg-secondary" id="datos2" >
  <thead>
    <tr>
      <th scope="col" >Id</th>
      <th scope="col">N° de recibo</th>
      <th scope="col">Periodo</th>
      <th scope="col">Cuota de periodo</th>
      <th scope="col">Importe</th>
      <th scope="col">Direcci&oacute;n</th>
      <th scope="col">Localidad/Codigo post&aacute;l</th>
    </tr>
  </thead>
  <tbody >
    
    <?php
    include("../funciones/buscar_marca.php");
        $archivo=fopen("../archivos/facturacion.txt","r")or die("error");
        while(!feof($archivo)){
            $linea=fgets($archivo);
            $datos=explode("|",$linea);
            $id=$datos[0];
            if($id==1000){
            break;
              }
            $recibo=$datos[1];
            $periodo=$datos[2];
            $cuota=$datos[3];
            $precio=buscar_monto($id);
            $direccion=buscar_calle($id);
            $altura=buscar_altura($id);
            $numero=$altura[0];
            $localidad=$altura[1];
            $codigo=$altura[2];
            echo "<tr>
                    <th scope='row'>$id</th>
                    <td>$recibo</td>
                    <td>$periodo</td>
                    <td>$cuota</td>
                    <td>$$precio</td>
                    <td>$direccion<br>$numero</td>
                    <td>$localidad<br>$codigo</td>
                    <td>
                    <a href='editar.php?id=$id'>
                    <button class='btn btn-primary' onclick='cambiar();' style='margin-right:10px;'>
                    <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-brush' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                        <path fill-rule='evenodd' d='M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.117 8.117 0 0 1-3.078.132 3.658 3.658 0 0 1-.563-.135 1.382 1.382 0 0 1-.465-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.393-.197.625-.453.867-.826.094-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.2-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.175-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.247-.013-.574.05-.88.479a11.01 11.01 0 0 0-.5.777l-.104.177c-.107.181-.213.362-.32.528-.206.317-.438.61-.76.861a7.127 7.127 0 0 0 2.657-.12c.559-.139.843-.569.993-1.06a3.121 3.121 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.591 1.927-5.566 4.66-7.302 6.792-.442.543-.796 1.243-1.042 1.826a11.507 11.507 0 0 0-.276.721l.575.575zm-4.973 3.04l.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043l.002.001h-.002z'/>
                    </svg> 
                    </button>
                    </a>
                    <button class='btn btn-danger' onclick='cambiar();'>
                    <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                        <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                        </svg>
                    </button>
                    </td>
             </tr>";
        }
        fclose($archivo);
    ?>
    
        
  </tbody>
</table>
<div class="container">
<div class="btn-group" role="group" aria-label="Button group with nested dropdown" style="margin-left:400px ;text-align:center;">
  <button type="button" class="btn btn-primary">1</button>
  <button type="button" class="btn btn-light">2</button>
  <button type="button" class="btn btn-light">3</button>
</div>
</div>
<br>
   <footer class="foot">
            <p>Developed by felix</p>
    </footer>

</body>
</html>