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
            $sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND clave = '$password'";
            if($consulta = $this->db->query($sql)){
                if($consulta->num_rows > 0){
                    $login = true;
                }
            }
            return $login;
        }

        public function borrar($usuario){
            $sql = "DELETE FROM usuarios WHERE usuario = '$usuario'";
            return $this->db->query($sql);
        }

        public function insertar($usuario, $clave){
            $sql = "INSERT INTO usuarios (usuario, clave) VALUES ('$usuario', '$clave')";
            return $this->db->query($sql);
        }

    }

    ?>