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

        //if (isset($_POST['btnUploadVideoAnico']) && !empty($_POST['NombreVideoAnico'])) {
        //    $RutaTemporal = $_FILES['Anico']['tmp_name'];
        //    $NombreArchivo = $_FILES['Anico']['name'];
        //    $TamañoArchivo = $_FILES['Anico']['size'];
        //    $TipoArchivo = $_FILES['Anico']['type'];
        //
        //
        //    $subirVideos = new SubidaArchivos($_POST['NombreVideoAnico'], $RutaTemporal, $NombreArchivo, $TamañoArchivo, $TipoArchivo, 'VideosAnico');
        //    $mensaje = $subirVideos->SubidaValidando('app/views/assets/videos/videos_vida/anico/');
        //} elseif (isset($_POST['btnUploadVideoAmeritas']) && !empty($_POST['NombreVideoAmeritas'])) {
        //    $RutaTemporal = $_FILES['Anico']['tmp_name'];
        //    $NombreArchivo = $_FILES['Anico']['name'];
        //    $TamañoArchivo = $_FILES['Anico']['size'];
        //    $TipoArchivo = $_FILES['Anico']['type'];
        //
        //
        //    $subirVideos = new SubidaArchivos($_POST['NombreVideoAmeritas'], $RutaTemporal, $NombreArchivo, $TamañoArchivo, $TipoArchivo, 'VideosAmeritas');
        //    $mensaje = $subirVideos->SubidaValidando('app/views/assets/videos/videos_vida/ameritas/');
        //} elseif (isset($_POST['btnUploadVideoNationalLife']) && !empty($_POST['NombreVideoNationalLife'])) {
        //    $RutaTemporal = $_FILES['Anico']['tmp_name'];
        //    $NombreArchivo = $_FILES['Anico']['name'];
        //    $TamañoArchivo = $_FILES['Anico']['size'];
        //    $TipoArchivo = $_FILES['Anico']['type'];
        //
        //
        //    $subirVideos = new SubidaArchivos($_POST['NombreVideoNationalLife'], $RutaTemporal, $NombreArchivo, $TamañoArchivo, $TipoArchivo, 'NationalLife');
        //    $mensaje = $subirVideos->SubidaValidando('app/views/assets/videos/videos_vida/national_life/');
        //}





        require_once 'app/views/pages/managment/modulos/CargaVideos.php';
    }

    public function ControllerCargandoVideos($nombre, $RutaTemporal, $NombreArchivo, $TamañoArchivo, $TipoArchivo, $table, $ruta)
    {
        $subirVideos = new SubidaArchivos($nombre, $RutaTemporal, $NombreArchivo, $TamañoArchivo, $TipoArchivo, $table);
        $mensaje = $subirVideos->SubidaValidando($ruta);
    }
}

require_once 'app/views/assets/footer.php';
