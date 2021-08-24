<?php
require_once 'app/views/assets/header.php';
require_once 'app/models/autoload.php';

class ControllerManagment extends Pather
{
    //(==============================================================================================)
    //(==============================================================================================)
    //Controlador de login del Managment
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


    //(==============================================================================================)
    //(==============================================================================================)
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



    //(==============================================================================================)
    //(==============================================================================================)
    //Controlador para carga de videos de Salud
    public function ControllerManagmentCargaVideosSalud()
    {
        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/managment/modulos/CargaVideosSalud.php';
    }



    //(==============================================================================================)
    //(==============================================================================================)
    //Controlador para editar o eliminar Videos de Salud
    public function ControllerManagmentEditarEliminarVideoSalud()
    {
        require_once 'app/views/assets/NavAgente.php';
        $Select = "SELECT * FROM VideosDeSalud";
        $Query = new crud();
        require_once 'app/views/pages/managment/modulos/EliminarEditarVideosSalud.php';
    }

    //Controlador para hacer update a videos de Salud
    public function ControllerManagmentProcesoEditarVideoSalud($id, $nombre)
    {
        foreach ($id as $IdVideo) {
            $Update = "UPDATE VideosDeSalud SET Nombre = '$nombre' WHERE idVideo = '$IdVideo'";
            $Query = new crud();
            $Query->Update($Update);
        }
    }

    //Controlador para hacer Delete a Videos de Salud
    public function ControllerManagmentProcesoEliminarVideoSalud($id)
    {

        foreach ($id as $IdVideo) {
            $Select = "SELECT URL FROM VideosDeSalud WHERE idVideo = '$IdVideo'";
            $Delete = "DELETE FROM VideosDeSalud WHERE idVideo = '$IdVideo'";
            $Query = new crud();
            $resultado = $Query->Read($Select);
            $Query->Delete($Delete);

            $row = mysqli_fetch_assoc($resultado);
            $Eliminar = new EliminarArchivos($row['URL']);
            $Eliminar->Eliminar();
        }
    }

    //(==============================================================================================)
    //(==============================================================================================)
    //Controlador para editar o eliminar Videos de Vida
    public function ControllerManagmentEditarEliminarVideoVida()
    {
        require_once 'app/views/assets/NavAgente.php';




        //Consulta de las 3 tablas dinamicas
        $SelectAnico = "SELECT * FROM VideosAnico";
        $SelectAmeritas = "SELECT * FROM VideosAmeritas";
        $SelectNationalLife = "SELECT * FROM VideosNationalLife";


        //Ejecutando los 3 ciclos
        $query = new crud();
        $Anico = $query->Read($SelectAnico);
        $Ameritas = $query->Read($SelectAmeritas);
        $NationalLife = $query->Read($SelectNationalLife);
        require_once 'app/views/pages/managment/modulos/EliminarEditarVideosVida.php';
    }


    //Controlador para hacer update a videos de Vida
    public function ControllerManagmentProcesoEditarVideoVida($Array, $nombre, $table)
    {
        foreach ($Array as $id) {
            $Update = "UPDATE $table SET Nombre = '$nombre' WHERE idVideo = '$id'";
            $query = new crud();
            $query->Update($Update);
        }
    }


    //Controlador para hacer Delete a Videos de Vida
    public function ControllerManagmentProcesoEliminarVideoVida($Array, $table)
    {
        foreach ($Array as $id) {
            $Select  = "SELECT URL FROM $table WHERE idVideo = '$id'";
            $Delete = "DELETE FROM $table WHERE idVideo = '$id'";

            $query = new crud();
            $Consulta = $query->Read($Select);
            $rows = mysqli_fetch_assoc($Consulta);
            $Eliminar = new EliminarArchivos($rows['URL']);
            $Eliminar->Eliminar();
            $query->Delete($Delete);
        }
    }

    //(==============================================================================================)
    //(==============================================================================================)
    //Formulario para Agregar Eventos a la Base de datos
    public function ControllerManagmentFormularioEventos()
    {
        require_once 'app/views/assets/NavAgente.php';

        require_once 'app/views/pages/managment/modulos/Eventos.php';

        if (isset($_POST['btnAñadirEventos'])) {
            $Name =  $_POST['name'];
            $Date = date_format(date_create($_POST['date']), 'm-d-y'); //Convirtiendo la fecha en un string admintido en el calendario
            $Description = $_POST['description'];
            $Type = $_POST['type'];
            $EveryYear = boolval($_POST['everyYear']); //Convirtiendo String en booleano
            $BadGe = $_POST['badge'];
            $Color = $_POST['color'];
            $query = "INSERT INTO Calendario(
                name,
                date, 
                description, 
                type, 
                everyYear, 
                badge, 
                color
                )
                VALUES(
                    '$Name',
                    '$Date',
                    '$Description',
                    '$Type',
                    '$EveryYear',
                    '$BadGe',
                    '$Color'
                );";
            $Insert = new Eventos();
            $mensaje = $Insert->IngresarEvento($query);
        }
    }


    //(==============================================================================================)
    //(==============================================================================================)
    //Controller para Crear Paginas
    public function ControllerManagmentCrearPagina()
    {
        $crud = new crud();

        //Consultando en la base de Datos
        $ConsultaCrearPagina = $crud->Read("SELECT * FROM CrearPagina");
        $ConsultaImagenAgente = $crud->Read("SELECT * FROM ImagenAgente");


        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/managment/modulos/CrearPaginaAgente.php';
    }

    //Controller para Eliminar o Editar Paginas
    public function ControllerManagerEditarEliminarPagina($Array, $nombre, $TipoBoton)
    {
        foreach ($Array as $id) {
            $crud = new crud();
            if ($TipoBoton == 'Editar') {

                //Consultando en base de datos el titulo de la tabla crearpagina para poder realizar el cambio de nombre del archivo
                $crearpagina = $crud->Read("SELECT Titulo, URL FROM CrearPagina WHERE id = '$id'");
                $rows = mysqli_fetch_assoc($crearpagina);
                $Archivo = fopen($rows['URL'] . $rows['Titulo'] . '.php', 'r');
                fclose($Archivo);
                rename($rows['URL'] . $rows['Titulo'] . '.php', $rows['URL'] . $nombre . '.php');



                //Haciendo ambos updates
                $crud->Update("UPDATE CrearPagina SET Titulo = '$nombre' WHERE id = '$id'");
                $crud->Update("UPDATE ImagenAgente SET NombrePagina = '$nombre' WHERE idPagina = '$id'");
            } elseif ($TipoBoton == 'Eliminar') {



                $crearpagina = $crud->Read("SELECT Titulo, URL FROM CrearPagina WHERE id = '$id'");
                $imagenagente = $crud->Read("SELECT Nombre, URL FROM ImagenAgente WHERE idPagina = '$id'");

                $RowPagina = mysqli_fetch_assoc($crearpagina);
                $RowImagen = mysqli_fetch_assoc($imagenagente);

                //require_once 'app/views/prueba.php';
                $EliminarPagina = new EliminarArchivos($RowPagina['URL'] . $RowPagina['Titulo'] . '.php');
                $EliminarImagen = new EliminarArchivos($RowImagen['URL'] . $RowImagen['Nombre']);

                $EliminarPagina->Eliminar();
                $EliminarImagen->Eliminar();


                $crud->Delete("DELETE FROM CrearPagina WHERE id = '$id'");
                $crud->Delete("DELETE FROM ImagenAgente WHERE idPagina = '$id'");
            }

            //$mensaje = $TipoBoton;
            //require_once 'app/views/prueba.php';
        }
    }




    //Controller para Crear Paginas
    public function ControllerManagmentProcesoCrearPagina($NombrePagina, $Nombre,$Descripcion, $Email, $whatsapp,$Telefono, $NombreImgTmp, $NombreImg, $Instagram, $Facebook, $urlCotizador) //NombreArchivo, Nombre Agente, Nombre Imagen Temporal, Nombre Imagen
    {
        if (isset($_POST['btnCrearPagina']) && !file_exists('app/views/pages/AgentesPages/' . $NombrePagina . '.php')) {

            //Subiendo Imagen
            $SubiendoImagen = new SubidaArchivos(null, null, null, null, null, null);


            //Creando paginas en el directorio AgentesPages                                                                                                                                      
            $CreadorPaginas = new CreadorPaginas();
            $CreadorPaginas->CrearPagina('app/views/pages/AgentesPages/', $NombrePagina, $Nombre,$Descripcion,$Email, $whatsapp,$Telefono, 'app/views/assets/img/ImagenesAgentes/', $NombreImgTmp, $NombreImg, $NombrePagina, $Instagram, $Facebook, $urlCotizador);
        } else {
            require_once 'app/views/assets/NavAgente.php';
            require_once 'app/views/mensajes/ErrorPaginaExistente.php';
        }
    }

    public function ControllerManagmentGeneradorQR()
    {
        require_once 'app/views/assets/NavAgente.php';

        if (isset($_POST['btnGenerarQR'])) {


            //Agregamos la libreria para genera códigos QR
            require_once 'app/models/phpqrcode/qrlib.php';

            //Declaramos una carpeta temporal para guardar la imagenes generadas
            $dir = 'QRGenerados/';

            //Si no existe la carpeta la creamos
            if (!file_exists($dir))
                mkdir($dir);

            //Declaramos la ruta y nombre del archivo a generar
            $filename = $dir . $_POST['NombreArchivo'].'.png';

            //Parametros de Condiguración

            $tamaño = 5; //Tamaño de Pixel
            $level = 'L'; //Precisión Baja
            $framSize = 3; //Tamaño en blanco
            $contenido = $_POST['ContenidoQR']; //Texto

            //Enviamos los parametros a la Función para generar código QR 
            QRcode::png($contenido, $filename, $level, $tamaño, $framSize);

        }
        require_once 'app/views/pages/managment/modulos/CreadorQR.php';
    }
}
require_once 'app/views/assets/footer.php';
