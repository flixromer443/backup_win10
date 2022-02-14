<?php

$path = "/var/www/html/EDI_22020/Clase_2805/COLON.csv";
if (!file_exists($path))
    exit("Archivo no Encontrado por favor verifique");
$file = fopen($path, "r");
//Circ;Matricula;TipoDoc;Sexo;Apellido;Nombre;Clase;Domicilio;NroCasa;Puerta

echo "<html><body><table border=1>";
//"categoria","centroide_lat","centroide_lon","fuente","id","iso_id","iso_nombre","nombre","nombre_completo"
echo "<tr><th>Nro Documento</th><th>Tipo Doc</th><th>Apellido</th><th>Nombre</th></tr>";
while ($fields = fgetcsv($file,";")) {
//	var_dump($fields);
//	echo "dato 1 del array";
//	var_dump($fields[0]);
//	exit;  
  echo "<tr><td>".$fields[1]."</td><td>".$fields[2]."</td><td>".
         $fields[4]."</td><td>".$fields[5]."</td></tr>";
}
echo "</table></body></html>";
fclose($file);

?>
