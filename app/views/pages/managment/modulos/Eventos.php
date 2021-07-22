<div class="container-fluid  ImagenCargaVideos img-fluid ImagenFija">
    <div class="row">
        <div class="container-fluid">
            <form action="" method="post">
                <div class="row">
                    <div class="col-12 col-sm-2 col-md-3 col-lg-4"></div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 shadow-lg p-3 mb-5 rounded ColorSecundarioFondoTranslucido">
                        <h2 class="text-center">Añadir Eventos</h2>
                        <label for="name">Nombre Evento:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese Nombre"><br>
                        <label for="date">Fecha Evento:</label>
                        <input type="date" name="date" id="date" class="form-control"><br>
                        <label for="description">Descripcion Evento:</label>
                        <textarea name="description" class="form-control" id="description" cols="10" rows="5" placeholder="Ingrese Descripcion del Evento, Ejemplo, motivo de celebracion del evento"></textarea><br>
                        <label for="type">Tipo de Evento</label>
                        <select name="type" id="type" class="form-select">
                            <option value="holiday">Vacaciones</option>
                            <option value="event">Evento</option>
                            <option value="birthday">Cumpleaños</option>
                        </select><br>
                        <input type="checkbox" name="everyYear" id="everyYear" class="form-check-input">
                        <label for="everyYear" class="form-check-label">Todos los años:</label><br><br>
                        <label for="badge">Insignia:</label>
                        <input type="text" name="badge" id="badge" class="form-control" placeholder="Ingrese Insignia, ejem una hora exacta"><br>
                        <label for="color">Color del Evento:</label>
                        <input type="color" name="color" id="color" class="form-control form-control-color" value="#20bf6b" title="Seleccione el color de el Evento"><br>
                        <input type="submit" value="Guardar Evento" name="btnAñadirEventos" class="btn btn-outline-success btn-lg">
                        <?php 
                            if (!empty($$mensaje)) {
                                print '<h4 class="text-center">'.$mensaje.'</h4>';
                            }
                        ?>
                    </div>
                    <div class="col-12 col-sm-2 col-md-3 col-lg-4"></div>
                </div>
            </form>
        </div>
        <div class="text-white ColorPrincipalTranslucido" id="Contacto">
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center">
                        <img src="app/views/assets/img/LogoColorReal.png" alt="Select Insurance" height="80px" title="Select Insurance"><br><br>
                    </div>
                    <div class="col-12 col-md-1 col-lg-1"></div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><br><br>
                        <p><b>CONTÁCTENOS</b></p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-2 col-lg-2"><br><br>
                        <p><b>ENLACES</b></p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><br><br>
                        <p><b>ZONA DE AFILIADOS</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center">
                        <p class="fs-7">
                            Select Insurance And Financial
                            Services nace en el año 2009 teniendo
                            en cuenta la necesidad de las personas
                            como una compañía dedicada a la venta y el
                            asesoramiento de seguros de vida y hoy es
                            una compañía especializada en aseguramiento, plan
                            de retiro y planes de inversión.
                        </p>
                    </div>
                    <div class="col-12 col-md-1 col-lg-1"></div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">

                        <p class="lh-lg">
                            Tel.: (786) 216 1936 <br>

                            Email: contact@selectinsurance.info <br>

                            Skype: contact insurance <br>

                            Dirección: 7791 NW 46 ST. SUITE 112 DORAL, FL 33166 <br>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                        <p class="lh-lg">
                            Cotizador Online <br>

                            Nuestros Servicios <br>

                            Testimonios <br>

                            Contacto <br>
                            <a href="?managment=login" style="text-decoration: none;" target="__blank">Administracion</a>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <p class="lh-lg">
                            FAQ <br>

                            Blog <br>

                            Crm <br>

                            Galería <br>
                        </p>
                    </div>
                </div>
                <h6 class="text-end">Copyright © <?php echo date('M') . ' ' . date('Y'); ?> Select Insurance.</h6><br>
            </div>
        </div>
    </div>
</div>