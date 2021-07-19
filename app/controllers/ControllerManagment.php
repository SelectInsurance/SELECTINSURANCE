<?php
require_once 'app/views/assets/header.php';
require_once 'app/models/autoload.php';

class ControllerManagment extends Pather
{
    public function __construct()
    {
        $this->table = "UsuarioManagment";
    }
    public function ControllerManagmentLogin()
    {
        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/managment/login.php';
    }

    public function ControllerManagmentConsultaLogin($user, $pass)
    {
        $consultar = new ConsultaLogin($user, $pass, $this->table);
        if ($consultar->Consulta()) {
            $_SESSION['managment'] = 'admin';
        } else {
            require_once 'app/views/assets/NavAgente.php';
            require_once 'app/views/pages/managment/login.php';
        }
    }

    public function ControllerManagmentCargaVideos()
    {
        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/managment/modulos/CargaVideos.php';

        if (isset($_POST['btnUploadVideoAnico'])) {
            $RutaTemporal = $_FILES['Anico']['tmp_name'];
            $NombreArchivo = $_FILES['Anico']['name'];
            $TamañoArchivo = $_FILES['Anico']['size'];
            $TipoArchivo = $_FILES['Anico']['type'];

            
            $subirVideos = new SubidaArchivos($_POST['NombreVideo'], $RutaTemporal, $NombreArchivo, $TamañoArchivo, $TipoArchivo, 'videosanico');
            
            require_once 'app/views/prueba.php';
            



            //$Extencion = explode(".", $NombreArchivo);
            //$ExtencionMinuscula = strtolower(end($Extencion));
            //
            //$ExtencionesPermitidas = array('mp4');
            //
            //if (in_array($ExtencionMinuscula, $ExtencionesPermitidas)) {
            //    $DirectorioDeSubida = 'app/views/';
            //    $DirectorioYNombre = $DirectorioDeSubida . $NombreArchivo;
            //
            //    if (move_uploaded_file($RutaTemporal, $DirectorioYNombre)) {
            //        $menssage = 'Subido con Exito';
            //    } else {
            //        $menssage = 'Error al subirse';
            //    }
            //}











        }
    }
}

require_once 'app/views/assets/footer.php';
