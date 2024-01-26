<?php 

class Conectar{
    public static function conexion(){
        try {
            $conexion = new mysqli("localhost", "root", "", "PolloPepe");
        } catch (Exception $e) {
            die ('Error'.$e->getMessage());
        }
        return $conexion;
    }
   
}

?>