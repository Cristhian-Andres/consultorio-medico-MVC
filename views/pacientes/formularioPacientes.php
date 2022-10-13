<div class="row ">
    <div class="col-md-2">

    </div>
    <div class="col-md-8 p-3 bg-light">
        <h1 class="text-center">
            <?=$titulo?> Pacientes
        </h1>
        <legend>
            <?=$titulo?> los pacientes del sistema.
        </legend>

        <form class="" method="POST" action="?c=pacientes&a=guardarPacientes">

            <input type="hidden" class="form-control" name="id" value="<?=$p -> get_idPaciente()?>" require>

            <div class="form-group p-2">
                <label for="identificacion" class="col-sm-4 col-form-label">Identificación Paciente</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="identificacion" placeholder="Identificación" value="<?=$p -> get_pacIdentificacion()?>" require>
                </div>
            </div>

            <div class="form-group p-2">
                <label for="nombres" class="col-sm-4 col-form-label">Nombres Paciente</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombres" placeholder="Nombres" value="<?=$p -> get_pacNombres()?>" require>
                </div>
            </div>

            <div class="form-group p-2">
                <label for="apellidos" class="col-sm-4 col-form-label">Apellidos Paciente</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" value="<?=$p -> get_pacApellidos()?>" require>
                </div>
            </div>

            <div class="form-group p-2">
                <label for="fecha" class="col-sm-4 col-form-label">Fecha Nacimiento</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="fecha" placeholder="Fecha Nacimiento" value="<?=$p -> get_pacFechaNacimiento()?>" require>
                </div>
            </div>

            <div class="form-group p-2">
                <label class="col-sm-4 col-form-label" for="genero">Genero</label>
                <select class="form-control" name="genero" value="<?=$p -> get_pacSexo()?>" required>
                        <option>Femenino</option>
                        <option>Masculino</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Ingresar</button>
        
        </form>
    </div>
</div>