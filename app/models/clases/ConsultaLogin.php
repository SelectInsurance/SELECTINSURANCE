<?php 
require_once 'Conexion.php';
    class ConsultaLogin  
    {
        private $user;
        private $pass;

        public function __construct($user, $pass) {
            $this->user = $user;
            $this->pass = $pass;
        }

        public function Consulta(){
            $user = $this->user;
            $pass = $this->pass;
            $conexion = new Conexion();
            $consulta = mysqli_query($conexion->EstablecerConexion(), "SELECT Usuario, Password FROM UsuarioPageAgentes WHERE Usuario = '$user' AND Password = '$pass'");
            $rows = mysqli_num_rows($consulta);
            return $rows;
        }
    }
    
?>