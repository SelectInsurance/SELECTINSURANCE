<?php
//Conexion a la base de datos 
class Conexion
{
    public function EstablecerConexion()
    {
        $PassEncriptada = base64_decode('PyQ7LmNOKikpbVdw');
        $conexion = new mysqli('198.12.235.230', 'Admin', $PassEncriptada, 'CRM_SELECT');

        error_reporting(0);

        if ($conexion->connect_errno) {
            echo 'Lo sentimos, estamos solucionando el error';
        }elseif ($conexion->set_charset("utf8")) {
            return $conexion;
        }
    }

    public function __destruct()
    {
        mysqli_close($this->EstablecerConexion());
    }
}