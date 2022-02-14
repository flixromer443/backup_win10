
    <?php 

        echo "<a href='../index.php'>Volver</a>
        <br>
        <p>Por favor espere a que termine de cargar por completo</p>";
        
          $archivo=fopen("../archivos/bweb2","r");
          $archivo2=fopen("../archivos/facturacion.txt","a+");
          $i=0;
     

          //$data=0;
          $id=0;
          while(!feof($archivo)){
              $linea=fgets($archivo);
              $datos=explode("*",$linea);
              $id++;
              //$data+=count($datos);
              $i++;
              if($i==1){
                  $x=0;
                  $muestra=$datos[0];
                  while($x<24){
                      if($x==0){
                          $muestra[0]=$id;
                          fputs($archivo2,$id);
                          fputs($archivo2,"|");
                      }
                      elseif($x==12){
                          fputs($archivo2,"|");
                      }
                      elseif($x==16){
                          fputs($archivo2,"|");
                      }
                      elseif($x==18){
                          fputs($archivo2,"|");
                      }
                      fputs($archivo2,$muestra[$x]);
                      $x++;
                  }
                  fputs($archivo2,"\n");
                  echo "<br>";
                  $i=0;
                  
              }
              
          }
          fclose($archivo2);
          fclose($archivo);
                
          if(file_exists("archivos/facturacion.txt") &&file_exists("archivos/marcas.txt") && file_exists("archivos/direccion(calle).txt")&& file_exists("archivos/direccion(altura,codigo_postal).txt")  && file_exists("archivos/codigos_de_barra.txt")){
                echo "<a href='interfaces/crud1.php'>Panel de control</a>";
        }header("Location:..index.php");
          

         $archivo=fopen("../archivos/bweb2","r");
          $archivo2=fopen("../archivos/marcas.txt","a+");
          $i=0;
          //$data=0;
          $id=0;
          while(!feof($archivo)){
              $linea=fgets($archivo);
              $datos=explode("*",$linea);
              $id++;
              //$data+=count($datos);
              $i++;
              if($i==1){
                  $x=29;
                  $muestra=$datos[0];
                  while($x<45){
                      if($x==29){
                          $muestra[0]=$id;
                          fputs($archivo2,$id);
                          fputs($archivo2,"|");
                      }
                      elseif($muestra[$x]!=""){
                          fputs($archivo2,$muestra[$x]);
                      }
                      $x++;

                 }
                  fputs($archivo2,"\n");
                  echo "<br>";
                  $i=0;
                  
              }

             
              
          }
          fclose($archivo2);
          fclose($archivo);
        

         $archivo=fopen("../archivos/bweb2","r");
          $archivo2=fopen("../archivos/datos_del_vehiculo.txt","a+");
          $i=0;
          //$data=0;
          $id=0;
          while(!feof($archivo)){
              $linea=fgets($archivo);
              $datos=explode("*",$linea);
              $id++;
              //$data+=count($datos);
              $i++;
              if($i==1){
                  $x=45;
                  $muestra=$datos[0];
                  while($x<130){
                      if($x==45){
                          $muestra[0]=$id;
                          fputs($archivo2,$id);
                          fputs($archivo2,"|");
                      }
                      elseif($x==60){
                          fputs($archivo2,"|");
                      }
                      elseif($x==64){
                          fputs($archivo2,"|");
                      }
                      elseif($x==79){
                          fputs($archivo2,"|");
                      }
                      elseif($x==94){
                          fputs($archivo2,"|");
                      }
                      elseif($x==98){
                          fputs($archivo2,".");
                      }
                      elseif($x==100){
                          fputs($archivo2,"|");
                      }
                    
                      fputs($archivo2,$muestra[$x]);
                      $x++;
                  }
                  fputs($archivo2,"\n");
                  echo "<br>";
                  $i=0;
                  
              }

             
              
          }
          fclose($archivo2);
          fclose($archivo);



       $archivo=fopen("../archivos/bweb2","r");
          $archivo2=fopen("../archivos/direccion(calle).txt","a+");
          $i=0;
          //$data=0;
          $id=0;
          while(!feof($archivo)){
              $linea=fgets($archivo);
              $datos=explode("*",$linea);
              $id++;
              //$data+=count($datos);
              $i++;
              if($i==1){
                  $x=129;
                  $muestra=$datos[0];
                  while($x<150){
                      if($x==129){
                          $muestra[0]=$id;
                          fputs($archivo2,$id);
                          fputs($archivo2,"|");
                      }
                      elseif($muestra[$x]!=""){
                          fputs($archivo2,$muestra[$x]);
                      }
                      $x++;

                 }
                  fputs($archivo2,"\n");
                  echo "<br>";
                  $i=0;
                  
              }

             
              
          }
          fclose($archivo2);
          fclose($archivo);


        $archivo=fopen("../archivos/bweb2","r");
          $archivo2=fopen("../archivos/direccion(altura,codigo_postal).txt","a+");
          $i=0;
          //$data=0;
          $id=0;
          while(!feof($archivo)){
              $linea=fgets($archivo);
              $datos=explode("*",$linea);
              $id++;
              //$data+=count($datos);
              $i++;
              if($i==1){
                  $x=151;
                  $muestra=$datos[0];
                  while($x<180){
                      if($x==151){
                          $muestra[0]=$id;
                          fputs($archivo2,$id);
                          fputs($archivo2,"|");
                      }
                      elseif($x==156){
                          fputs($archivo2,"|");
                      }
                      elseif($x==160){
                          fputs($archivo2,"|");
                      }
                      fputs($archivo2,$muestra[$x]);
                      $x++;
                  }
                  fputs($archivo2,"\n");
                  echo "<br>";
                  $i=0;
                  
              }

             
              
          }
          fclose($archivo2);
          fclose($archivo);

         
          $archivo=fopen("../archivos/bweb2","r");
          $archivo2=fopen("../archivos/codigos_de_barra.txt","a+");
          $i=0;
          //$data=0;
          $id=0;
          while(!feof($archivo)){
              $linea=fgets($archivo);
              $datos=explode("*",$linea);
              $id++;
              //$data+=count($datos);
              $i++;
              if($i==1){
                  $x=180;
                  $muestra=$datos[0];
                  while($x<231){
                      if($x==180){
                          $muestra[0]=$id;
                          fputs($archivo2,$id);
                          fputs($archivo2,"|");
                      }
                      elseif($muestra[$x]!=""){
                          fputs($archivo2,$muestra[$x]);
                      }
                      $x++;

                 }
                  fputs($archivo2,"\n");
                  echo "<br>";
                  $i=0;
                  
              }

             
              
          }
          fclose($archivo2);
          fclose($archivo);
    ?>
  