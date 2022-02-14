<?php

$path = "provincias.csv";
if (!file_exists($path))
    exit("Archivo no Encontrado por favor verifique");
$file = fopen($path, "r");
echo "<html><body><table border=1>";
//"categoria","centroide_lat","centroide_lon","fuente","id","iso_id","iso_nombre","nombre","nombre_completo"
echo "<tr><th>categoria</th><th>centroide_lat</th><th>centroide_lon</th><th>fuente</th><th>fuente</th><th>id</th><th>iso_id</th><th>iso_nombre</th><th>nombre</th><th>nombre completo</th></tr>";
while ($fields = fgetcsv($file,";")) {
    echo "<tr><td>".$fields[0]."</td><td>".$fields[1]."</td><td>".
         $fields[2]."</td><td>".$fields[3]."</td></tr>";
}
echo "</table></body></html>";
fclose($file);

?>
