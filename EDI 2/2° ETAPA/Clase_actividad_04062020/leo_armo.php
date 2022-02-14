<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
$myfile = fopen("PILA.csv", "r") or die("No se puede abrir el archivo!");
while(!feof($myfile)) {
    $linea = fgets($myfile);
    $datos=explode("|", $linea);
    $escuela=$datos[13];
    $domescuela=$datos[14];
    $localescuela=$datos[15];
//   var_dump($datos[15]);
//   echo $datos[13]."|".$datos[14]."|".$datos[15];
//   exit();    

    $school = fopen("ESCUELAS.DAT", "r") or die("No se puede abrir el archivo!");
    $id_school=0;
    $found=0;
//    echo limpiarCaracteresEspeciales($datos[13]);
 

    if (filesize("ESCUELAS.DAT") == 0){
        $id_school=1;
//        $found=0;


/// comentario del codigo    
    }
//    if ( 0 == filesize( $school ) ) {
//        $id_school=1;
//        $found=0;
//    }
    else{

        while(!feof($school)) {
            $linea2 = fgets($school);
            $datos2=explode("|", $linea2);
            $id_school++;
//            echo limpiarCaracteresEspeciales($datos2[1]);
//            exit();
//            echo "pasa x 2 whiel";
            if (strcmp($datos[13],$datos2[1])==0){
                $found=1;
                break;
            }
        }    
    }
    fclose($school);
    
    if ($found==0){
        $school = fopen("ESCUELAS.DAT", "a+") or die("No se puede abrir el archivo!");
        $miregistro=$id_school."|".$datos[13]."|".$datos[14]."|".$datos[15];
//        $miregistro=$id_school."|".$escuela."|".$domescuela."|".$localescuela;
//        echo $miregistro;
        fputs($school,$miregistro);
//        exit();
        fclose($school);
    }

    
//    exit();
}
fclose($myfile);

function limpiarCaracteresEspeciales($string ){
 $string = htmlentities($string);
 $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
 return $string;
}

?>