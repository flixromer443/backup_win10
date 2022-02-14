<?php
include("Conec.php");
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];


$archivo=fopen("algo.csv","a+");
while(!feof($archivo)){
    $linea=fgets($archivo);
    $datos=explode('|',$linea);
    $datos[0]=$Nombre;
    $datos[1]=$Apellido;
    fputs($archivo,$Nombre.'|'.$Apellido.'|'."\n");
break;
}
fclose($archivo);
if(isset($_POST['enviar'])){

        if(empty("nombre")){
            echo "error";
            return false;
        }

        $consulta="INSERT INTO ingresos(Nombre,Apellido) VALUES ('$Nombre','$Apellido')";
        $algo=mysqli_query($con,$consulta);
        if(!$algo){
            echo "erro";
        }
}
        
?>