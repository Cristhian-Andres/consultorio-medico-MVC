
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8">
            <h1 class="ps-3">Lista Pacientes</h1>
        </div>
        <div class="col-md-4 p-3">
            <a class="btn btn-primary btn-flat" href="?c=pacientes&a=ingresarPacientes"><i class="fa fa-lg fa-plus"></i> Ingresar Pacientes</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 ps-3">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center bg-info">
                            <tr>
                                <th>ID</th>
                                <th>Identificación Paciente</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Fecha Nacimiento</th>
                                <th>Genero</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php foreach ($this->modelo->Listar() as $r) :?>
                                <tr>
                                    <td><?= $r -> idPaciente ?></td>
                                    <td><?= $r -> pacIdentificacion ?></td>
                                    <td><?= $r -> pacNombres ?></td>
                                    <td><?= $r -> pacApellidos ?></td>
                                    <td><?= $r -> pacFechaNacimiento  ?></td>
                                    <td><?= $r -> pacSexo ?></td>
                                    <td>
                                        <a class="btn btn-success btn-flat" href="?c=pacientes&a=ingresarPacientes&id=<?= $r -> idPaciente ?>"><i class="fa fa-lg fa-edit"></i></a>
                                    </td>

                                    <td>
                                        <a class="btn btn-warning btn-flat" href="?c=pacientes&a=eliminar&id=<?= $r -> idPaciente ?>"><i class="fa fa-lg fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>