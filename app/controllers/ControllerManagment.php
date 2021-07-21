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
        require_once 'app/views/assets/NavPrincipal.php';
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


    //Controlador para carga de videos de Vida
    public function ControllerManagmentCargaVideosVida()
    {
        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/managment/modulos/CargaVideosVida.php';
    }

    public function ControllerCargandoVideos($nombre, $RutaTemporal, $NombreArchivo, $TamañoArchivo, $TipoArchivo, $table, $ruta)
    {
        $subirVideos = new SubidaArchivos($nombre, $RutaTemporal, $NombreArchivo, $TamañoArchivo, $TipoArchivo, $table);
        $mensaje = $subirVideos->SubidaValidando($ruta);
    }

    public function ControllerPrincipalManagment()
    {
        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/managment/InicioManagment.php';
    }




    //Controlador para carga de videos de Salud
    public function ControllerManagmentCargaVideosSalud()
    {
        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/managment/modulos/CargaVideosSalud.php';
    }


    //Controlador para editar o eliminar Videos de Salud
    public function ControllerManagmentEditarEliminarVideoSalud()
    {
        require_once 'app/views/assets/NavAgente.php';
        $Select = "SELECT * FROM videosdesalud";
        $Query = new crudVideos();
        require_once 'app/views/pages/managment/modulos/EliminarEditarVideosSalud.php';
    }

    //Controladores para recibir ID y procesarlo en el Crud
    public function ControllerManagmentProcesoEditarVideoSalud($id, $nombre)
    {
        foreach ($id as $IdVideo) {
            $Update = "UPDATE videosdesalud SET Nombre = '$nombre' WHERE idVideo = '$IdVideo'";
            $Query = new crudVideos();
            $Query->Update($Update);
        }
    }
    public function ControllerManagmentProcesoEliminarVideoSalud($id)
    {

        foreach ($id as $IdVideo) {
            $Select = "SELECT URL FROM videosdesalud WHERE idVideo = '$IdVideo'";
            $Delete = "DELETE FROM videosdesalud WHERE idVideo = '$IdVideo'";
            $Query = new crudVideos();
            $resultado = $Query->Read($Select);
            $Query->Delete($Delete);

            $row = mysqli_fetch_assoc($resultado);
            $Eliminar = new EliminarArchivos($row['URL']);
            $Eliminar->Eliminar();
        }
    }
}

require_once 'app/views/assets/footer.php';
