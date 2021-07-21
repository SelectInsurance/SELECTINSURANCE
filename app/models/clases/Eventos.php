<?php 
require_once 'Conexion.php';
    class Eventos  
    {
        public function Consulta($query){
            $conexion = new Conexion();

            $consulta = mysqli_query($conexion->EstablecerConexion(),$query);

            return $consulta;
        }
    }
    
?>