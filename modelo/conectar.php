<?php 

class Conectar{
    public static function conexion(){
        try {
            $conexion = new mysqli("localhost", "root", "", "repaso2_mvc");
        } catch (Exception $e) {
            die ('Error'.$e->getMessage());
        }
        return $conexion;
    }
   
}

?>