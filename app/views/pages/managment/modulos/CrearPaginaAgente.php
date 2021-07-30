<div class="container-fluid ">
    <div class="row ImagenCreadorPaginas ImagenFija">
        <div class="container-fluid ColorSecundarioFondoTranslucido">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-Creador-tab" data-bs-toggle="tab" data-bs-target="#nav-Creador" type="button" role="tab" aria-controls="nav-Creador" aria-selected="true">Creador</button>
                    <button class="nav-link" id="nav-Administrar-tab" data-bs-toggle="tab" data-bs-target="#nav-Administrar" type="button" role="tab" aria-controls="nav-Administrar" aria-selected="false">Administrar</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-Creador" role="tabpanel" aria-labelledby="nav-Creador-tab">
                    <div class="row">
                        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
                        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 shadow p-3 mb-5">
                            <h2 class="text-center">Crear Pagina</h2>
                            <form action="./ProcesoCrearPagina" method="post" enctype="multipart/form-data">
                                <label for="NombrePagina">Nombre Pagina:</label>
                                <input type="text" name="NombrePagina" id="NombrePagina" class="form-control" placeholder="Ingrese URL Ejemplo: NombreApellido" required="required"><br>
                                <label for="Nombre">Nombre el Agente:</label>
                                <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Por favor ingrese Nombre del Agente" required="required"><br>
                                <label for="Email">Correo del Agente:</label>
                                <input type="email" name="Email" id="Email" class="form-control" placeholder="Ingrese Correo" required="required"><br>
                                <label for="Telefono">Telefono:</label>
                                <input type="tel" name="Telefono" id="Telefono" class="form-control" placeholder="Ingrese Telefono del Agente" required="required"><br>
                                <label for="ImagenAgente">Imagen Agente:</label>
                                <input type="file" name="ImagenAgente" id="ImagenAgente" class="form-control" required="required"><br>
                                <input type="submit" value="Guardar" name="btnCrearPagina" class="btn btn-outline-success">
                            </form>
                        </div>
                        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-Administrar" role="tabpanel" aria-labelledby="nav-Administrar-tab">
                    <div class="row"><br><br>

                        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-3"></div>
                        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 text-center shadow p-3 mb-5">
                            <center>
                                <h2>Gestion Paginas</h2>
                            </center>
                            <form action="./ProcesoEditarEliminarPagina" method="post">
                                <table class="table table-responsive table-hover shadow p-3 mb-5">
                                    <thead>
                                        <tr>
                                            <th colspan="4">Administrar Paginas</th>
                                        </tr>
                                        <tr>
                                            <th>Seleccionar</th>
                                            <th>Titulo</th>
                                            <th>Nombre</th>
                                            <th>URL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($rows = $ConsultaCrearPagina->fetch_assoc()) :
                                        ?>
                                            <tr>
                                                <td><input type="checkbox" name="id[]" value="<?= $rows['id']; ?>" class="form-check-input"></td>
                                                <td><?= $rows['Titulo']; ?></td>
                                                <td><?= $rows['Nombre']; ?></td>
                                                <td><?= $rows['URL']; ?></td>
                                            </tr>
                                        <?php
                                        endwhile;
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3">
                                                <label for="Nombre">Nombre:</label>
                                                <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Ingrese Nombre de Pagina">
                                            </td>
                                            <td>
                                                <input type="submit" value="Editar" name="btnEditarEliminar" class="btn btn-outline-success">
                                                <input type="submit" value="Eliminar" name="btnEditarEliminar" class="btn btn-outline-danger">
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </form>
                        </div>
                        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-3"></div>
                    </div>
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