<?php
//Agregar votante al padron
//Agregar excel y pdf!!
function agregar($nom,$ap,$doc){
    $estado="No voto";
    $archivo=fopen("../Archivos/Padrones/Padronvista.csv","a+")or die("error");
       while(!feof($archivo)){
           $fila=fgets($archivo);
           $datos=explode("\t",$fila);
           $datos[0]=$nom;           
           $datos[1]=$ap;
           $datos[2]=$doc;
           $datos[3]=$estado; 
           $enviar=$nom."\t\t".$ap."\t\t".$doc."\n";
           fputs($archivo,$enviar);
           break;           
       }
       fclose($archivo);
       $archivo=fopen("../Archivos/Padrones/Padron.csv","a+")or die("error");
       while(!feof($archivo)){
           $fila=fgets($archivo);
           $datos=explode("|",$fila);
           $datos[0]=$nom;           
           $datos[1]=$ap;
           $datos[2]=$doc; 
           $datos[3]=$estado;
           $enviar=$nom."|".$ap."|".$doc."\n";
           fputs($archivo,$enviar);
           break;           
       }
      // $archivo=fopen("../Archivos/Padrones/Novotaron.csv","a+")or die("error");
      // while(!feof($archivo)){
        //   $fila=fgets($archivo);
          // $datos=explode("|",$fila);
          // $datos[0]=$nom;           
           //$datos[1]=$ap;
           //$datos[2]=$doc; 
           //$datos[3]=$estado;
           //$enviar=$nom."|".$ap."|".$doc."|".$estado."\n";
           //fputs($archivo,$enviar);
           //break;           
      // }
}
?>