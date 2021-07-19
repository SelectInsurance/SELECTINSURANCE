<?php
//Conexion a la base de datos 
class Conexion
{
    public function EstablecerConexion()
    {
        $conexion = new mysqli('localhost', 'root', '', 'crm_select');

        error_reporting(0);

        if ($conexion->connect_errno) {
            echo 'Lo sentimos, estamos solucionando el error';
        }
        return $conexion;
    }

    public function __destruct()
    {
        mysqli_close($this->EstablecerConexion());
    }
}