<div class="container-fluid ImagenCargaVideos ImagenFija">
    <div class="row">
        <div class="container-fluid text-black ColorSecundarioFondoTranslucido">
            <div class="row">
                <center>
                    <h2>Generador QR</h2>
                </center>
                <div class="col-1 col-sm-2 col-md-3 col-lg-4"></div>
                <div class="col-10 col-sm-8 col-md-6 col-lg-4 shadow-lg">
                    <form action="./GeneradorQR" method="post">
                        <label for="NombreArchivo">Nombre del Archivo</label>
                        <input type="text" name="NombreArchivo" id="NombreArchivo" placeholder="Nombre del Archivo" class="form-control"><br>
                        <label for="ContenidoQR">Contenido QR</label>
                        <input type="text" name="ContenidoQR" id="ContenidoQR" placeholder="Ingrese contenido Ejem: URL, Correo, valor, etc" class="form-control"><br>
                        <input type="submit" name="btnGenerarQR" value="Generar" class="btn btn-success"><br><br><br>
                    </form>
                    <?php
                    //Mostramos la imagen generada
                    echo '<center><img src="' . $dir . basename($filename) . '" /><hr/></center>';
                    ?>
                </div>
                <div class="col-1 col-sm-2 col-md-3 col-lg-4"></div>
            </div>
            <div class="row"></div><br><br>
        </div>
        <div class="container-fluid ColorPrincipalTranslucido text-white">
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