<?php 
session_start();

function home(){
    require_once("modelo/productos_modelo.php");
    
    $error = '';
    $productos = new productos_modelo();
    if(!isset($_SESSION['producto'])){
        
    }else {
        if(isset($_POST['borrar'])){
            $producto = isset($_POST['producto'])?$_POST['producto']: '';
            
            if($productos->borrar($producto)) $error = "Borrado correctamente";
            else $error = "Error al borrar";
        }
        
        elseif(isset($_POST['insertar'])){
            $producto = isset($_POST['producto'])?$_POST['producto']: '';
            $descripcion = isset($_POST['descripcion'])?$_POST['descripcion']: '';
            $imagen = isset($_POST['imagen'])?$_POST['imagen']: '';
            $autor = isset($_POST['autor'])?$_POST['autor']: '';

            if($productos->insertar($producto, $clave, $edad, $correo)) $error = "Insertado correctamente.";
            else $error = "Error al insertar.";
        }
    }
    $array_productos = $productos->get_datos();
    require_once("vista/principal_vista.php");
}

?>