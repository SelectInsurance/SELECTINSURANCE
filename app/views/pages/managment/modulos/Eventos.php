<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-12 col-sm-2 col-md-3 col-lg-4"></div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <label for="name">Nombre Evento:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese Nombre">
                <label for="date">Fecha Evento:</label>
                <input type="date" name="date" id="date" class="form-control">
                <label for="description">Descripcion Evento</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Ingrese Descripcion del Evento, Ejemplo, motivo de celebracion del evento"></textarea>
                <select name="type" id="type">
                    <option value="holiday">Cumpleaños</option>
                    <option value="event">Evento</option>
                    <option value="birthday"></option>
                </select>
            </div>
            <div class="col-12 col-sm-2 col-md-3 col-lg-4"></div>
        </div>
    </form>
</div>