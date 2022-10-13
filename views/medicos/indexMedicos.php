
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8">
            <h1 class="ps-3">Lista Médicos</h1>
        </div>
        <div class="col-md-4 p-3">
            <a class="btn btn-primary btn-flat" href="?c=medicos&a=ingresarMedicos"><i class="fa fa-lg fa-plus"></i> Ingresar Médicos</a>
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
                                <th>Identificación Médico</th>
                                <th>Nombres Médico</th>
                                <th>Apellidos Médico</th>
                                <th>Especialidad Médico</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            
                            <?php foreach ($this -> modelo -> Listar() as $r) :?>
                                <tr>
                                    <td><?= $r -> idMedico ?></td>
                                    <td><?= $r -> medIdentificacion  ?></td>
                                    <td><?= $r -> medNombres ?></td>
                                    <td><?= $r -> medApellidos ?></td>
                                    <td><?= $r -> medEspecialidad ?></td>
                                    <td><?= $r -> medTelefono ?></td>
                                    <td><?= $r -> medCorreo ?></td>
                                    <td>
                                        <a class="btn btn-success btn-flat" href="?c=medicos&a=ingresarMedicos&id=<?= $r -> idMedico?>"><i class="fa fa-lg fa-edit"></i></a>
                                    </td>

                                    <td>
                                        <a class="btn btn-warning btn-flat" href="?c=medicos&a=eliminar&id=<?= $r -> idMedico ?>"><i class="fa fa-lg fa-trash"></i></a>
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