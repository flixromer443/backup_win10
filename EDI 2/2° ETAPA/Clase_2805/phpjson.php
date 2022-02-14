<?php
// index.php
// ubicacion JSON online y local
define('JSON', 'https://infra.datos.gob.ar/catalog/modernizacion/dataset/7/distribution/7.2/download/provincias.json');
define('JSONlocal', 'provincias.json'); 
// leer JSON validamos si el fichero online e accesible y si no abrimos el json local
if($data = @file_get_contents(JSON)){
 $items = json_decode($data, true);
}
else{
 $data = file_get_contents(JSONlocal);
 $items = json_decode($data, true);
}
//lista de items a recorrer
$listaItems = $items["provincias"];
?>
 
<html>
<h1>Provincias</h1>
 
<?php
 //bucle para recorrer los elementos del array
 for ($i = 0; $i<count($listaItems); $i++){
?>
 <table border="1">
  <tr>
   <td>Nombre Completo: </td>
   <td>
    <?php echo $listaItems[$i]["nombre_completo"]; ?> 
   </td>
  </tr>
  <tr>
   <td>Nombre: </td>
   <td>
    <?php echo $listaItems[$i]["nombre"]; ?>
   </td>
  </tr>
  <tr>
   <td>Categoria: </td>
   <td>
    <?php echo $listaItems[$i]["categoria"]; ?>
   </td>
  </tr>
  <tr>
   <td>ISO Nombre: </td>
   <td>
    <?php echo $listaItems[$i]["iso_nombre"]; ?>
   </td>
  </tr>
  <tr>
   <td>Latitud: </td>
   <td>
    <?php echo $listaItems[$i]["centroide"]["lat"]; ?>
   </td>
  </tr>
  <tr>
   <td>Longitud: </td>
   <td>
    <?php echo $listaItems[$i]["centroide"]["lon"]; ?>
   </td>
  </tr>
  
 </table><br />
<?php 
 } //cerramos bucle
?>
 
</html>