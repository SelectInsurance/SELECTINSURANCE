<?php 
class ConexionVtiger
{
    public function EstablecerConexion()
    {
        //pass PyQ7LmNOKikpbVdw
        //user Admin
        //host 198.12.235.230
        
        $PassEncriptada = base64_decode('PyQ7LmNOKikpbVdw');
        $conexion = new mysqli('198.12.235.230', 'select_crm', $PassEncriptada, 'select_crm');

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


?>