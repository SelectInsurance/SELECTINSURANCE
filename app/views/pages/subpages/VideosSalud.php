<div class="container-fluid">
    <div class="row shadow-lg p-3 mb-5 border">
        <center><h2>Videos de Salud</h2></center>
        <?php
        $ConsultaAnico = new crudVideos("SELECT Nombre, URL FROM videosdesalud");
        $resultados = $ConsultaAnico->Read();
        while ($rows = mysqli_fetch_assoc($resultados)) :
        ?>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 shadow p-3 mb-5">
                <h4 class="text-center"><?php echo $rows['Nombre']; ?></h4>
                <video src="<?= $rows['URL']; ?>" controls>Lo sentimos el video no esta disponible</video>
            </div>
        <?php endwhile; ?>
    </div><br><br><br>
    <div class="row ColorPrincipal text-white">
        <div class="container"><br>
            <h4 class="text-white text-center">Contactenos</h4>
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
            <h6 class="text-end">Copyright © <?php echo date('Y'); ?> Select Insurance.</h6>
        </div>
    </div>
</div>