<div class="ImagenCargaVideos img-fluid ImagenFija">
    <div class="container-fluid ColorSecundarioFondoTranslucido">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-Anico-tab" data-bs-toggle="tab" data-bs-target="#nav-Anico" type="button" role="tab" aria-controls="nav-Anico" aria-selected="true">Anico</button>
                <button class="nav-link" id="nav-Ameritas-tab" data-bs-toggle="tab" data-bs-target="#nav-Ameritas" type="button" role="tab" aria-controls="nav-Ameritas" aria-selected="false">Ameritas</button>
                <button class="nav-link" id="nav-NationalLife-tab" data-bs-toggle="tab" data-bs-target="#nav-NationalLife" type="button" role="tab" aria-controls="nav-NationalLife" aria-selected="false">National Life</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-Anico" role="tabpanel" aria-labelledby="nav-Anico-tab">
                <div class="container-fluid">
                    <form action="./?managment=CargandoVideosAnico" method="post" enctype="multipart/form-data">
                        <div class="row text-black">
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 shadow-lg p-3 mb-5">
                                <img class="img-fluid rounded mx-auto d-block" src="app\views\assets\img\Aseguradoras\AmericanNational.png" alt="American National" title="American National"><br><br><br>
                                <label for="Anico">Ingrese Nombre</label>
                                <input type="text" name="NombreVideoAnico" class="form-control rounded-pill" id="Anico" placeholder="Nombre Video"><br><br>
                                <input type="file" name="Anico" id="Anico" class="form-control"><br>
                                <input type="submit" value="Guardar Anico" name="btnUploadVideoAnico" class="btn btn-outline-success">
                                <label> <?php
                                        if (isset($mensaje)) {
                                            echo ' ' . $mensaje;
                                        }
                                        ?></label>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-Ameritas" role="tabpanel" aria-labelledby="nav-Ameritas-tab">
                <div class="container-fluid">
                    <form action="./?managment=CargandoVideosAmeritas" method="post" enctype="multipart/form-data">
                        <div class="row text-black">
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 shadow-lg p-3 mb-5">
                                <img class="img-fluid rounded mx-auto d-block" src="app\views\assets\img\Aseguradoras\Ameritas.png" alt="Ameritas" title="Ameritas"><br><br><br>
                                <label for="Ameritas">Ingrese Nombre</label>
                                <input type="text" name="NombreVideoAmeritas" class="form-control rounded-pill" id="Ameritas" placeholder="Nombre Video"><br><br>
                                <input type="file" name="Ameritas" id="Ameritas" class="form-control"><br>
                                <input type="submit" value="Guardar Ameritas" name="btnUploadVideoAmeritas" class="btn btn-outline-success">
                                <label> <?php
                                        if (isset($mensaje)) {
                                            echo ' ' . $mensaje;
                                        }
                                        ?></label>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-NationalLife" role="tabpanel" aria-labelledby="nav-NationalLife-tab">
                <div class="container-fluid">
                    <form action="./?managment=CargandoVideosNationalLife" method="post" enctype="multipart/form-data">
                        <div class="row text-black">
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 shadow-lg p-3 mb-5">
                                <img class="img-fluid rounded mx-auto d-block" src="app\views\assets\img\Aseguradoras\NationalLifeGroup.png" alt="National Life" title="National Life"><br><br><br>
                                <label for="NationalLife">Ingrese Nombre</label>
                                <input type="text" name="NombreVideoNationalLife" class="form-control rounded-pill" id="NationalLife" placeholder="Nombre Video"><br><br>
                                <input type="file" name="NationalLife" id="NationalLife" class="form-control"><br>
                                <input type="submit" value="Guardar National Life" name="btnUploadVideoNationalLife" class="btn btn-outline-success">
                                <label> <?php
                                        if (isset($mensaje)) {
                                            echo ' ' . $mensaje;
                                        }
                                        ?></label>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
                        </div>
                    </form>
                </div>
            </div>
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