<div class="row ">
    <div class="col-md-2">

    </div>
    <div class="col-md-8 p-3 bg-light">
        <h1 class="text-center">
            <?=$titulo?> Usuarios
        </h1>
        <legend>
            <?=$titulo?> los usuarios del sistema.
        </legend>
        <form class="" method="POST" action="?c=usuarios&a=guardarUsuarios">

            <input type="hidden" class="form-control" name="id" placeholder="Login" value="<?=$p -> get_idUsuario()?>" required>

            <div class="form-group p-3">
                <label for="Login" class="col-sm-2 col-form-label">Login</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Login" placeholder="Login" value="<?=$p -> get_usuLogin()?>" required>
                </div>
            </div>

            <div class="form-group p-3">
                <label for="Password" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="Password" placeholder="contraseña" value="<?=$p -> get_usuPassword()?>" required>
                </div>
            </div>

            <div class="form-group p-3">
                <label class="col-sm-2 col-form-label" for="exampleFormControlSelect1">Estado</label>
                <select class="form-control" name="Estado" value="<?=$p -> get_usuEstado()?>" required>
                        <option>Activo</option>
                        <option>Inactivo</option>
                </select>
            </div>

            <div class="form-group p-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Rol</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Rol" placeholder="rol" value="<?=$p -> get_usuRol()?>" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Ingresar</button>

        </form>
    </div>
</div>