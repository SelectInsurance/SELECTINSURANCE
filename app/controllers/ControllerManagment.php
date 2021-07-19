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


        if (isset($_POST['btnUploadVideoAnico'])) {
            $RutaTemporal = $_FILES['Anico']['tmp_name'];
            $NombreArchivo = $_FILES['Anico']['name'];
            $TamañoArchivo = $_FILES['Anico']['size'];
            $TipoArchivo = $_FILES['Anico']['type'];


            $subirVideos = new SubidaArchivos($_POST['NombreVideo'], $RutaTemporal, $NombreArchivo, $TamañoArchivo, $TipoArchivo, 'VideosAnico');
            $mensaje = $subirVideos->SubidaValidando('app/views/assets/videos/videos_vida/anico/');
        }

        if (isset($_POST['btnUploadVideoAmeritas'])) {
            $RutaTemporal = $_FILES['Anico']['tmp_name'];
            $NombreArchivo = $_FILES['Anico']['name'];
            $TamañoArchivo = $_FILES['Anico']['size'];
            $TipoArchivo = $_FILES['Anico']['type'];


            $subirVideos = new SubidaArchivos($_POST['NombreVideo'], $RutaTemporal, $NombreArchivo, $TamañoArchivo, $TipoArchivo, 'VideosAmeritas');
            $mensaje = $subirVideos->SubidaValidando('app/views/assets/videos/videos_vida/ameritas/');
        }

        if (isset($_POST['btnUploadVideoNationalLife'])) {
            $RutaTemporal = $_FILES['Anico']['tmp_name'];
            $NombreArchivo = $_FILES['Anico']['name'];
            $TamañoArchivo = $_FILES['Anico']['size'];
            $TipoArchivo = $_FILES['Anico']['type'];


            $subirVideos = new SubidaArchivos($_POST['NombreVideo'], $RutaTemporal, $NombreArchivo, $TamañoArchivo, $TipoArchivo, 'NationalLife');
            $mensaje = $subirVideos->SubidaValidando('app/views/assets/videos/videos_vida/national_life/');
        }

        require_once 'app/views/pages/managment/modulos/CargaVideos.php';
    }
}

require_once 'app/views/assets/footer.php';
