    <?php
    //require_once 'app/controllers/app_autoload_controller.php'; sin implementacion



    //Controller principal
    require_once 'app/controllers/ControllerSelectInsurance.php';
    $controller = new ControllerPrincipal();
    switch ($_GET['pages']) {
        case 'inicio':
            $controller->ControllerInicio();
            break;
        case 'agentes':
            $controller->ControllerAgentes();
            break;

            //Validacion para conseguir el refresco de la pagina ya que se quedaba en blanco si no aplicaba header
        case 'ValidacionLogin':
            if (isset($_POST['btnloginSalud'])) {
                $controller->ControllerLogeadoSalud('admin', $_POST['password']);
                header('Location:./?pages=Videos-de-salud');
            } elseif (isset($_POST['btnloginVida'])) {
                $controller->ControllerLogeadoVida('admin', $_POST['password']);
                header('Location:./?pages=Videos-de-Vida');
            }
            break;

            //Validacion si existe inicio de sesion en videos de salud
        case 'Videos-de-salud':
            if (!empty($_SESSION['logeado']) || !empty($_SESSION['managment'])) {
                $controller->ControllerVideosDeSalud();
            } else {
                $controller->ControllerLogeadoSalud('admin', $_POST['password']);
                header('./?pages=Videos-de-salud');
            }
            break;

            //Validacion si existe inicio de sesion en videos de Vida
        case 'Videos-de-Vida':
            if (!empty($_SESSION['logeado']) || !empty($_SESSION['managment'])) {
                $controller->ControllerVideosDeVida();
            } else {
                $controller->ControllerLogeadoVida('admin', $_POST['password']);
                header('./?pages=Videos-de-Vida');
            }
            break;

            //si no ingresa en ninguna de las condiciones anteriores
        default:
            if (!isset($_GET['pages']) && empty($_GET['managment'])) {
                $controller->ControllerInicio();
            }
            break;
    }







    //Controller del Managment
    require_once 'app/controllers/ControllerManagment.php';
    $ManagmentController = new ControllerManagment();

    switch ($_GET['managment']) {
            //login de managment
        case 'login':
            if (empty($_SESSION['managment'])) {
                $ManagmentController->ControllerManagmentLogin();
            }else {
                $ManagmentController->ControllerManagmentCargaVideos();
            }
            break;

            //Validacion para conseguir el refresco de la pagina ya que se quedaba en blanco si no aplicaba header
        case 'validacion-managment-login':
            $ManagmentController->ControllerManagmentConsultaLogin($_POST['user'], $_POST['pass']);
            header('Location:?managment=CargaVideos');
            break;

            //Carga Video
        case 'CargaVideos':
            if (!empty($_SESSION['managment'])) {
                $ManagmentController->ControllerManagmentCargaVideos();
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;
        default:
            # code...
            break;
    }
    ?>
