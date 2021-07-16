<?php 
//Clase para insertar Clientes a la base de datos en tb prospectos o pre-contactos
require_once 'Conexion.php';
    class InsertClientes
    {
        private $nombre;
        private $apellido;
        private $correo;
        private $telefono;
        private $estado;
        private $servicio;

        public function __construct($nombre, $apellido, $correo, $telefono, $estado, $servicio) {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->correo = $correo;
            $this->telefono = $telefono;
            $this->estado = $estado;
            $this->servicio = $servicio;
        }

        public function InsertCliente(){
            $conexion = new Conexion();
            $nombre = $this->nombre;
            $apellido = $this->apellido;
            $correo = $this->correo;
            $telefono = $this->telefono;
            $estado = $this->estado;
            $servicio = $this->servicio;
            $conexion->EstablecerConexion()->query("INSERT INTO Prospectos(nombreProspecto, apellidoProspecto, correoProspecto, telefonoProspecto, estadoProspecto, servicioProspecto) VALUES('$nombre','$apellido','$correo','$telefono','$estado','$servicio')");
            
            session_start();
            $_SESSION['Mensaje'] = true;
    }
}
