<?php
require_once 'Conexion.php';
require_once 'SubidaArchivos.php';
require_once 'crud.php';
class CreadorPaginas
{
    private function Conexion()
    {
        $conexion = new Conexion();
        return $conexion->EstablecerConexion();
    }
                                                                                                                                    /*, $id*/
    public function CrearPagina($url, $NombreArchivo, $Nombre,$Descripcion,$Email, $whatsapp,$Telefono, $urlImagen, $NombreImgTmp, $NombreImg, $NombrePagina, $Instagram, $Facebook, $urlCotizador)
    {

        //insertando Pagina en la Base de datos
        $this->Conexion()->query("INSERT INTO CrearPagina(Titulo, Nombre, URL, Email) VALUES('$NombreArchivo','$Nombre','$url','$Email');");
        $Read = new crud();

        //Consultando Id en la base de datos
        $consulta = $Read->Read("SELECT id FROM CrearPagina ORDER BY id DESC LIMIT 1");
        $rows = mysqli_fetch_assoc($consulta);


        //Subiendo Imagen y insertando en la base de datos en ese respectivo orden
        $SubiendoImagen = new SubidaArchivos(null, null, null, null, null, null);
        $SubiendoImagen->SubidaImagenes($urlImagen, $NombreImgTmp, $NombreImg, $NombrePagina, $rows['id']);



        //seleccionando la imagen
        $Consulta = mysqli_query($this->Conexion(), "SELECT URL, Nombre FROM ImagenAgente WHERE NombrePagina = '$NombreArchivo'");
        $rows = mysqli_fetch_assoc($Consulta);
        $URL = $rows['URL'] . $rows['Nombre'];

        
        //String del HTML a Generar
        $contenido = "
<div class=\"container-fluid\" id=\"Inicio\">
    <div class=\"row\">
        <div class=\"container-fluid ImagenCaroucelFondo ImagenFija\"><br><br>
            <div class=\"row\">
                <div class=\"col-12 col-sm-12 col-md-1 col-lg-1\"></div>
                <div class=\"col-12 col-sm-12 col-md-10 col-lg-10\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-6 col-md-6 col-lg-6 text text-center RadioDeBordes ColorSecundarioTranslucido\">
                            <div class=\"container text-white\"><br><br><br><br><br>
                                <div class=\"row\">
                                    <h1>¡Somos expertos en seguros!</h1>
                                    <h3>Protección completa para toda su familia, empleados, activos y mucho más</h3>
                                </div><br>
                                <div class=\"row\">
                                    <h3>Descubra por qué más de 32,000 clientes en Estados Unidos eligieron Select Insurance.</h3>
                                </div><br><br>
                                <div class=\"row\">
                                    <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
                                        <div class=\"carousel-inner\">
                                            <div class=\"carousel-item active\">
                                                <h4>Ver testimonios</h4>
                                            </div>
                                            <div class=\"carousel-item\">
                                                <h4>Sea parte de nuestra familia</h4>
                                            </div>
                                            <div class=\"carousel-item\">
                                                <h4>No olvides Crear la cotizacion</h4>
                                            </div>
                                        </div>
                                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
                                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"visually-hidden\">Previous</span>
                                        </button>
                                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
                                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"visually-hidden\">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-6 col-md-6 col-lg-6 RadioDeBordes ColorPrincipalTranslucido\">
                            <div class=\"container\"><br><br>
                                <div class=\"row\">
                                    <h3 class=\"text text-center text-white\"><b>¡Sea parte de nuestra familia!</b></h3>
                                    <h4 class=\"text text-center text-white\">Diligencie el formulario a continuación y uno de nuestros agentes se pondrá en contacto brevemente.</h4>
                                </div>
                                <form action=\"./$NombrePagina\" method=\"post\">
                                    <div class=\"row\">
                                        <div class=\"col-12 col-sm-12 col-md-6 col-lg-6\">
                                            <label for=\"nombre\" class=\"text-white\">Nombre: <label class=\"text text-danger\">*</label></label>
                                            <input type=\"text\" name=\"nombre\" id=\"nombre\" class=\"form-control form-control-lg\" required=\"required\" placeholder=\"Ingrese Nombre\"><br>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-6 col-lg-6\">
                                            <label for=\"apellido\" class=\"text-white\">Apellido: <label class=\"text text-danger\">*</label></label>
                                            <input type=\"text\" name=\"apellido\" id=\"apellido\" class=\"form-control form-control-lg\" required=\"required\" placeholder=\"Ingrese Apellido\"><br>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12\">
                                            <label for=\"correo\" class=\"text-white\">Correo: <label class=\"text text-danger\">*</label></label>
                                            <input type=\"email\" name=\"correo\" id=\"correo\" class=\"form-control form-control-lg\" required=\"required\" placeholder=\"Ingrese Correo\"><br>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12\">
                                            <label for=\"telefono\" class=\"text-white\">Telefono: <label class=\"text text-danger\">*</label></label>
                                            <input type=\"text\" name=\"telefono\" id=\"telefono\" class=\"form-control form-control-lg\" required=\"required\" placeholder=\"Ingrese Telefono\"><br>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12\">
                                            <label for=\"estado\" class=\"text-white\">Estado: <label class=\"text text-danger\">*</label></label>
                                            <select name=\"estado\" class=\"form-select form-select-lg\" id=\"estado\">
                                                <option value=\"Alabama\">Alabama</option>
                                                <option value=\"Alaska\">Alaska</option>
                                                <option value=\"Arizona\">Arizona</option>
                                                <option value=\"Arkansas\">Arkansas</option>
                                                <option value=\"California\">California</option>
                                                <option value=\"Carolina del Norte\">Carolina del Norte</option>
                                                <option value=\"Carolina del Sur\">Carolina del Sur</option>
                                                <option value=\"Colorado\">Colorado</option>
                                                <option value=\"Connecticut\">Connecticut</option>
                                                <option value=\"Dakota del Norte\">Dakota del Norte</option>
                                                <option value=\"Dakota del Sur\">Dakota del Sur</option>
                                                <option value=\"Delaware\">Delaware</option>
                                                <option value=\"Florida\">Florida</option>
                                                <option value=\"Georgia\">Georgia</option>
                                                <option value=\"Hawái9​\">Hawái9​</option>
                                                <option value=\"Idaho\">Idaho</option>
                                                <option value=\"Illinois\">Illinois</option>
                                                <option value=\"Indiana\">Indiana</option>
                                                <option value=\"Iowa\">Iowa</option>
                                                <option value=\"Kansas\">Kansas</option>
                                                <option value=\"Kentucky\">Kentucky</option>
                                                <option value=\"Luisiana10​\">Luisiana10​</option>
                                                <option value=\"Maine\">Maine</option>
                                                <option value=\"Maryland\">Maryland</option>
                                                <option value=\"Massachusetts\">Massachusetts</option>
                                                <option value=\"Míchigan13​\">Míchigan13​</option>
                                                <option value=\"Minnesota\">Minnesota</option>
                                                <option value=\"Misisipi14​\">Misisipi14​</option>
                                                <option value=\"Misuri15​\">Misuri15​</option>
                                                <option value=\"Montana\">Montana</option>
                                                <option value=\"Nebraska\">Nebraska</option>
                                                <option value=\"Nevada\">Nevada</option>
                                                <option value=\"Nueva Jersey17​\">Nueva Jersey17​</option>
                                                <option value=\"Nueva York19​\">Nueva York19​</option>
                                                <option value=\"Nuevo Hampshire20​\">Nuevo Hampshire20​</option>
                                                <option value=\"Nuevo México22​\">Nuevo México22​</option>
                                                <option value=\"Ohio\">Ohio</option>
                                                <option value=\"Oklahoma\">Oklahoma</option>
                                                <option value=\"Oregón24​\">Oregón24​</option>
                                                <option value=\"Pensilvania25​\">Pensilvania25​</option>
                                                <option value=\"Rhode Island\">Rhode Island</option>
                                                <option value=\"Tennessee\">Tennessee</option>
                                                <option value=\"Texas27​\">Texas27​</option>
                                                <option value=\"Utah\">Utah</option>
                                                <option value=\"Vermont\">Vermont</option>
                                                <option value=\"Virginia\">Virginia</option>
                                                <option value=\"Virginia Occidental\">Virginia Occidental</option>
                                                <option value=\"Washington\">Washington</option>
                                                <option value=\"Wisconsin\">Wisconsin</option>
                                                <option value=\"Wyoming\">Wyoming</option>
                                            </select><br>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12\">
                                            <label for=\"servicio\" class=\"text-white\">Servicio de su Interes: <label class=\"text text-danger\">*</label></label>
                                            <select name=\"servicio\" id=\"servicio\" class=\"form-select form-select-lg\">
                                                <option selected>Seleccione una opcion</option>
                                                <option value=\"vida\">Seguro de vida</option>
                                                <option value=\"familiar\">Seguro Familiar</option>
                                                <option value=\"salud\">Seguro de Salud</option>
                                                <option value=\"compañias\">Seguro de Compañias</option>
                                                <option value=\"planes de retiro\">Planes de Retiro</option>
                                                <option value=\"soluciones financieras\">Soluciones Financieras</option>
                                            </select><br>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12\">
                                            <p>
                                                <input type=\"submit\" value=\"Enviar\" name=\"btnform1enviar\" class=\"btn btn-success btn-lg\">
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-sm-12 col-md-1 col-lg-1\"></div>
            </div><br><br><br>
        </div>
    </div>
</div><br><br><br>
<?php
//Cotizador
?>
<div class=\"container\" id=\"Cotizador\">
    <h2 class=\"text-center ColorTextoOscuro\">Cotiza con su agente personalizado <b>$Nombre</b></h2>
</div>
<div class=\"container\" id=\"Servicios\">
    <div class=\"row shadow-lg p-3 mb-5 ColorPrincipal RadioDeBordes\">
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-4\">
            <img class=\"img-fluid RadioDeBordes\" src=\"app/views/assets/img/IMGCOTIZADORSALUD.webp\">
            <center>
                <a type=\"button\" class=\"btn btn-primary btn-lg\" href=\"$urlCotizador\" target=\"__blank\">
                    Cotizacion Salud
                </a>
            </center>
        </div>
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-4\">
            <blockquote class=\"text text-white\" style=\"text-align: justify\">
                <h4 class=\"text-center\">
                    OBTENGA UNA COTIZACIÓN DE SEGURO DE VIDA Y SALUD
                </h4>
                <p class=\"fs-5\">
                    Contamos con el mejor acompañamiento en cuanto a seguros de vida y salud,
                    ofrecemos los mejores servicios para beneficios de nuestros clientes.
                    Ahorre tiempo buscando la mejor cotización de seguro de vida y de salud en línea
                    en nuestro sitio. ¡Obtenga una cotización de seguro instantánea y
                    ahórrese tiempo y dinero! Nuestro servicio instantáneo de cotización
                    de seguros le permite acceder directamente a pólizas de seguro de vida y de salud
                    de bajo costo de compañías de seguros de vida de alta calificación en
                    todo el país.
                </p>
            </blockquote>
        </div>
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 float-md-start\">
            <img class=\"img-fluid RadioDeBordes\" src=\"app/views/assets/img/IMGCOTIZADORVIDA.webp\" alt=\"Select Insurance Cotizador\" title=\"Cotiza tu seguro\" /><br />
            <link href=\"https://wq.ixn.tech/css/reset.css\" rel=\"stylesheet\" type=\"text/css\" />
            <script type=\"text/javascript\">
                window.IXN_QUOTER_CONFIG = {
                    id: \"fdb29d59-520c-455c-948a-b51b7defea14\",
                };
            </script>
            <!-- Button trigger modal -->
            <center>
                <button type=\"button\" class=\"btn btn-primary btn-lg\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                    Cotizacion Vida
                </button>
            </center>
            <!-- Modal -->
            <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Modal title</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\" id=\"ixn-website-quoter\">
                            <div id=\"ixn-website-quoter\"></div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <script type=\"text/javascript\" src=\"https://wq.ixn.tech/js/website_quoter.widget.js\"></script>
        </div>
    </div>
</div>
</div><br><br><br>
<div class=\"container-fluid\">
    <div class=\"row text ColorTextoOscuro text-center\">
        <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\">
            <label><span class=\"fas fa-file-medical fa-4x\"></span></label>
            <p>
            <h4>Aplicación Simple</h4>
            </p>
            <p>
                Aplica online y el resto lo hacemos nosotros por usted.
            </p>
        </div>
        <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\">
            <label><span class=\"fas fa-piggy-bank fa-4x\"></span></label>
            <p>
            <h4>Adaptado a su presupuesto</h4>
            </p>
            <p>
                ¡Obtenga $ 250,000 de cobertura de seguro de vida a término por tan solo $ 20 por mes!
            </p>
        </div>
        <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\">
            <label><span class=\"far fa-clock fa-4x\"></span></label>
            <p>
            <h4>1 dia de activación</h4>
            </p>
            <p>
                Cobertura inmediata, rapido y eficaz.
            </p>
        </div>
        <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\">
            <label><span class=\"far fa-calendar-alt fa-4x\"></span></label>
            <p>
            <h4>Disponibilidad 24 / 7 / 365</h4>
            </p>
            <p>
                Inscríbase en cualquier momento durante el año.
            </p>
        </div>
    </div><br><br><br>
</div>
<?php 
//Agente de Seguros
?>
<div class=\"container\">
    <div class=\"row ColorPrincipal text-center RadioDeBordes\">
        <div class=\"col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6\" style=\"text-align: justify;\">
            <h2 class=\"text-center\">Descripcion</h2>
            <p>
            $Descripcion
            </p>
        </div>
        <div class=\"col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6\">
            <img src=\"$URL\" class=\"RadioDeBordes img-fluid my-4\" alt=\"$Nombre\" title=\"Agente de Seguros $Nombre\">
        </div>
    </div>
</div>
<div class=\"container-fluid my-4\">
    <div class=\"row text ColorTextoOscuro text-center\">
        <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\">
            <label><span class=\"fas fa-file-medical fa-4x\"></span></label>
            <p>
            <h4>Aplicación Simple</h4>
            </p>
            <p>
                Aplica online y el resto lo hacemos nosotros por usted.
            </p>
        </div>
        <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\">
            <label><span class=\"fas fa-piggy-bank fa-4x\"></span></label>
            <p>
            <h4>Adaptado a su presupuesto</h4>
            </p>
            <p>
                ¡Obtenga $ 250,000 de cobertura de seguro de vida a término por tan solo $ 20 por mes!
            </p>
        </div>
        <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\">
            <label><span class=\"far fa-clock fa-4x\"></span></label>
            <p>
            <h4>1 dia de activación</h4>
            </p>
            <p>
                Cobertura inmediata, rapido y eficaz.
            </p>
        </div>
        <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\">
            <label><span class=\"far fa-calendar-alt fa-4x\"></span></label>
            <p>
            <h4>Disponibilidad 24 / 7 / 365</h4>
            </p>
            <p>
                Inscríbase en cualquier momento durante el año.
            </p>
        </div>
    </div><br><br><br>
</div>\
<?php //Testimonios 
?>
<div class=\"container-fluid text-center ColorTextoOscuro\"><br><br>
    <div class=\"row\">
        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12\">
            <h2>Acerca de Nosotros</h2>
            <hr>
        </div>
    </div><br><br>
    <div class=\"row\">
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-4\">
            <h3>Nuestro Objetivo</h3>
            <p style=\"text-align: justify;\">
                Transformamos riesgos en soluciones de protección para familias, empleados o activos, mediante herramientas tecnológicas que le brinden a nuestros clientes la facilidad de analizar, manejar y obtener soluciones que ayuden a minimizar sus riesgos.
            </p>
        </div>
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-4\">
            <h3>A futuro</h3>
            <p style=\"text-align: justify;\">
                Seremos intermediarios líderes en soluciones de protección, por medios digitales facilitando la suscripción, comprensión y atención tanto de nuestro clientes al momento de obtener una solución, como al momento de un siniestro.
            </p>
        </div>
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-4\">
            <h3>Nuestros Principios</h3>
            <p style=\"text-align: justify;\">
                Confianza, respaldo, acompañamiento, actitud permanente de servicio, ética como pilar de nuestras actividades, respeto por los grupos de personas con los que interactuamos y por nosotros mismos.
            </p>
        </div>
    </div><br><br>
    <div class=\"row\">
        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12\">
            <p style=\"font-size: xx-small; text-align:justify;\">
                Para asegurarnos de que las consultas de los consumidores se manejen de manera rápida,
                cortés y precisa, algunas de las llamadas telefónicas entre usted y nosotros o
                cualquiera de nuestros afiliados, agentes, cesionarios y proveedores de servicios,
                pueden ser monitoreadas y registradas por nosotros y cualquiera de nuestros afiliados,
                agentes , asigna y proveedores de servicios, para mejorar el servicio para usted.
                Usted da su consentimiento para este seguimiento y grabación. Usted acepta que Select
                Insurance puede realizar llamadas y / o enviarle mensajes de texto de vez en cuando a
                cualquier número de teléfono asociado con su cuenta, incluidos los números de teléfonos
                inalámbricos que podrían generarle cargos. La manera en que se le hacen estas llamadas o
                mensajes de texto puede incluir, entre otros, el uso de mensajes de voz pre-grabados /
                artificiales y / o el sistema de marcación telefónica automática. Además, acepta que Select
                Insurance puede enviarle correos electrónicos a cualquier dirección de correo
                electrónico que nos proporcione o utilizar otros medios electrónicos de comunicación en
                la medida que lo permita la ley. El consentimiento puede ser revocado en cualquier momento y
                por cualquier medio razonable. Todos los derechos reservados. www.selectinsurance.info
            </p>
        </div>
    </div>
</div><br><br>
<div class=\"container-fluid ColorPrincipal text-white\" id=\"Contacto\">
    <div class=\"container-fluid\">
        <hr>
        <div class=\"row\">
            <div class=\"col-12 col-sm-6 col-md-3 col-lg-3 text-center\">
                <img src=\"app/views/assets/img/LogoWhite.webp\" alt=\"Select Insurance\" height=\"80px\" title=\"Select Insurance\"><br><br>
            </div>
            <div class=\"col-12 col-md-1 col-lg-1\"></div>
            <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\"><br><br>
                <p><b>CONTÁCTENOS</b></p>
            </div>
            <div class=\"col-12 col-sm-6 col-md-2 col-lg-2\"><br><br>
                <p><b>ENLACES</b></p>
            </div>
            <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\"><br><br>
                <p><b>ZONA DE AFILIADOS</b></p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 col-sm-6 col-md-3 col-lg-3 text-center\">
                <p class=\"fs-7\" style=\"text-align: justify;\">
                    Select Insurance And Financial
                    Services nace en el año 2009 teniendo
                    en cuenta la necesidad de las personas
                    como una compañía dedicada a la venta y el
                    asesoramiento de seguros de vida y hoy es
                    una compañía especializada en aseguramiento, plan
                    de retiro y planes de inversión.
                </p>
            </div>
            <div class=\"col-12 col-md-1 col-lg-1\"></div>
            <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\">

                <p class=\"lh-lg\">
                    Whatsapp: $whatsapp <br>

                    Telefono: <a href=\"tel:$Telefono\" title=\"Telefono\">$Telefono</a> <br>

                    Email: <a href=\"mailto:$Email\">$Email</a> <br>

                    Dirección: 7791 NW 46 ST. SUITE 112 DORAL, FL 33166 <br>

                    Redes: <p><a href=\"$Instagram\" title=\"Mi Instagram\" target=\"__blank\"><i class=\"fab fa-instagram fa-2x\"></i></a> <a href=\"$Facebook\" title=\"Mi Facebook\" target=\"__blank\"><i class=\"fab fa-facebook fa-2x\"></i></a></p> <br>
                </p>
            </div>
            <div class=\"col-12 col-sm-6 col-md-2 col-lg-2\">
                <p class=\"lh-lg\">
                    Cotizador Online <br>

                    Nuestros Servicios <br>

                    Testimonios <br>

                    Contacto <br>
                    <a href=\"./login\" style=\"text-decoration: none;\" target=\"__blank\">Administracion</a>
                </p>
            </div>
            <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\">
                <p class=\"lh-lg\">
                    FAQ <br>

                    Blog <br>

                    Crm <br>

                    Galería <br>
                </p>
            </div>
        </div>
        <h6 class=\"text-end\">Copyright © <?php echo date('M') . ' ' . date('Y'); ?> Select Insurance.</h6>
    </div>
</div>
<blockquote>
	<a href=\"https://api.whatsapp.com/send?phone=$whatsapp\" target=\"__blank\">
		<p>
			<span class=\"fab fa-whatsapp fa-3x btn-wsp\"></span>
			<span class=\"fondo-text-wsp\">
				<blockquote class=\"texto-wsp\">
					<h2><b>Chatea</b></h2><br>Con nosotros
				</blockquote>
			</span>
		</p>
	</a>
</blockquote>
    ";


        file_put_contents($url . $NombreArchivo . '.php', $contenido);
    }
}



//$nombre = strip_tags($_POST['nombre']);
//$apellido = strip_tags($_POST['apellido]);
//
//$contenido = \"<html><body><h1>Datos</h1><p>$nombre</p><p>$apellido</p></body></html>\";
//
//file_put_contents('datos.html', $contenido);
