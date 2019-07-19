<?php include '/index.php'?>

    <h3 style="text-align:center">
        <?= $titulo ?>
    </h3>
    <br>
    <div style="width:50%; margin:auto;">
        <div id="frm">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">tag_faces</i>
                            <input type="hidden" id="id">
                            <input type="text" name="" id="txtNombre" class="validate">
                            <label for="txtNombre">Nombres</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input type="text" name="" id="txtApellido" class="validate">
                            <label for="txtApellido">Apellidos</label>
                        </div>
                    </div>

                    <button class="btn waves-effect waves-light" id="btn" value="ingresar">Agregar
                        <i class="material-icons right">add</i>
                    </button>

                </form>
            </div>
        </div>
        <br>
        <div>
            <!---creacion de la tabla-->
            <table class="striped responsive-table centered">
                <!---encabezado-->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th colspan='2'>ACCION</th>
                    </tr>
                </thead>
                <!---cuerpo-->
                <tbody id="cuerpo"></tbody>
            </table>
        </div>
    </div>

    <script src="<?= base_url('assets/js/script.js') ?>"></script>
    <?php include '../components/footer.php'?>
