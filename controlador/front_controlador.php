<?php
function console_log( $data ){
echo '<script>';
echo 'console.log('. json_encode( $data ) .')';
echo '</script>';
}
define ('CONTROLLERS_FOLDER', "controlador/");//Controlador
define ('DEFAULT_CONTROLLER', "usuarios"); //productos
define ('DEFAULT_ACTION', "home");
$controller = DEFAULT_CONTROLLER;
if ( !empty ( $_GET[ 'controlador' ] ) ) $controller = $_GET [ 'controlador' ];
$action = DEFAULT_ACTION;
if ( !empty ( $_GET [ 'action' ] ) ) $action = $_GET [ 'action' ];
$controller = CONTROLLERS_FOLDER . $controller . '_controlador.php'; 
console_log($controller);
try {
    if ( is_file ( $controller ) ) require_once ($controller);
    else
    throw new Exception ('El controlador no existe - 404 not found');
    if ( is_callable ($action) ) $action();
    else
    throw new Exception ('La accion no existe - 404 not found');
} catch (Exception $e) {
    console_log($e->getMessage());
}
?>