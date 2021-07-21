<div class="ImagenCargaVideos img-fluid ImagenFija">
    <div class="row">
        <div class="container-fluid ColorSecundarioFondoTranslucido">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3"></div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6"><br><br>
                    <center>
                        <img src="app/views/assets/img/Salud/Salud.png" class="img-fluid" height="150px" width="150px" alt="Salud" title="Salud">
                        <h2>Edita o Elimina Videos de Salud</h2>
                    </center><br><br>
                    <form action="./?managment=ProcesoVideosSalud" method="post">
                        <table class="table table-hover table-success text-center text-dark table-responsive shadow p-3 mb-5">
                            <thead>
                                <tr>
                                    <th>
                                        Seleccione
                                    </th>
                                    <th>
                                        Nombre Video
                                    </th>
                                </tr>
                            </thead>
                            <tbo150
                                <?php
                                $resultado = $Query->Read($Select);
                                while ($rows = mysqli_fetch_assoc($resultado)) :
                                ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="id[]" value="<?= $rows['idVideo']; ?>" class="form-check-input">
                                        </td>
                                        <td>
                                            <?= $rows['Nombre']; ?>
                                        </td>
                                    </tr>
                                <?php
                                endwhile;
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>
                                        <label for="EditarNombreVideos">Editar</label><input type="text" name="EditarNombreVideos" id="EditarNombreVideos" class="form-control" placeholder="Edite Nombre Video">
                                    </th>
                                    <th>
                                        <input type="submit" value="Editar" name="btnEditar" class="btn btn-outline-success">
                                        <input type="submit" value="Eliminar" name="btnEliminar" class="btn btn-outline-danger">
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3"></div>
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