<?php
    session_start();
    if(isset($_SESSION['admin'])){
        unset($_SESSION['admin']);
        header("Location:../interfaces/login.php");
    }
    if(isset($_SESSION['usuario'])){
        unset($_SESSION['usuario']);
        header("Location:../interfaces/login.php");
    }

?>