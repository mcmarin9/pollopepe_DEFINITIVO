<?php 

    class Usuarios_modelo{

        private $db; // Conexión con la BBDD
        private $usuarios; // Registros recuperados de la BBDD

        public function __construct(){

            require_once("modelo/conectar.php");
            $this->db = Conectar::conexion();
            $this->usuarios = array();
        }

        public function get_usuarios(){

            $sql = "SELECT * FROM usuarios";
            $consulta = $this->db->query($sql);
            while ($registro = $consulta->fetch_assoc()){
                $this->usuarios[] = $registro;
            }
            return $this->usuarios;
        }

        public function login($user, $password){
            $login = false;
            $sql = "SELECT * FROM usuarios WHERE nombre = '$user' AND clave = '$password'";
            if($consulta = $this->db->query($sql)){
                if($consulta->num_rows > 0){
                    $login = true;
                }
            }
            return $login;
        }

        public function borrar($nombre){
            $sql = "DELETE FROM usuarios WHERE nombre = '$nombre'";
            if($this->db->query($sql)){
                    $sql1 = "DELETE FROM usuarios WHERE nombre = '$nombre'";
                    return $this->db->query($sql1);
                }
                return false;
            }

        public function insertar($nombre, $clave, $edad, $correo){

            $sql = "INSERT INTO usuarios (nombre, clave) VALUES ('$nombre', '$clave')";
            if($this->db->query($sql)){
                $sql1 = "INSERT INTO usuarios (nombre, edad, correo) VALUES ('$nombre', $edad, '$correo')";
                return $this->db->query($sql1);

                }
                return false;
        }   
    }

?>