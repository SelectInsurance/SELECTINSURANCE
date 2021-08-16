<?php 
require_once 'ConexionVtiger.php';
class CrudVtiger  
{
    
    private function Conexion(){
        $Conexion = new ConexionVtiger();
        return $Conexion->EstablecerConexion();
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
