<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-12 col-sm-2 col-md-3 col-lg-4"></div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <h2 class="text-center">Añadir Eventos</h2>
                <label for="name">Nombre Evento:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese Nombre">
                <label for="date">Fecha Evento:</label>
                <input type="date" name="date" id="date" class="form-control">
                <label for="description">Descripcion Evento:</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Ingrese Descripcion del Evento, Ejemplo, motivo de celebracion del evento"></textarea>
                <select name="type" id="type" class="form-select">
                    <option value="holiday">Vacaciones</option>
                    <option value="event">Evento</option>
                    <option value="birthday">Cumpleaños</option>
                </select>
                <input type="checkbox" name="everyYear" id="everyYear" class="form-check-input">
                <label for="everyYear" class="form-check-label">Todos los años:</label>
                <label for="badge">Insignia:</label>
                <input type="text" name="badge" id="badge" class="form-control" placeholder="Ingrese Insignia, ejem una hora exacta">
                <label for="color">Color del Evento:</label>
                <input type="color" name="color" id="color" class="form-control form-control-color" value="#20bf6b" title="Seleccione el color de el Evento">
                <input type="submit" value="Guardar Evento" class="btn btn-outline-success btn-lg">
            </div>
            <div class="col-12 col-sm-2 col-md-3 col-lg-4"></div>
        </div>
    </form>
</div>