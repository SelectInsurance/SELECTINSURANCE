    <?php
    //require_once 'app/controllers/app_autoload_controller.php'; sin implementacion


    //(==============================================================================================)
    //(==============================================================================================)
    //Controller Inicio
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
                header('Location:./VideosSalud');
            } elseif (isset($_POST['btnloginVida'])) {
                $controller->ControllerLogeadoVida('admin', $_POST['password']);
                header('Location:./VideosVida');
            }
            break;

            //Validacion si existe inicio de sesion en videos de salud
        case 'VideosSalud':
            if (!empty($_SESSION['logeado']) || !empty($_SESSION['managment'])) {
                $controller->ControllerVideosDeSalud();
            } else {
                $controller->ControllerLogeadoSalud('admin', $_POST['password']);
                header('./VideosSalud');
            }
            break;

            //Validacion si existe inicio de sesion en videos de Vida
        case 'VideosVida':
            if (!empty($_SESSION['logeado']) || !empty($_SESSION['managment'])) {
                $controller->ControllerVideosDeVida();
            } else {
                $controller->ControllerLogeadoVida('admin', $_POST['password']);
                header('./VideosVida');
            }
            break;

            //si no ingresa en ninguna de las condiciones anteriores
        default:
            if (!isset($_GET['pages']) && empty($_GET['managment'])) {
                $controller->ControllerInicio();
            }
            break;
    }













    //(==============================================================================================)
    //(==============================================================================================)
    //Controller del Managment
    require_once 'app/controllers/ControllerManagment.php';
    $ManagmentController = new ControllerManagment();

    switch ($_GET['managment']) {

            //login de managment
        case 'login':
            if (empty($_SESSION['managment'])) {
                $ManagmentController->ControllerManagmentLogin();
            } else {
                header('Location:./InicioManagment');
            }
            break;

            //Validacion para conseguir el refresco de la pagina ya que se quedaba en blanco si no aplicaba header
        case 'validacion-managment-login':
            $ManagmentController->ControllerManagmentConsultaLogin($_POST['user'], $_POST['pass']);
            header('Location:./InicioManagment');
            break;

            //Inicio para ingresar a los modulos
        case 'InicioManagment':
            if (!empty($_SESSION['managment'])) {
                $ManagmentController->ControllerPrincipalManagment();
            } else {
                header('Location:./login');
            }
            break;



            //Carga Video de Vida
        case 'CargaVideosLife':
            if (!empty($_SESSION['managment'])) {
                $ManagmentController->ControllerManagmentCargaVideosVida();
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;



            //Recibiendo Videos para subida al servidor
        case 'CargandoVideosAnico':
            if (!empty($_SESSION['managment'])) {
                if (isset($_POST['btnUploadVideoAnico'])) {
                    $ManagmentController->ControllerCargandoVideos($_POST['NombreVideoAnico'], $_FILES['Anico']['tmp_name'], $_FILES['Anico']['name'], $_FILES['Anico']['size'], $_FILES['Anico']['type'], 'VideosAnico', 'app/views/assets/videos/videos_vida/anico/');
                    header('Location:./CargaVideosLife');
                }
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;
        case 'CargandoVideosAmeritas':
            if (!empty($_SESSION['managment'])) {
                if (isset($_POST['btnUploadVideoAmeritas'])) {
                    $ManagmentController->ControllerCargandoVideos($_POST['NombreVideoAmeritas'], $_FILES['Ameritas']['tmp_name'], $_FILES['Ameritas']['name'], $_FILES['Ameritas']['size'], $_FILES['Ameritas']['type'], 'VideosAmeritas', 'app/views/assets/videos/videos_vida/ameritas/');
                    header('Location:./CargaVideosLife');
                } else {
                    $controller->ControllerInicio();
                }
            }
            break;
        case 'CargandoVideosNationalLife':
            if (!empty($_SESSION['managment'])) {
                if (isset($_POST['btnUploadVideoNationalLife'])) {
                    $ManagmentController->ControllerCargandoVideos($_POST['NombreVideoNationalLife'], $_FILES['NationalLife']['tmp_name'], $_FILES['NationalLife']['name'], $_FILES['NationalLife']['size'], $_FILES['NationalLife']['type'], 'VideosNationalLife', 'app/views/assets/videos/videos_vida/national_life/');
                    header('Location:./CargaVideosLife');
                }
            } else {
                $controller->ControllerInicio();
            }




            //Carga Video de Salud
        case 'CargaVideosSalud':
            if (!empty($_SESSION['managment'])) {
                $ManagmentController->ControllerManagmentCargaVideosSalud();
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;

        case 'CargandoVideosSalud':
            if (!empty($_SESSION['managment'])) {
                if (isset($_POST['btnUploadVideoSalud'])) {
                    $ManagmentController->ControllerCargandoVideos($_POST['NombreVideoDeSalud'], $_FILES['VideoSalud']['tmp_name'], $_FILES['VideoSalud']['name'], $_FILES['VideoSalud']['size'], $_FILES['VideoSalud']['type'], 'videosdesalud', 'app/views/assets/videos/videos_de_salud/');
                    header('Location:./CargaVideosSalud');
                }
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;



            //Modulo Editar o Eliminar Videos de Salud
        case 'EliminarEditarVideosSalud':
            if (!empty($_SESSION['managment'])) {
                $ManagmentController->ControllerManagmentEditarEliminarVideoSalud();
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;

            //Recibiendo ID para Eliminar o Editar Videos de Salud
        case 'ProcesoVideosSalud':
            if (!empty($_POST['btnEditar']) && $_POST['btnEditar'] == 'Editar') {
                $ManagmentController->ControllerManagmentProcesoEditarVideoSalud($_POST['id'], $_POST['EditarNombreVideos']); // ingresar id  si aplica para Editar
                header('Location:./EliminarEditarVideosSalud');
            } elseif (!empty($_POST['btnEliminar']) && $_POST['btnEliminar'] == 'Eliminar') {
                $ManagmentController->ControllerManagmentProcesoEliminarVideoSalud($_POST['id']);  // ingresar id  si aplica para Eliminar
                header('Location:./EliminarEditarVideosSalud');
            }
            break;



            //Modulo Editar o Eliminar Videos de Vida
        case 'EliminarEditarVideosVida':
            if (!empty($_SESSION['managment'])) {
                $ManagmentController->ControllerManagmentEditarEliminarVideoVida();
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;

            //Recibiendo ID para Eliminar o Editar Videos de Vida
        case 'ProcesoVideosVida':
            switch ($_POST['btnAnico']) {
                case 'Editar':
                    $ManagmentController->ControllerManagmentProcesoEditarVideoVida($_POST['id'], $_POST['nombreanico'], 'videosanico');
                    header('Location:./EliminarEditarVideosVida');
                    break;
                case 'Eliminar':
                    $ManagmentController->ControllerManagmentProcesoEliminarVideoVida($_POST['id'], 'videosanico');
                    header('Location:./EliminarEditarVideosVida');
                    break;
                default:
                    header('Location:./EliminarEditarVideosVida');
                    break;
            }
            switch ($_POST['btnAmeritas']) {
                case 'Editar':
                    $ManagmentController->ControllerManagmentProcesoEditarVideoVida($_POST['id'], $_POST['nombreameritas'], 'videosameritas');
                    header('Location:./EliminarEditarVideosVida');
                    break;
                case 'Eliminar':
                    $ManagmentController->ControllerManagmentProcesoEliminarVideoVida($_POST['id'], 'videosameritas');
                    header('Location:./EliminarEditarVideosVida');
                    break;
                default:
                    header('Location:./EliminarEditarVideosVida');
                    break;
            }


            switch ($_POST['btnNationalLife']) {
                case 'Editar':
                    $ManagmentController->ControllerManagmentProcesoEditarVideoVida($_POST['id'], $_POST['nombrenationallife'], 'videosnationallife');
                    header('Location:./EliminarEditarVideosVida');
                    break;
                case 'Eliminar':
                    $ManagmentController->ControllerManagmentProcesoEliminarVideoVida($_POST['id'], 'videosnationallife');
                    header('Location:./EliminarEditarVideosVida');
                    break;
                default:
                    header('Location:./EliminarEditarVideosVida');
                    break;
            }
            break;

            //Modulo Agregar Eventos
        case 'Eventos':
            if (!empty($_SESSION['managment'])) {
                $ManagmentController->ControllerManagmentFormularioEventos();
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;

            //Modulo Crear Paginas
        case 'CrearPaginas':
            if (!empty($_SESSION['managment'])) {
                $ManagmentController->ControllerManagmentCrearPagina();
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;

            //Proceso para Crear Pagina, valida si el archivo existe, si no existe lo Crea de lo contrario llama el Error del controller
        case 'ProcesoCrearPagina':
            if (!empty($_SESSION['managment'])) {
                if (!file_exists('app/views/pages/AgentesPages/' . $_POST['NombrePagina'] . '.php')) {
                    $ManagmentController->ControllerManagmentProcesoCrearPagina($_POST['NombrePagina'], $_POST['Nombre'], $_POST['Email'], $_POST['Telefono'], $_FILES['ImagenAgente']['tmp_name'], $_FILES['ImagenAgente']['name']);
                    $NombrePagina = $_POST['NombrePagina'];
                    header("Location:$NombrePagina");
                } else {
                    $ManagmentController->ControllerManagmentProcesoCrearPagina(null, null, null, null, null, null, null);
                }
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;

            //Proceso Editar o Eliminar Pagina
        case 'ProcesoEditarEliminarPagina':
            if (!empty($_SESSION['managment'])) {



                if (isset($_POST['btnEditarEliminar']) && $_POST['btnEditarEliminar'] == 'Editar') {
                    $ManagmentController->ControllerManagerEditarEliminarPagina($_POST['id'], $_POST['Nombre'], $_POST['btnEditarEliminar']);
                    header('Location:./CrearPaginas');
                }elseif(isset($_POST['btnEditarEliminar']) && $_POST['btnEditarEliminar'] == 'Eliminar') {
                    $ManagmentController->ControllerManagerEditarEliminarPagina($_POST['id'], null, $_POST['btnEditarEliminar']);
                    header('Location:./CrearPaginas');
                }
                //if (!empty($_POST['btnEditarEliminar']) && $_POST['btnEditarEliminar'] == 'Editar') {
                //    $ManagmentController->ControllerManagerEditarEliminarPagina($_POST['id'], $_POST['Nombre']);
                //} elseif (!empty($_POST['btnEditarEliminar']) && $_POST['btnEditarEliminar'] == 'Eliminar') {
                //    $ManagmentController->ControllerManagerEditarEliminarPagina($_POST['id'], null);
                //}



            } else {


                $ManagmentController->ControllerManagmentLogin();
            }
            break;



        default:
            if (!isset($_GET['pages']) && empty($_GET['managment'])) {
                $controller->ControllerInicio();
            }
            break;
    }




















    //(==============================================================================================)
    //(==============================================================================================)
    //Controller de Agentes llamados dinamicamente con la condicion de si existe traigalo o si no, error
    require_once 'app/controllers/ControllerAgentes.php';
    $Agente = new ControllerAgentes();

    $Valor = $_GET['agentes'];

    switch (isset($_GET['agentes']) && $_GET['agentes'] == $Valor) {
        case $Valor:
            $Agente->Controller($_GET['agentes']);
            break;

        default:
            if (!isset($_GET['pages']) && empty($_GET['managment'])) {
                $controller->ControllerInicio();
            }
            break;
    }
    ?>
