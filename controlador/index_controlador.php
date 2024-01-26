<?php 
session_start();

function home(){
    
    require_once("vista/index_vista.php");

}

function conectar(){
    
    require_once("vista/conectar_vista.php");
    require_once("modelo/usuarios_modelo.php");

    $usuarios = new Usuarios_modelo();
    if(!isset($_SESSION['nombre'])){
        $nombre = isset($_POST['nombre'])?$_POST['nombre']: '';
        $clave = isset($_POST['clave'])?$_POST['clave']: '';
        if($usuarios->login($nombre, $clave)){
            $_SESSION['nombre'] = $nombre;
            echo"$clave";
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