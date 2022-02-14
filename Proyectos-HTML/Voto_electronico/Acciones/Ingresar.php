<?php
include("../Funciones/Ingreso.php");

if(isset($_POST['ingresar'])){
    $dni=$_POST['dni'];
    if($dni==="1234"){
        header("Location:../Interfaces/Administrador.php");
        exit;
    }
    elseif(empty($dni)){
        header("Location:../Errores/User/Error1.php");
        exit;
    }
    elseif(strlen($dni)!==8){
        header("Location:../Errores/User/Error2.php");
        exit;
    }
    else{
        $res=validar($dni);
        if($res==1){
            header("Location:../Errores/User/Error3.php");
            exit;
        }
        validar2($dni);
        exit;
    }

}



?>