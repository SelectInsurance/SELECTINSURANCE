<div class="container-fluid ImagenCaroucelFondo ImagenFija">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
            <form action="./BuscadorLeads" method="post">
                <label for="Nombre">Primer Nombre:</label>
                <input type="search" name="Nombre" id="Nombre" class="form-control" placeholder="Ingrese Primer Nombre" required="required"><br>
                <label for="Apellido">Apellido:</label>
                <input type="text" name="Apellido" id="Apellido" class="form-control" placeholder="Ingrese Primer Apellido" required="required"><br>
                <label for="FechaNacimiento">Fecha de Nacimiento</label>
                <input type="date" name="FechaNacimiento" id="FechaNacimiento" class="form-control" required="required"><br>
                <input type="submit" value="Consultar" class="btn btn-success" name="btnBuscadorLeads">
            </form>
        </div>
        <div class="col-12 col-sm-2 col-md-4 col-lg-6 shadow-lg col-xl-8 table-responsive text-center">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-striped mb-0 table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Agente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($row1 == null) : ?>
                            <?php while ($row1 = mysqli_fetch_assoc($consulta)) : ?>
                                <tr>
                                    <td><?= $row1['firstname'] ?></td>
                                    <td><?= $row1['lastname'] ?></td>
                                    <td><?= $row1['birthday'] ?></td>
                                    <td><?php
                                        $CrudVtiger2 = new CrudVtiger();
                                        $id = $row1['smownerid'];
                                        $query2 = "SELECT first_name, last_name FROM vtiger_users WHERE id = $id";

                                        $consulta2 = $CrudVtiger2->Read($query2);
                                        while ($row2 = mysqli_fetch_array($consulta2)) {
                                            echo $row2['first_name'] . ' ' . $row2['last_name'];
                                        } ?>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4"></div>
        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
    </div>
    <div class="row ColorPrincipal text-white">
        <div class="container"><br>
            <h4 class="text-white text-center">Contactenos</h4>
            <hr>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center">
                    <img src="app\views\assets\img\LogoWhite.webp" alt="Select Insurance" height="80px" title="Select Insurance"><br><br>
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