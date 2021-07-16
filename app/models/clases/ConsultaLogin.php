<?php 
require_once 'Conexion.php';
require_once 'Pather.php';
    class ConsultaLogin  extends Pather
    {

        public function __construct($user, $pass, $table) {
            $this->user = $user;
            $this->pass = $pass;
            $this->table = $table;
        }

        public function Consulta(){
            $user = $this->user;
            $pass = $this->pass;
            $table = $this->table;
            $conexion = new Conexion();
            $consulta = mysqli_query($conexion->EstablecerConexion(), "SELECT Usuario, Password FROM $table WHERE Usuario = '$user' AND Password = '$pass'");
            $rows = mysqli_num_rows($consulta);
            return $rows;
        }
    }
    
?>