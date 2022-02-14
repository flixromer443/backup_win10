<?php
    if(isset($_POST['ingresar'])){
        $found=0;

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];


        if($nombre==1234){
            $found=1;
            session_start();
            $_SESSION['admin']['nombre']="administrador";
           header("Location:../interfaces/admin.php"); 
            
        }
        
        if($nombre==12345){
            $found=1;
            session_start();
            $_SESSION['admin']['nombre']="vendedor";
           header("Location:../interfaces/admin.php"); 
            
        }

      
        
        
        $archivo=fopen("../archivos/registro.csv","r") or die ("error");  
        while(!feof($archivo)){
            $linea=fgets($archivo);
            $datos=explode('|',$linea);
            $nom=$datos[0];
            
            if($nom==$nombre){
                $found=1;
                session_start();
                $_SESSION['usuario']=array();
                $_SESSION['usuario']['nombre']=$nombre;
                $_SESSION['usuario']['apellido']=$apellido;
                header("Location:../interfaces/usuario.php");
                
            break;
            }
        }
        fclose($archivo);
       if($found==0){
           header("Location:../Index.php");
       }
       

    }

?>