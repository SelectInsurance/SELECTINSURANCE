<?php
require_once 'app/views/assets/header.php';
require_once 'app/models/autoload.php';
session_start();
class ControllerPrincipal extends Pather
{

    public function __construct()
    {
        $this->table = "UsuarioPageAgentes";
    }
    public function ControllerInicio()
    {
        require_once 'app/views/assets/NavPrincipal.php';
        session_start();



        $query = "SELECT * FROM Calendario"; //Query traer Datos de la tabla calendario
        $consulta = new Eventos();
        $resultados = $consulta->Consulta($query);

        $i = 0;
        while ($rows = mysqli_fetch_assoc($resultados)) {
            $datos[$i]['id'] = $rows['id'];
            $datos[$i]['name'] = $rows['name'];
            $datos[$i]['date'] = $rows['date'];
            $datos[$i]['description'] = $rows['description'];
            $datos[$i]['type'] = $rows['type'];
            $datos[$i]['everyYear'] = $rows['everyYear'];
            $datos[$i]['badge'] = $rows['badge'];
            $datos[$i]['color'] = $rows['color'];
            $i++;
        }
        require_once 'app/views/pages/inicio.php';
        if (isset($_POST['btnFormEnviar'])) {
            $InsertarCliente = new InsertClientes($_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['telefono'], $_POST['estado'], $_POST['servicio']);
            $InsertarCliente->InsertCliente();
        }
        require_once 'app/views/assets/WhatsappPegajoso/WhatsappPrincipal.php';
    }

    public function ControllerAgentes()
    {
        require_once 'app/views/assets/NavPrincipal.php';
        require_once 'app/views/pages/Agentes.php';
        require_once 'app/views/assets/WhatsappPegajoso/WhatsappPrincipal.php';
    }



    //controller Videos de Salud
    public function ControllerVideosDeSalud()
    {
        $ConsultaSalud = new crud();
        $ResultadosSalud = $ConsultaSalud->Read("SELECT Nombre, URL FROM VideosDeSalud");


        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/subpages/VideosSalud.php';
    }

    //Controller Videos de vida 
    public function ControllerVideosDeVida()
    {
        $ConsultaAnico = new crud();
        $consultaAmeritas = new crud();
        $ConsultaNationalLife = new crud();

        $ResultadosAnico = $ConsultaAnico->Read("SELECT Nombre, URL FROM VideosAnico");
        $ResultadosAmeritas = $consultaAmeritas->Read("SELECT Nombre, URL FROM VideosAmeritas");
        $ResultadosNationalLife = $ConsultaNationalLife->Read("SELECT Nombre, URL FROM VideosNationalLife");

        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/subpages/VideosVida.php';
    }

    public function ControllerCotizarVida()
    {
        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/subpages/CotizarVida.php';
    }


    public function ControllerBuscadorLeads()
    {
        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/subpages/BuscadorLeads.php';
    }


    //Validacion Login Salud
    public function ControllerLogeadoSalud($user, $pass)
    {
        $login = new ConsultaLogin($user, $pass, $this->table);
        if ($login->Consulta()) {
            $_SESSION['logeado'] = 'admin';
        } else {
            require_once 'app/views/assets/NavPrincipal.php';
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
            require_once 'app/views/assets/NavPrincipal.php';
            $mensajeError = '<center>Error al iniciar Sesion</center>';
            require_once 'app/views/pages/ErrorLogin.php';
            require_once 'app/views/pages/LoginVida.php';
        }
    }

    //Validacion Login Buscador Leadas
    public function ControllerLogeadoBuscadorLeads($user, $pass)
    {
        $login = new ConsultaLogin($user, $pass, $this->table);
        if ($login->Consulta()) {
            $_SESSION['logeado'] = 'admin';
        } else {
            require_once 'app/views/assets/NavPrincipal.php';
            $mensajeError = '<center>Error al iniciar Sesion</center>';
            require_once 'app/views/pages/ErrorLogin.php';
            require_once 'app/views/pages/LoginBuscadorLeads.php';
        }
    }
}
require_once 'app/views/assets/footer.php';
