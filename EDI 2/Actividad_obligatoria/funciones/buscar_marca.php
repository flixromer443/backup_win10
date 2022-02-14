<?php
    function buscar_marca($id){
        $archivo=fopen("../archivos/marcas.txt","r");
        while(!feof($archivo)){
            $linea=fgets($archivo);
            $datos=explode("|",$linea);
            $i=$datos[0];
            $marca=$datos[1];
            if($i==$id){
                return $marca;
            }
        }
        fclose($archivo);
    }
    
    function buscar_dominio($id){
        $archivo=fopen("../archivos/facturacion.txt","r");
        while(!feof($archivo)){
            $linea=fgets($archivo);
            $datos=explode("|",$linea);
            $i=$datos[0];
            $marca=trim($datos[4]);
            if($i==$id){
                return $marca;
            }
        }
        fclose($archivo);
    }
    function buscar_monto($id){
        $archivo=fopen("../archivos/datos_del_vehiculo.txt","r");
        while(!feof($archivo)){
            $linea=fgets($archivo);
            $datos=explode("|",$linea);
            $i=$datos[0];
            $marca=$datos[5];
            if($i==$id){
                return $marca;
            }
        }
        fclose($archivo);
    }
    function buscar_codigo($id){
        $archivo=fopen("../archivos/codigos_de_barra.txt","r");
        while(!feof($archivo)){
            $linea=fgets($archivo);
            $datos=explode("|",$linea);
            $i=$datos[0];
            $marca=$datos[1];
            if($i==$id){
                return $marca;
            }
        }
        fclose($archivo);
    }
    function buscar_calle($id){
        $archivo=fopen("../archivos/direccion(calle).txt","r");
        while(!feof($archivo)){
            $linea=fgets($archivo);
            $datos=explode("|",$linea);
            $i=$datos[0];
            $marca=$datos[1];
            if($i==$id){
                return $marca;
            }
        }
        fclose($archivo);
    }
    function buscar_altura($id){
        $archivo=fopen("../archivos/direccion(altura,codigo_postal).txt","r");
        while(!feof($archivo)){
            $linea=fgets($archivo);
            $datos=explode("|",$linea);
            $i=$datos[0];
            $marca[0]=$datos[1];
            $marca[1]=$datos[3];
            $marca[2]=$datos[2];
            if($i==$id){
                return $marca;
            }
        }
        fclose($archivo);
    }
    
?>