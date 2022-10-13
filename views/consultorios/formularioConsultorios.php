<div class="row ">
    <div class="col-md-2">

    </div>
    <div class="col-md-8 p-3 bg-light">
        <h1 class="text-center">
            <?=$titulo?> Consultorios
        </h1>
        <legend>
            <?=$titulo?> los consultorios del sistema.
        </legend>
        <form class="" method="POST" action="?c=consultorios&a=guardarConsultorios">

            <input type="hidden" class="form-control" name="id" value="<?=$p -> get_idConsultorio()?>" required>

            <div class="form-group p-3">
                <label for="nombre" class="col-sm-4 col-form-label">Nombre Consultorio</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?=$p -> get_conNombre()?>" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Ingresar</button>

        </form>
    </div>
</div>