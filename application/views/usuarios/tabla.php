<?php

foreach ($usuarios as $usuario) {
    ?>
    <tr>
        <td><?= $usuario->id_usuarios ?></td>
        <td><?= $usuario->nombre ?></td>
        <td><?= $usuario->apellido ?></td>
        <td>
            <button class="btn waves-effect waves-light btn-small btnEditar" value="<?= $usuario->id_usuarios ?>">Editar
                <i class="material-icons left">create</i>
            </button>
            <button class="btn waves-effect waves-light btn-small btnEliminar red" value="<?= $usuario->id_usuarios ?>">Eliminar
                <i class="material-icons left">delete_sweep</i>
            </button>
           
        </td>
    </tr>
<?php
}
?>