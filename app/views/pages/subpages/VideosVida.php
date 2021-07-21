<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-anico-tab" data-bs-toggle="tab" data-bs-target="#nav-anico" type="button" role="tab" aria-controls="nav-anico" aria-selected="true" style="color: #000;">Anico</button>
        <button class="nav-link" id="nav-ameritas-tab" data-bs-toggle="tab" data-bs-target="#nav-ameritas" type="button" role="tab" aria-controls="nav-ameritas" aria-selected="false" style="color: #000;">Ameritas</button>
        <button class="nav-link" id="nav-nationallife-tab" data-bs-toggle="tab" data-bs-target="#nav-nationallife" type="button" role="tab" aria-controls="nav-nationallife" aria-selected="false" style="color: #000;">National Life</button>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-anico" role="tabpanel" aria-labelledby="nav-anico-tab">
        <div class="container-fluid">
            <center><img src="app\views\assets\img\Aseguradoras\AmericanNational.png" class="img-fluid" width="300px" height="300px" alt="Anico" title="Anico"></center>
            <div class="row">
                <?php
                $ConsultaAnico = new crudVideos();
                $resultados = $ConsultaAnico->Read("SELECT Nombre, URL FROM videosanico");
                while ($rows = mysqli_fetch_assoc($resultados)) :

                ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 shadow p-3 mb-5">
                        <h4 class="text-center"><?php echo $rows['Nombre']; ?></h4>
                        <video src="<?= $rows['URL']; ?>" controls>Lo sentimos el video no esta disponible</video>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-ameritas" role="tabpanel" aria-labelledby="nav-ameritas-tab">
        <div class="container-fluid">
            <center><img src="app\views\assets\img\Aseguradoras\Ameritas.png" class="img-fluid" width="300px" height="300px" alt="Ameritas" title="Ameritas"></center>
            <div class="row">
                <?php
                $ConsultaAnico = new crudVideos();
                $resultados = $ConsultaAnico->Read("SELECT Nombre, URL FROM videosameritas");
                while ($rows = mysqli_fetch_assoc($resultados)) :
                ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 shadow p-3 mb-5">
                        <h4 class="text-center"><?php echo $rows['Nombre']; ?></h4>
                        <video src="<?= $rows['URL']; ?>" controls>Lo sentimos el video no esta disponible</video>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-nationallife" role="tabpanel" aria-labelledby="nav-nationallife-tab">
        <div class="container-fluid">
            <center><img src="app\views\assets\img\Aseguradoras\NationalLifeGroup.png" class="img-fluid" width="300px" height="300px" alt="National Life" title="National Life"></center>
            <div class="row">
                <?php
                $ConsultaAnico = new crudVideos();
                $resultados = $ConsultaAnico->Read("SELECT Nombre, URL FROM videosnationallife");
                while ($rows = mysqli_fetch_assoc($resultados)) :

                ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 shadow p-3 mb-5">
                        <h4 class="text-center"><?php echo $rows['Nombre']; ?></h4>
                        <video src="<?= $rows['URL']; ?>" controls>Lo sentimos el video no esta disponible</video>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid ColorPrincipal text-white"><br>
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