<div class="row ">
    <div class="col-md-2">

    </div>
    <div class="col-md-8 p-3 bg-light">
        <h1 class="text-center">
            <?=$titulo?> Citas
        </h1>
        <legend>
            <?=$titulo?> las citas del sistema.
        </legend>

        <form class="" method="POST" action="?c=citas&a=guardarCitas">

            <input type="hidden" class="form-control" name="id" value="<?=$p -> get_idCita()?>" required>

            <div class="form-group p-2">
                <label for="fecha" class="col-sm-4 col-form-label">Fecha Cita</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="fecha" placeholder="Fecha" value="<?=$p -> get_citFecha()?>" require>
                </div>
            </div>

            <div class="form-group p-2">
                <label for="hora" class="col-sm-4 col-form-label">Hora Cita</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control" name="hora" placeholder="Hora" value="<?=$p -> get_citHora()?>" require>
                </div>
            </div>

            <div class="form-group p-2">
                <label class="col-sm-4 col-form-label" for="genero">Pacientes</label>
                <select class="form-control" name="paciente" value="<?=$p -> get_citPaciente()?>" required>
                    <?php foreach ($bdPacientes  as $paciente) :?>
                        <option value="<?=$paciente -> idPaciente?>"> <?= $paciente -> pacNombres ?> <?=$paciente -> pacApellidos ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group p-2">
                <label class="col-sm-4 col-form-label" for="genero">Medicos</label>
                <select class="form-control" name="medico" value="<?=$p -> get_citMedico()?>" required>
                    <?php foreach ($bdMedicos  as $medico) :?>
                        <option value="<?=$medico -> idMedico?>"> <?= $medico -> medNombres ?> <?= $medico -> medApellidos ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group p-2">
                <label class="col-sm-4 col-form-label" for="genero">Consultorios</label>
                <select class="form-control" name="consultorio" value="<?=$p -> get_citConsultorio()?>" required>
                    <?php foreach ($bdConsultorios  as $consultorio) :?>
                        <option value="<?=$consultorio -> idConsultorio?>"> <?= $consultorio -> conNombre ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group p-2">
                <label class="col-sm-4 col-form-label" for="genero">Estado</label>
                <select class="form-control" name="estado" value="<?=$p -> get_citEstado()?>" required>
                        <option>Asignado</option>
                        <option>Atendido</option>
                </select>
            </div>

            <div class="form-group p-2">
                <label for="fecha" class="col-sm-4 col-form-label">Observaciones</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="observaciones" placeholder="observaciones" value="<?=$p -> get_citObservaciones()?>" require>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Ingresar</button>
        
        </form>
    </div>
</div>