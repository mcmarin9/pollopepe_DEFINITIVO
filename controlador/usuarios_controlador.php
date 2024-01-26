<?php 
session_start();

function home(){
    require_once("modelo/usuarios_modelo.php");
    // Lógica del programa
    $error = '';
    $usuarios = new Usuarios_modelo();
    if(!isset($_SESSION['nombre'])){
        $nombre = isset($_POST['nombre'])?$_POST['nombre']: '';
        $clave = isset($_POST['clave'])?$_POST['clave']: '';
        if($usuarios->login($nombre, $clave)){
            $_SESSION['nombre'] = $nombre;
        }else {
            if($nombre != ''){
            $error = "Ususario o contraseña no encontrados";
            }
        }
    }else {
        if(isset($_POST['borrar'])){
            $nombre = isset($_POST['nombre'])?$_POST['nombre']: '';
            
            if($usuarios->borrar($nombre)) $error = "Borrado correctamente";
            else $error = "Error al borrar";
        }
        
        elseif(isset($_POST['insertar'])){
            $nombre = isset($_POST['nombre'])?$_POST['nombre']: '';
            $clave = isset($_POST['clave'])?$_POST['clave']: '';
            $edad = isset($_POST['edad'])?$_POST['edad']: '';
            $correo = isset($_POST['correo'])?$_POST['correo']: '';

            if($usuarios->insertar($nombre, $clave, $edad, $correo)) $error = "Insertado correctamente.";
            else $error = "Error al insertar.";
        }
    }
    $array_usuarios = $usuarios->get_usuarios();
    require_once("vista/index_vista.php");
}

//ESTAS 2 FUNCIONES NO ME VAN A IR PORQUE NO TENGO COMENTARIOS_MODELO
function inserta($file){
    require_once("modelo/comentarios_modelo.php");
    $datos = new Comentarios_modelo();
    if ($gestor=fopen($fichero,"r")!==FALSE){
        while ($linea=fgets($gestor,4096) !== false) {
            $campos=explode(";",$linea);
            if (count($campos) == 3) {
                $titulo=$campos[0];
                $autor=$campos[1];
                $campos=$campos[2];
                if ($datos->insertar($titulo,$autor,$comentario,$_SESSION["nombre"])) {
                    $error = "Comentario guardado";
                } else {
                    $error = "Error al guardar el comentario";
                }
            }
        }
    }
}

function gestionar(){
    require_once("modelo/comentarios_modelo.php"); //No existe comentarios_modelo
    $error = '';
    $datos = new Comentarios_modelo();

    if (isset($_POST["borrar"])) {
        $nombre = isset($_POST['titulo'])?$_POST['titulo'];
        if ($datos->borrar($nombre)) {
            $error = "Borrado correctamente";
        } else $error = "Error al borrar";
    } elseif (isset($_POST["insertar"])){
        if(!empty($_FILES["archivo"]["tmp_name"])){

        }
    }
}

function desconectar(){
    session_destroy();
    header("Location: index.php");
}

?>