<?php 
require_once 'Conexion.php';
    class crudVideos
    {

        private function Conexion(){
            $conexion = new Conexion();
            return $conexion->EstablecerConexion();
        }

        public function Create($query)
        {
            $this->Conexion()->query($query);
        }

        public function Read($query){
            $consulta = mysqli_query($this->Conexion(), $query);
            return $consulta;
        }

        public function Update($query){
            $this->Conexion()->query($query);
        }

        public function Delete($query)
        {
            $this->Conexion()->query($query);
        }
    }
    
?>