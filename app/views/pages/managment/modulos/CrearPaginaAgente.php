<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 shadow p-3 mb-5">
            <h2 class="text-center">Crear Pagina</h2>
            <form action="./ProcesoCrearPagina" method="post" enctype="multipart/form-data">
                <label for="NombrePagina">Nombre Pagina:</label>
                <input type="text" name="NombrePagina" id="NombrePagina" class="form-control" placeholder="Ingrese URL Ejemplo: NombreApellido"><br>
                <label for="Nombre">Nombre el Agente:</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Por favor ingrese Nombre del Agente"><br>
                <label for="ImagenAgente">Imagen Agente:</label>
                <input type="file" name="ImagenAgente" id="ImagenAgente" class="form-control"><br>
                <input type="submit" value="Guardar" name="btnCrearPagina" class="btn btn-outline-success">
            </form>
        </div>
        <div class="col-12 col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
    </div>
</div>