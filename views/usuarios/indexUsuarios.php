
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8">
            <h1 class="ps-3">Lista Usuarios</h1>
        </div>
        <div class="col-md-4 p-3">
            <a class="btn btn-primary btn-flat" href="?c=usuarios&a=ingresarUsuarios"><i class="fa fa-lg fa-plus"></i> Ingresar Usuarios</a>
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
                                <th>Login</th>
                                <th>Password</th>
                                <th>Estado</th>
                                <th>Rol</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php foreach ($this->modelo->Listar() as $r) :?>
                                <tr>
                                    <td><?= $r -> idUsuario ?></td>
                                    <td><?= $r -> usuLogin ?></td>
                                    <td><?= $r -> usuPassword ?></td>
                                    <td><?= $r -> usuEstado ?></td>
                                    <td><?= $r -> usuRol ?></td>
                                    <td>
                                        <a class="btn btn-success btn-flat" href="?c=usuarios&a=ingresarUsuarios&id=<?= $r -> idUsuario ?>"><i class="fa fa-lg fa-edit"></i></a>
                                    </td>

                                    <td>
                                        <a class="btn btn-warning btn-flat" href="?c=usuarios&a=eliminar&id=<?= $r -> idUsuario?>"><i class="fa fa-lg fa-trash"></i></a>
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