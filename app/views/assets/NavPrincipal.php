<nav class="sticky-top">
    <div class="shadow-lg navbar navbar-expand-lg ColorSecundario navbar-dark ColorPrincipal" id="nav-tab" role="tablist">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="nav navbar-nav">
                <a href="" class="nav-link" id="nav-Inicio-tab" data-bs-toggle="tab" data-bs-target="#nav-Inicio" role="tab" aria-controls="nav-Inicio">INICIO</a>
                <a href="" class="nav-link" id="nav-Eventos-tab" data-bs-toggle="tab" data-bs-target="#nav-Eventos" role="tab" aria-controls="nav-Eventos">EVENTOS</a>
                <a href="" class="nav-link" id="nav-Cotizador-tab" data-bs-toggle="tab" data-bs-target="#nav-Cotizador" role="tab" aria-controls="nav-Cotizador">COTIZADOR</a>
                <a href="" class="nav-link" id="nav-Servicios-tab" data-bs-toggle="tab" data-bs-target="#nav-Servicios" role="tab" aria-controls="nav-Servicios">SERVICIOS</a>
                <a href="" class="nav-link" id="nav-Testimonios-tab" data-bs-toggle="tab" data-bs-target="#nav-Testimonios" role="tab" aria-controls="nav-Testimonios">TESTIMONIOS</a>
                <a href="" class="nav-link" id="nav-Contacto-tab" data-bs-toggle="tab" data-bs-target="#nav-Contacto" role="tab" aria-controls="nav-Contacto">CONTACTO</a>
                <a href="" class="nav-link" id="nav-Agentes-tab" data-bs-toggle="tab" data-bs-target="#nav-Agentes" role="tab" aria-controls="nav-Agentes">AGENTES</a>
            </div>
        </div>
        <a class="navbar-brand d-flex"><img src="app\views\assets\img\LogoWhite.png" height="75"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade" id="nav-Inicio" role="tabpanel" aria-labelledby="nav-Inicio-tab">
        <div class="container-fluid ImagenBackGround ImagenFija">
            <div class="row">
                <img src="app\views\assets\img\banner\BANNER WEB FRONT2.png" style="border-radius: 50px;" class="img-fluid shadow mb-1" alt="Select Insurance" title="Select Insurance"><br><br>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-10 col-lg-10"><br><br>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 text text-center RadioDeBordes ColorSecundarioTranslucido">
                            <div class="container text-white"><br><br><br><br><br>
                                <div class="row">
                                    <h1>¡Somos expertos en seguros!</h1>
                                    <h3>Protección completa para toda su familia, empleados, activos y mucho más</h3>
                                </div><br>
                                <div class="row">
                                    <h3>Descubra por qué más de 32,000 clientes en Estados Unidos eligieron Select Insurance.</h3>
                                </div><br><br>
                                <div class="row">
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <h4>Ver testimonios</h4>
                                            </div>
                                            <div class="carousel-item">
                                                <h4>Sea parte de nuestra familia</h4>
                                            </div>
                                            <div class="carousel-item">
                                                <h4>No olvides Crear la cotizacion</h4>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 RadioDeBordes ColorPrincipalTranslucido">
                            <div class="container"><br><br>
                                <div class="row">
                                    <h3 class="text text-center text-white"><b>¡Sea parte de nuestra familia!</b></h3>
                                    <h4 class="text text-center text-white">Diligencie el formulario a continuación y uno de nuestros agentes se pondrá en contacto brevemente.</h4>
                                </div>
                                <form action="../SELECTINSURANCE/inicio" method="post">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <label for="nombre" class="text-white">Nombre: <label class="text text-danger">*</label></label>
                                            <input type="text" name="nombre" id="nombre" class="form-control form-control-lg" required="required" placeholder="Ingrese Nombre"><br>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <label for="apellido" class="text-white">Apellido: <label class="text text-danger">*</label></label>
                                            <input type="text" name="apellido" id="apellido" class="form-control form-control-lg" required="required" placeholder="Ingrese Apellido"><br>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <label for="correo" class="text-white">Correo: <label class="text text-danger">*</label></label>
                                            <input type="email" name="correo" id="correo" class="form-control form-control-lg" required="required" placeholder="Ingrese Correo"><br>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <label for="telefono" class="text-white">Telefono: <label class="text text-danger">*</label></label>
                                            <input type="text" name="telefono" id="telefono" class="form-control form-control-lg" required="required" placeholder="Ingrese Telefono"><br>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <label for="estado" class="text-white">Estado: <label class="text text-danger">*</label></label>
                                            <select name="estado" class="form-select form-select-lg" id="estado">
                                                <option value="Alabama">Alabama</option>
                                                <option value="Alaska">Alaska</option>
                                                <option value="Arizona">Arizona</option>
                                                <option value="Arkansas">Arkansas</option>
                                                <option value="California">California</option>
                                                <option value="Carolina del Norte">Carolina del Norte</option>
                                                <option value="Carolina del Sur">Carolina del Sur</option>
                                                <option value="Colorado">Colorado</option>
                                                <option value="Connecticut">Connecticut</option>
                                                <option value="Dakota del Norte">Dakota del Norte</option>
                                                <option value="Dakota del Sur">Dakota del Sur</option>
                                                <option value="Delaware">Delaware</option>
                                                <option value="Florida">Florida</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Hawái9​">Hawái9​</option>
                                                <option value="Idaho">Idaho</option>
                                                <option value="Illinois">Illinois</option>
                                                <option value="Indiana">Indiana</option>
                                                <option value="Iowa">Iowa</option>
                                                <option value="Kansas">Kansas</option>
                                                <option value="Kentucky">Kentucky</option>
                                                <option value="Luisiana10​">Luisiana10​</option>
                                                <option value="Maine">Maine</option>
                                                <option value="Maryland">Maryland</option>
                                                <option value="Massachusetts">Massachusetts</option>
                                                <option value="Míchigan13​">Míchigan13​</option>
                                                <option value="Minnesota">Minnesota</option>
                                                <option value="Misisipi14​">Misisipi14​</option>
                                                <option value="Misuri15​">Misuri15​</option>
                                                <option value="Montana">Montana</option>
                                                <option value="Nebraska">Nebraska</option>
                                                <option value="Nevada">Nevada</option>
                                                <option value="Nueva Jersey17​">Nueva Jersey17​</option>
                                                <option value="Nueva York19​">Nueva York19​</option>
                                                <option value="Nuevo Hampshire20​">Nuevo Hampshire20​</option>
                                                <option value="Nuevo México22​">Nuevo México22​</option>
                                                <option value="Ohio">Ohio</option>
                                                <option value="Oklahoma">Oklahoma</option>
                                                <option value="Oregón24​">Oregón24​</option>
                                                <option value="Pensilvania25​">Pensilvania25​</option>
                                                <option value="Rhode Island">Rhode Island</option>
                                                <option value="Tennessee">Tennessee</option>
                                                <option value="Texas27​">Texas27​</option>
                                                <option value="Utah">Utah</option>
                                                <option value="Vermont">Vermont</option>
                                                <option value="Virginia">Virginia</option>
                                                <option value="Virginia Occidental">Virginia Occidental</option>
                                                <option value="Washington">Washington</option>
                                                <option value="Wisconsin">Wisconsin</option>
                                                <option value="Wyoming">Wyoming</option>
                                            </select><br>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <label for="servicio" class="text-white">Servicio de su Interes: <label class="text text-danger">*</label></label>
                                            <select name="servicio" id="servicio" class="form-select form-select-lg">
                                                <option selected>Seleccione una opcion</option>
                                                <option value="vida">Seguro de vida</option>
                                                <option value="familiar">Seguro Familiar</option>
                                                <option value="salud">Seguro de Salud</option>
                                                <option value="compañias">Seguro de Compañias</option>
                                                <option value="planes de retiro">Planes de Retiro</option>
                                                <option value="soluciones financieras">Soluciones Financieras</option>
                                            </select><br>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <p>
                                                <input type="submit" value="Enviar" name="btnFormEnviar" class="btn btn-success btn-lg">
                                            </p>
                                            <?php
                                            if (isset($_SESSION['Mensaje'])) {
                                                require_once 'app/views/mensajes/viewmensajeregistroform1.php';
                                                unset($_SESSION['Mensaje']);
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
            </div><br><br><br>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-Eventos" role="tabpanel" aria-labelledby="nav-Eventos-tab">
        <div class="container-fluid">
            <h2 class="text-center ColorTextoOscuro">Eventos</h2>
            <hr class="ColorTextoOscuro"><br>
            <div class="row">
                <?php
                //Calendario
                ?>
                <div class="hero shadow p-3 mb-5    ">
                    <div id="calendar"></div>
                </div>
                <?php
                //echo json_encode($datos, JSON_PRETTY_PRINT);
                ?>
                <script>
                    $(document).ready(function() {
                        $('#calendar').evoCalendar({
                            /*  Configuraciones del calendario
                                Settings	            Type	    Default	        Description	                                        Options
                                theme	                string	    Default	        Define calendar's theme	                            Default, Midnight Blue, Orange Coral, Royal Navy
                                format	                string	    'mm/dd/yyyy'	Date format	                                        Date string format
                                titleFormat	string	    'MM yyyy'	Date            format for calendar title	                        Date string format
                                eventHeaderFormat	    string	    'MM d, yyyy'	Date format for calendar event's title	            Date string format
                                firstDayOfWeek	        number	    0	            Displayed first day of the week	                    0 (Sunday) - 6 (Saturday)
                                language	            string	    'en'	        Calendar's language	                                en, es, de, pt, fr, nl
                                todayHighlight	        boolean	    false	        Highlight today's date in calendar	                true, false
                                sidebarDisplayDefault	boolean	    true	        Set default visibility of sidebar	                true, false
                                sidebarToggler	        boolean	    true	        Display the button for toggling the sidebar	        true, false
                                eventDisplayDefault	    boolean	    true	        Set default visibility of event lists	            true, false
                                eventListToggler	    boolean	    true	        Display the button for toggling the event lists	    true, false
                                calendarEvents	        array	    null	        Defined events for calendar to show	                Array of events */
                            theme: "Royal Navy",
                            format: "mm-dd-yy",
                            language: "es",
                            calendarEvents: <?php echo json_encode($datos); ?>
                        })
                    })
                </script>
            </div>
        </div><br><br><br><br><br>
    </div>
    <div class="tab-pane fade" id="nav-Cotizador" role="tabpanel" aria-labelledby="nav-Cotizador-tab">
        <div class="container" id="Cotizador">
            <h2 class="text-center ColorTextoOscuro">Cotizador</h2>
            <hr class="ColorTextoOscuro"><br>
            <div class="row shadow-lg p-3 mb-5 ColorPrincipal RadioDeBordes">
                <div class="col-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="accordion" id="cotizacion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    COTIZADOR
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#cotizacion">
                                <div class="accordion-body">
                                    <script type="text/javascript">
                                        window.IXN_QUOTER_CONFIG = {
                                            id: "fdb29d59-520c-455c-948a-b51b7defea14"
                                        }
                                    </script>
                                    <div id="ixn-website-quoter"></div>
                                    <script type="text/javascript" src="https://wq.ixn.tech/js/website_quoter.widget.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <blockquote class="text text-white" style="text-align: justify;">
                        <h4 class="text-center">
                            OBTENGA UNA COTIZACIÓN DE SEGURO DE VIDA ASEQUIBLE
                        </h4>
                        <p class="fs-5">
                            Contamos con el mejor acompañamiento en cuanto a seguros de vida, ofrecemos los mejores servicios para beneficios de nuestros clientes. Ahorre tiempo buscando la mejor cotización de seguro de vida en línea en nuestro sitio. ¡Obtenga una cotización de seguro instantánea y ahórrese tiempo y dinero! Nuestro servicio instantáneo de cotización de seguros le permite acceder directamente a pólizas de seguro de vida de bajo costo de compañías de seguros de vida de alta calificación en todo el país.
                        </p>
                    </blockquote>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 float-md-start">
                    <img class="img-fluid RadioDeBordes" src="app\views\assets\img\IMGCOTIZADOR.jpg" alt="Select Insurance Cotizador" title="Cotiza tu seguro">
                </div>
            </div>
        </div><br><br><br>
        <div class="container-fluid">
            <div class="row text ColorTextoOscuro text-center">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <label><span class="fas fa-file-medical fa-4x"></span></label>
                    <p>
                    <h4>Aplicación Simple</h4>
                    </p>
                    <p>
                        Aplica online y el resto lo hacemos nosotros por usted.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <label><span class="fas fa-piggy-bank fa-4x"></span></label>
                    <p>
                    <h4>Adaptado a su presupuesto</h4>
                    </p>
                    <p>
                        ¡Obtenga $ 250,000 de cobertura de seguro de vida a término por tan solo $ 20 por mes!
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <label><span class="far fa-clock fa-4x"></span></label>
                    <p>
                    <h4>1 dia de activación</h4>
                    </p>
                    <p>
                        Cobertura inmediata, rapido y eficaz.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <label><span class="far fa-calendar-alt fa-4x"></span></label>
                    <p>
                    <h4>Disponibilidad 24 / 7 / 365</h4>
                    </p>
                    <p>
                        Inscríbase en cualquier momento durante el año.
                    </p>
                </div>
            </div><br><br><br>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-Servicios" role="tabpanel" aria-labelledby="nav-Servicios-tab">
        <div class="container-fluid ColorSecundario" id="Servicios">
            <h2 class="text-center ColorTextoOscuro">Nuestros Servicio</h2>
            <hr class="ColorTextoOscuro"><br>
            <div class="row text-center">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <a data-bs-toggle="modal" data-bs-target="#SegurosDeVida" class="ColorTextoOscuro"><span class="fas fa-heartbeat fa-6x"></span></a><br><br>
                    <?php
                    //Modal Seguros de vida
                    ?>
                    <div class="modal fade" id="SegurosDeVida" tabindex="-1" aria-labelledby="TituloSegurosDeVida" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header ColorPrincipal text-white">
                                    <h5 class="modal-title animate__animated animate__zoomIn" id="TituloSegurosDeVida">Seguros de Vida</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ColorSecundario" width="100" height="100">
                                    <div class="shadow p-3 mb-5">
                                        <p class="black-dark fs-5 animate__animated animate__slideInUp" style="text-align: justify;">
                                            El seguro de vida fue creado como un apoyo para ayudar a
                                            garantizar la seguridad de las personas que mas amamos,
                                            en caso de que por alguna circunstancia se presente su muerte
                                            temprana pero ¿Se imagina que pudiera usarlo antes de morir?
                                        </p>
                                    </div>
                                    <img class="img-fluid shadow p-3 mb-5 " src="app/views/assets/img/imgmodales/Salud.jpg" alt="Seguros de vida" title="Seguros de vida">
                                </div>
                                <div class="modal-footer bg-light">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="#Cotizador" class="btn btn-success">Cotizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="ColorTextoOscuro">Seguros de Vida</h3><br><br><br><br>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">

                    <?php
                    //Modal Seguros Familiares
                    ?>
                    <a data-bs-toggle="modal" data-bs-target="#SegurosFamiliares" class="ColorTextoOscuro"><span class="fas fa-users fa-6x"></span></a><br><br>
                    <div class="modal fade" id="SegurosFamiliares" tabindex="-1" aria-labelledby="TituloSegurosFamiliares" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header ColorPrincipal text-white">
                                    <h5 class="modal-title animate__animated animate__zoomIn" id="TituloSegurosFamiliares">Seguros Familiares</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ColorSecundario">
                                    <div class="shadow p-3 mb-5 animate__animated animate__slideInUp">
                                        <p class="text-black fs-5" style="text-align: justify;">
                                            El seguro de vida fue creado como un apoyo para ayudar a
                                            garantizar la seguridad de las personas que mas amamos,
                                            en caso de que por alguna circunstancia se presente su muerte
                                            temprana… pero ¿Se imagina que pudiera usarlo antes de morir
                                        </p>
                                    </div>
                                    <img class="img-fluid shadow p-3 mb-5 " src="app\views\assets\img\imgmodales\Familia.jpg" alt="Seguros Familiares" title="Seguros Familiares">
                                </div>
                                <div class="modal-footer bg-light">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="#Cotizador" class="btn btn-success">Cotizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="ColorTextoOscuro">Seguros Familiares</h3><br><br><br><br>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <?php
                    //Modal Seguros Compañias
                    ?>
                    <a data-bs-toggle="modal" data-bs-target="#SegurosCompañias" class="ColorTextoOscuro"><span class="fas fa-building fa-6x"></span></a><br><br>
                    <div class="modal fade" id="SegurosCompañias" tabindex="-1" aria-labelledby="TituloSegurosCompañias" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header ColorPrincipal text-white">
                                    <h5 class="modal-title animate__animated animate__zoomIn" id="TituloSegurosCompañias">Seguros para Compañias</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ColorSecundario">
                                    <div class="shadow p-3 mb-5 animate__animated animate__slideInUp">
                                        <p class="text-black fs-5" style="text-align: justify;">
                                            Aseguramos su equipo de trabajo a muy bajo costo de riesgos
                                            profesionales y familiares.
                                        </p>
                                    </div>
                                    <img class="img-fluid shadow p-3 mb-5 " src="app\views\assets\img\imgmodales\Compañias.png" alt="Seguros Compañias" title="Seguros Compañias">
                                </div>
                                <div class="modal-footer bg-light">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="#Cotizador" class="btn btn-success">Cotizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="ColorTextoOscuro">Seguros para compañías</h3><br><br><br><br>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <?php
                    //Modal Seguros de Salud
                    ?>
                    <a data-bs-toggle="modal" data-bs-target="#SegurosSalud" class="ColorTextoOscuro"><span class="fas fa-hand-holding-heart fa-6x"></span></a><br><br>
                    <div class="modal fade" id="SegurosSalud" tabindex="-1" aria-labelledby="TituloSegurosSalud" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header ColorPrincipal text-white">
                                    <h5 class="modal-title animate__animated animate__zoomIn" id="TituloSegurosSalud">Seguros de Salud</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ColorSecundario">
                                    <div class="shadow p-3 mb-5 animate__animated animate__slideInUp">
                                        <p class="text-black fs-5" style="text-align: justify;">
                                            Un seguro de salud es un beneficio para usted y para su familia donde puede
                                            obtener una muy buena cobertura y recibir el subsidio del gobierno mas conocido
                                            como el Obamacare.
                                            ObamaCare (Ley de Cuidados de la Salud Asequibles o Affordable Care Act)
                                            es una reforma de salud en E.E.U.U. que extiende y mejora el acceso a
                                            los cuidados de salud y disminuye el gasto mediante regulaciones e impuestos.
                                            El principal objetivo de la Ley de Cuidados de la Salud Asequibles
                                            (Affordable Care Act) es dar acceso a más Americanos a cuidados de salud
                                            asequibles mejorando la calidad de los mismos y regulando la industria de los
                                            seguros médicos y reduciendo así el gasto en cuidados de la salud en E.E.U.U. La ley
                                            contiene cientos de diferentes disposiciones y conjuga diferentes aspectos de
                                            “la crisis de cuidados de la salud” en los E.E.U.U.
                                        </p>
                                    </div>
                                    <img class="img-fluid shadow p-3 mb-5 " src="app\views\assets\img\imgmodales\SeguroSalud.png" alt="Seguros de Salud" title="Seguros de Salud">
                                </div>
                                <div class="modal-footer bg-light">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="#Cotizador" class="btn btn-success">Cotizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="ColorTextoOscuro">Seguros de Salud</h3><br><br><br><br>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <?php
                    //Modal Planes de Retiro
                    ?>
                    <a data-bs-toggle="modal" data-bs-target="#PlanesRetiro" class="ColorTextoOscuro"><span class="fas fa-blind fa-6x"></span></a><br><br>
                    <div class="modal fade" id="PlanesRetiro" tabindex="-1" aria-labelledby="TituloPlanesRetiro" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header ColorPrincipal text-white">
                                    <h5 class="modal-title animate__animated animate__zoomIn" id="TituloPlanesRetiro">Planes de Retiro</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ColorSecundario">
                                    <div class="shadow p-3 mb-5 animate__animated animate__slideInUp">
                                        <p class="text-black fs-5" style="text-align: justify;">
                                            Un plan de retiro es un plan de ahorro programado a largo
                                            plazo que consiste en depositar periódicamente una suma de
                                            dinero que se puede hacer a traves de debito directo o pagos
                                            voluntarios con un plan de retiro se garantiza un rendimiento competitivo
                                            tanto en el capital como el interés.
                                        </p>
                                    </div>
                                    <img class="img-fluid shadow p-3 mb-5 " src="app\views\assets\img\imgmodales\Planes Retiro.png" alt="Planes de Retiro" title="Planes de Retiro">
                                </div>
                                <div class="modal-footer bg-light">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="#Cotizador" class="btn btn-success">Cotizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="ColorTextoOscuro">Planes de Retiro</h3><br><br><br><br>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <a data-bs-toggle="modal" data-bs-target="#SolucionesFinancieras" class="ColorTextoOscuro"><span class="fas fa-search-dollar fa-6x"></span></a><br><br>
                    <?php
                    //Modal Soluciones Financieras
                    ?>
                    <div class="modal fade" id="SolucionesFinancieras" tabindex="-1" aria-labelledby="TituloSolucionesFinancieras" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header ColorPrincipal text-white">
                                    <h5 class="modal-title animate__animated animate__zoomIn" id="TituloSolucionesFinancieras">Planes de Retiro</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ColorSecundario">
                                    <div class="shadow p-3 mb-5 animate__animated animate__slideInUp">
                                        <p class="text-black fs-5" style="text-align: justify;">
                                            Un plan de retiro es un plan de ahorro programado a largo
                                            plazo que consiste en depositar periódicamente una suma de
                                            dinero que se puede hacer a traves de debito directo o pagos
                                            voluntarios con un plan de retiro se garantiza un rendimiento competitivo
                                            tanto en el capital como el interés.
                                        </p>
                                    </div>
                                    <img class="img-fluid shadow p-3 mb-5 " src="app\views\assets\img\imgmodales\Soluciones Financieras.png" alt="Soluciones Financieras" title="Soluciones Financieras">
                                </div>
                                <div class="modal-footer bg-light">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="#Cotizador" class="btn btn-success">Cotizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="ColorTextoOscuro">Soluciones Financieras</h3><br><br><br><br>
                </div>
            </div>
        </div><br><br><br>
    </div>
    <div class="tab-pane fade" id="nav-Testimonios" role="tabpanel" aria-labelledby="nav-Testimonios-tab">
        <div class="container-fluid text-center ColorMenuPrincipalConTexto" id="Testimonios">
            <div class="row">
                <h2>Testimonios</h2>
                <hr>
            </div><br><br>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 shadow p-3 mb-5">
                    <video src="app/views/assets/videos/testimonios/Comercial.mp4" height="350" controls>lo sentimos, tu navegador no soporta el video</video>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 shadow p-3 mb-5">
                    <video src="app/views/assets/videos/testimonios/Testimonial.mp4" height="350" controls>lo sentimos, tu navegador no soporta el video</video>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-Contacto" role="tabpanel" aria-labelledby="nav-Contacto-tab">
        <h2 class="text-center ColorTextoOscuro"><b>Nuestro Proceso de Inscripcion General</b></h2><br><br>
        <div class="container-fluid shadow-lg p-3 mb-5 border border-success rounded">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <button class="btn btn-success btn-lg text-end" data-bs-toggle="modal" data-bs-target="#ModalInscribase">Comenzar</button>
                    <div class="modal fade" id="ModalInscribase" tabindex="-1" aria-labelledby="TituloModalInscribase" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <form action="" method="post">
                                <div class="modal-content">
                                    <div class="modal-header bg-light ColorTextoOscuro">
                                        <h5 class="modal-title animate__animated animate__flipInX" id="TituloModalInscribase">Inscribase</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body ColorPrincipal">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="NombreForm2" class="text-white animate__animated animate__rollIn">Nombre: <label class="text text-danger">*</label></label>
                                                    <input type="text" name="NombreForm2" id="NombreForm2" class="form-control animate__animated animate__lightSpeedInRight" placeholder="Ingrese Nombre">
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="ApellidoForm2" class="text-white animate__animated animate__rollIn">Apellido: <label class="text text-danger">*</label></label>
                                                    <input type="text" name="ApellidoForm2" id="ApellidoForm2" class="form-control animate__animated animate__lightSpeedInRight" placeholder="Ingrese Apellido">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                                    <label for="CorreoForm2" class="text-white animate__animated animate__rollIn">Correo Electronico: <label class="text text-danger">*</label></label>
                                                    <input type="email" name="CorreoForm2" id="CorreoForm2" class="form-control animate__animated animate__lightSpeedInRight" placeholder="Correo">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                                    <label for="TelefonoForm2" class="text-white animate__animated animate__rollIn">Telefono: <label class="text text-danger">*</label></label>
                                                    <input type="text" name="TelefonoForm2" id="TelefonoForm2" class="form-control animate__animated animate__lightSpeedInRight" placeholder="Telefono">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                    <label for="EstadoForm2" class="text-white animate__animated animate__rollIn">Estado: <label class="text text-danger">*</label></label>
                                                    <select name="EstadoForm2" class="form-select animate__animated animate__lightSpeedInRight" id="EstadoForm2">
                                                        <option value="Alabama">Alabama</option>
                                                        <option value="Alaska">Alaska</option>
                                                        <option value="Arizona">Arizona</option>
                                                        <option value="Arkansas">Arkansas</option>
                                                        <option value="California">California</option>
                                                        <option value="Carolina del Norte">Carolina del Norte</option>
                                                        <option value="Carolina del Sur">Carolina del Sur</option>
                                                        <option value="Colorado">Colorado</option>
                                                        <option value="Connecticut">Connecticut</option>
                                                        <option value="Dakota del Norte">Dakota del Norte</option>
                                                        <option value="Dakota del Sur">Dakota del Sur</option>
                                                        <option value="Delaware">Delaware</option>
                                                        <option value="Florida">Florida</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Hawái9​">Hawái9​</option>
                                                        <option value="Idaho">Idaho</option>
                                                        <option value="Illinois">Illinois</option>
                                                        <option value="Indiana">Indiana</option>
                                                        <option value="Iowa">Iowa</option>
                                                        <option value="Kansas">Kansas</option>
                                                        <option value="Kentucky">Kentucky</option>
                                                        <option value="Luisiana10​">Luisiana10​</option>
                                                        <option value="Maine">Maine</option>
                                                        <option value="Maryland">Maryland</option>
                                                        <option value="Massachusetts">Massachusetts</option>
                                                        <option value="Míchigan13​">Míchigan13​</option>
                                                        <option value="Minnesota">Minnesota</option>
                                                        <option value="Misisipi14​">Misisipi14​</option>
                                                        <option value="Misuri15​">Misuri15​</option>
                                                        <option value="Montana">Montana</option>
                                                        <option value="Nebraska">Nebraska</option>
                                                        <option value="Nevada">Nevada</option>
                                                        <option value="Nueva Jersey17​">Nueva Jersey17​</option>
                                                        <option value="Nueva York19​">Nueva York19​</option>
                                                        <option value="Nuevo Hampshire20​">Nuevo Hampshire20​</option>
                                                        <option value="Nuevo México22​">Nuevo México22​</option>
                                                        <option value="Ohio">Ohio</option>
                                                        <option value="Oklahoma">Oklahoma</option>
                                                        <option value="Oregón24​">Oregón24​</option>
                                                        <option value="Pensilvania25​">Pensilvania25​</option>
                                                        <option value="Rhode Island">Rhode Island</option>
                                                        <option value="Tennessee">Tennessee</option>
                                                        <option value="Texas27​">Texas27​</option>
                                                        <option value="Utah">Utah</option>
                                                        <option value="Vermont">Vermont</option>
                                                        <option value="Virginia">Virginia</option>
                                                        <option value="Virginia Occidental">Virginia Occidental</option>
                                                        <option value="Washington">Washington</option>
                                                        <option value="Wisconsin">Wisconsin</option>
                                                        <option value="Wyoming">Wyoming</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                    <label for="ServicioForm2" class="text-white animate__animated animate__rollIn">Servicio de su Interes: <label class="text text-danger">*</label></label>
                                                    <select name="ServicioForm2" id="ServicioForm2" class="form-select animate__animated animate__lightSpeedInRight">
                                                        <option selected>Seleccione una opcion</option>
                                                        <option value="vida">Seguro de vida</option>
                                                        <option value="familiar">Seguro Familiar</option>
                                                        <option value="salud">Seguro de Salud</option>
                                                        <option value="compañias">Seguro de Compañias</option>
                                                        <option value="planes de retiro">Planes de Retiro</option>
                                                        <option value="soluciones financieras">Soluciones Financieras</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="button" class="btn btn-danger animate__animated animate__zoomInDown" data-bs-dismiss="modal">Cerrar</button>
                                        <input type="submit" class="btn btn-success animate__animated animate__zoomInDown" value="Enviar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 ColorTextoOscuro">
                    <h5 class="text-center">A SU SERVICIO</h5>
                    <p style="text-align: justify;">
                        Si tiene alguna pregunta específica, estamos aquí para ayudarle.
                        Correo electrónico, chat o teléfono. Tu eliges.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-end">
                    <img src="app/views/assets/img/LogoColorReal.png" alt="Select Insurance" title="Select Insurance" height="100px">
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-Agentes" role="tabpanel" aria-labelledby="nav-Agentes-tab">
        <div class="container-fluid">
            <div class="row">
                <div class="container-fluid ImagenAgentes img-fluid ImagenFija">
                    <div class="row ColorSecundarioTranslucido">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center"><br><br><br><br><br><br><br><br>
                            <a href="./VideosSalud" class="btn btn-outline-success btn-lg "><i class="fas fa-video fa-6x"></i></a><br><br>
                            <label class="text-white">Galeria de Videos de Salud</label><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center"><br><br><br><br><br><br><br><br>
                            <a href="" class="btn btn-outline-success btn-lg "><i class="fas fa-database fa-6x"></i></a><br><br>
                            <label class="text-white">CRM Select</label><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center"><br><br><br><br><br><br><br><br>
                            <a href="" class="btn btn-outline-success btn-lg "><i class="fas fa-headset fa-6x"></i></a><br><br>
                            <label class="text-white">Contact Center</label><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center"><br><br><br><br><br><br><br><br>
                            <a href="./VideosVida" class="btn btn-outline-success btn-lg "><i class="fas fa-film fa-6x"></i></a><br><br>
                            <label class="text-white">Galeria de Videos de Vida</label><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--<nav id="paginaSelectInsurance" class="shadow-lg navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid ColorTextoOscuro">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link" href="./">INICIO</a>
                <a class="nav-link" href="./#Cotizador">COTIZADOR ONLINE</a>
                <a class="nav-link" href="./#Servicios">SERVICIOS</a>
                <a class="nav-link" href="./#Testimonios">TESTIMONIOS</a>
                <a class="nav-link" href="./#Contacto">CONTACTO</a>
                <a class="nav-link" href="agentes">AGENTES</a>
            </div>
        </div>
        <a class="navbar-brand d-flex"><img src="app/views/assets/img/Logo2.png" height="75"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>-->