<?php
$archixls="fabian.xls";
$hoy = date("Ymd");
$min = date("His"); 
//$archixls=$hoy.$min.".xls";
//var_dump($hoy);
//var_dump($min);
//var_dump($archivo);
//exit;
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=".$archixls);

// Logica 
$archivo=fopen('PILA.csv','a+');
?>
<html>
<body>

<! SEXO|TIPO|DOCUMENTO|CLASE|APELLIDO|NOMBRE|DOMICILIO|ID_DISTRITO|DISTRITO|ID_CIRCUITO|CIRCUITO|MESA|ORDEN|ESCUELA|DOMICILIO_ESCUELA|LOCALIDAD_ESCUELA-->
<table>
	<tr>
		<td><b>Sexo</b></td>
		<td><b>Documento</b></td>
		<td><b>Apellido</b></td>
		<td><b>Nombre</b></td>
		<td><b>Mesa</b></td>
		<td><b>Escuela</b></td>
	</tr>
</table>
<table>
<?php
while(!feof($archivo))
{
	    $linea=fgets($archivo);
		$datos=explode(";",$linea);
		printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>&nbsp;%s</td><td>%s</td></tr>", $datos[0],$datos[2],$datos[4],$datos[5],$datos[11],$datos[13]);
}
fclose($archivo);	
?>
</table>
</body>
</html>