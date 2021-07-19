<?php
require_once 'Conexion.php';
class SubidaArchivos extends Pather
{
    private $Nombre;

    private $RutaTemporal;
    private $NombreArchivo;
    private $TamañoArchivo;
    private $TipoArchivo;

    public function __construct($Nombre, $RutaTemporal, $NombreArchivo, $TamañoArchivo, $TipoArchivo, $table)
    {
        $this->Nombre = $Nombre;

        $this->RutaTemporal = $RutaTemporal;
        $this->NombreArchivo = $NombreArchivo;
        $this->TamañoArchivo = $TamañoArchivo;
        $this->TipoArchivo = $TipoArchivo;

        $this->table = $table;
    }

    //Metodo para subir archivo validando la extencion y insertando en la base de datos la url
    public function SubidaValidando($DirectorioDeSubida)
    {



        //Aplicando extencion y forzando minusculas
        $Extencion = explode(".", $this->NombreArchivo);
        $ExtencionMinuscula = strtolower(end($Extencion));

        $conexion = new Conexion();
        $Nombre = $this->Nombre;

        $ExtencionesPermitidas = array('mp4');

        if (in_array($ExtencionMinuscula, $ExtencionesPermitidas)) {

            $DirectorioYNombre = $DirectorioDeSubida . $this->NombreArchivo;
            $table = $this->table;

            $conexion->EstablecerConexion()->query("INSERT INTO $table(Nombre, URL) VALUES('$Nombre','$DirectorioYNombre')");
            if (!empty(move_uploaded_file($this->RutaTemporal, $DirectorioYNombre))) {
                $menssage = 'Subido con Exito';
            } else {
                $menssage = 'Error al subirse';
            }
        }
        return $menssage;
    }
}
