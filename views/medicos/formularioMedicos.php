<div class="row ">
    <div class="col-md-2">

    </div>
    <div class="col-md-8 p-3 bg-light">
        <h1 class="text-center">
            <?=$titulo?> Médicos
        </h1>
        <legend>
            <?=$titulo?> los médicos del sistema.
        </legend>

        <form class="" method="POST" action="?c=medicos&a=guardarMedicos">

            <input type="hidden" class="form-control" name="id" value="<?=$p -> get_idMedico()?>" required>

            <div class="form-group p-2">
                <label for="identificacion" class="col-sm-4 col-form-label">Identificación Médico</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="identificacion" placeholder="Identificación" value="<?=$p -> get_medIdentificacion()?>" required>
                </div>
            </div>

            <div class="form-group p-2">
                <label for="nombres" class="col-sm-4 col-form-label">Nombres Médico</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombres" placeholder="Nombres" value="<?=$p -> get_medNombres()?>" required>
                </div>
            </div>

            <div class="form-group p-2">
                <label for="apellidos" class="col-sm-4 col-form-label">Apellidos Médico</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" value="<?=$p -> get_medApellidos()?>" required>
                </div>
            </div>

            <div class="form-group p-2">
                <label for="especialidad" class="col-sm-4 col-form-label">Especialidad</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="especialidad" placeholder="especialidad" value="<?=$p -> get_medEspecialidad()?>" required>
                </div>
            </div>

            <div class="form-group p-2">
                <label for="telefono" class="col-sm-4 col-form-label">Telefono</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="telefono" placeholder="telefono" value="<?=$p -> get_medTelefono()?>" required>
                </div>
            </div>

            <div class="form-group p-2">
                <label for="correo" class="col-sm-4 col-form-label">Correo</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="correo" placeholder="correo" value="<?=$p -> get_medCorreo()?>" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Ingresar</button>

        </form>
    </div>
</div>