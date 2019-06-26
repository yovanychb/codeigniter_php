<div class="row">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">tag_faces</i>
                <input type="hidden" id="id" value="<?= $usuario->id_usuarios ?>">
                <input type="text" name="" id="txtNombre" class="validate" value="<?= $usuario->nombre ?>">
                <label for="txtNombre" class="active">Nombres</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">perm_identity</i>
                <input type="text" name="" id="txtApellido" class="validate" value="<?= $usuario->apellido ?>">
                <label for="txtApellido" class="active">Apellidos</label>
            </div>
        </div>

        <button class="btn waves-effect waves-light" id="btn" value="editar">Guardar
            <i class="material-icons right">create</i>
        </button>

    </form>
</div>