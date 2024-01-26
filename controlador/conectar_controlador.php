<?php 
session_start();

function conectar(){
    require_once("modelo/usuarios_modelo.php");
    // Lógica del programa
    $error = '';
    $usuarios = new Usuarios_modelo();
    if(!isset($_SESSION['nombre'])){
        $nombre = isset($_POST['nombre'])?$_POST['nombre']: '';
        $clave = isset($_POST['clave'])?$_POST['clave']: '';
        if($usuarios->login($nombre, $clave)){
            $_SESSION['nombre'] = $nombre;
            $_SESSION['clave'] = $clave;
        }else {
            if($nombre != ''){
                $error = "Ususario o contraseña no encontrados";
            }
        }
    }
}

function desconectar(){

    session_destroy();
    header("Location: index.php");
    
}

?>