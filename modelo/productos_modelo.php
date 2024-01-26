<?php 

    class Productos_modelo{

        private $db; // Conexión con la BBDD
        private $datos; // Registros recuperados de la BBDD

        public function __construct(){

            require_once("modelo/conectar.php");
            $this->db = Conectar::conexion();
            $this->datos = array();
        }

        public function get_datos(){

            $sql = "SELECT * FROM productos";
            $consulta = $this->db->query($sql);
            while ($registro = $consulta->fetch_assoc()){
                $this->datos[] = $registro;
            }
            return $this->datos;
        }
    }
    
?>