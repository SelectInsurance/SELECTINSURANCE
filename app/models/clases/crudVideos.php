<?php 
require_once 'Conexion.php';
    class crudVideos
    {
        private $query;
        public function __construct($query) {
            $this->query = $query;
        }

        private function Conexion(){
            $conexion = new Conexion();
            return $conexion->EstablecerConexion();
        }

        public function Create()
        {
            $query = $this->query;
            $this->Conexion()->query("$query");
        }

        public function Read(){
            $consulta = mysqli_query($this->Conexion(), $this->query);
            return $consulta;
        }

        public function Update(){
            $query = $this->query;
            $this->Conexion()->query($query);
        }

        public function Delete()
        {
            $query = $this->query;
            $this->Conexion()->query($query);
        }
    }
    
?>