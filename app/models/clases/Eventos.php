<?php 
require_once 'Conexion.php';
    class Eventos  
    {

        private function Conexion(){
            $conexion = new Conexion();
            return $conexion->EstablecerConexion();
        }

        public function IngresarEvento($query){

            $this->Conexion()->query($query);

            return 'Evento Ingresado';
        }

        public function Consulta($query){
            

            $consulta = mysqli_query($this->Conexion(), $query);

            return $consulta;
        }
    }
    
?>