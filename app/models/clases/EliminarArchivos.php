<?php 
    class EliminarArchivos  
    {
        private $ruta;

        public function __construct($ruta) {
            $this->ruta = $ruta;
        }

        public function Eliminar(){
            $ruta = $this->ruta;
            if (unlink($ruta)) {
                $mensaje = 'Eliminado con Exito';
            }else {
                $mensaje = 'No se pudo Eliminar';
            }
            return $mensaje;
        }
    }
    
?>