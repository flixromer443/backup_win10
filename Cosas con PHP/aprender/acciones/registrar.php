<?php 
  if(isset($_POST['enviar'])){
     $nombre=$_POST['nombre'];
     $apellido=$_POST['apellido'];

        $found=0;
       $archivo=fopen("../archivos/registro.csv","r");
       while(!feof($archivo)){
           $linea=fgets($archivo);
           $datos=explode('|',$linea);
           $nom=$datos[0];
           $ap=$datos[1];

            if($nombre==$nom){
                $found=1;
            }
      
       } 
       fclose($archivo);

       if($found==1){
           echo "ya estabas registrado antes";
       }



       if($found==0){
        $archivo=fopen("../archivos/registro.csv","a+");
        while(!feof($archivo)){
            $linea=fgets($archivo);
            $datos=explode('|',$linea);
            $nom=$datos[0];
            $ap=$datos[1];
 
            $arreglo=$nombre.'|'.$apellido.'|'."\n";
            fputs($archivo,$arreglo);
        break;
            } 
       }
  }

?>