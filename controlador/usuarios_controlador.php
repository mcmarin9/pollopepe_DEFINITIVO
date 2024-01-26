<?php 
session_start();

function home(){
    require_once("modelo/usuarios_modelo.php");
    
    $error = '';
    $usuarios = new Usuarios_modelo();

    /*
    if(!isset($_SESSION['usuario'])){
        
    }else {
         
    }
    */

    $array_usuarios = $usuarios->get_usuarios();
    require_once("vista/principal_vista.php");
}

function login(){
    
    require_once("vista/login_vista.php");
    require_once("modelo/usuarios_modelo.php");
    

    $usuarios = new Usuarios_modelo();
    if(!isset($_SESSION['usuario'])){
        $usuario = isset($_POST['usuario'])?$_POST['usuario']: '';
        $clave = isset($_POST['clave'])?$_POST['clave']: '';
        if($usuarios->login($usuario, $clave)){
            $_SESSION['usuario'] = $usuario;
            //$_SESSION['clave'] = $clave; por q esto da error?
            header("Location: index.php"); //Esto aqui no
        }else {
            if($usuario != ''){
                $error = "Ususario o contraseña no encontrados";
            }
        }
    }
}

function gestionar(){

    require_once("modelo/usuarios_modelo.php");

    $usuarios = new Usuarios_modelo();


    if(isset($_POST['insertar'])){
        console_log("entra al isset insertar");
        $usuario = isset($_POST['nombre_usuario'])?$_POST['nombre_usuario']: '';
        $clave = isset($_POST['clave_usuario'])?$_POST['clave_usuario']: '';

        if($usuarios->insertar($usuario, $clave)) $error = "Insertado correctamente.";
        else $error = "Error al insertar.";
    }
    elseif(isset($_POST['borrar'])){
        $usuario = isset($_POST['usuario'])?$_POST['usuario']: '';
        
        if($usuarios->borrar($usuario)) $error = "Borrado correctamente";
        else $error = "Error al borrar";
    }

    $array_usuarios = $usuarios->get_usuarios();
    require_once("vista/gestionar_usuarios_vista.php");
}

function desconectar(){

    session_destroy();
    header("Location: index.php");
    
}

?>