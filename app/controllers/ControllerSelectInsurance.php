<?php
require_once 'app/views/assets/header.php';
require_once 'app/models/autoload.php';
session_start();
class ControllerPrincipal extends Pather
{

    public function __construct() {
        $this->table = "UsuarioPageAgentes";
    }
    public function ControllerInicio()
    {
        require_once 'app/views/assets/NavPrincipal.php';
        session_start();
        require_once 'app/views/pages/inicio.php';
        if (isset($_POST['btnform1enviar'])) {
            $InsertarCliente = new InsertClientes($_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['telefono'], $_POST['estado'], $_POST['servicio']);
            $InsertarCliente->InsertCliente();
        }
    }

    public function ControllerAgentes()
    {
        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/Agentes.php';
    }


    //Validacion Login Salud
    public function ControllerLogeadoSalud($user, $pass)
    {
        $login = new ConsultaLogin($user, $pass, $this->table);
        if ($login->Consulta()) {
            $_SESSION['logeado'] = 'admin';
        } else {
            require_once 'app/views/assets/NavAgente.php';
            $mensajeError = '<center>Error al iniciar Sesion</center>';
            require_once 'app/views/pages/ErrorLogin.php';
            require_once 'app/views/pages/LoginSalud.php';
        }
    }

    //Validacion Login Vida
    public function ControllerLogeadoVida($user, $pass)
    {
        $login = new ConsultaLogin($user, $pass, $this->table);
        if ($login->Consulta()) {
            $_SESSION['logeado'] = 'admin';
        } else {
            require_once 'app/views/assets/NavAgente.php';
            $mensajeError = '<center>Error al iniciar Sesion</center>';
            require_once 'app/views/pages/ErrorLogin.php';
            require_once 'app/views/pages/LoginVida.php';
        }
    }

    //controller Videos de Salud
    public function ControllerVideosDeSalud()
    {
        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/subpages/VideosSalud.php';
    }

    public function ControllerVideosDeVida()
    {
        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/subpages/VideosVida.php';
    }
}
require_once 'app/views/assets/footer.php';
