<?php include "Views/Templates/header.php"; ?>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Usuarios</li>
</ol> -->

<div class="card-header bg-success text-white text-center">
    <h4 class="font-weight-bold">USUARIOS</h4>
</div>
<!--BOTON NUEVO-->
<button class="btn btn-primary mb-2 mt-4" type="button" onclick="frmUsuario();"><i class="fas fa-plus"></i> Nuevo
    Usuario</button>
<table class="table table-light" id="tblUsuarios">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Usuasrio</th>
            <th>Nombre</th>
            <th>Caja</th>
            <th>Estado</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
        </tr>
    </tbody>
</table>
<!--ESTA SECCION GENERA UNA PANTALLA EMERGENTE CON UN FORMULARIO PARA AGREGAR UN NUEVO USUARIO-->
<div id="nuevo_usuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="title">Nuevo Usuario</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="frmUsuario">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <!--ESTA SIGUIENTE LINEA SIGUIENTE ES PARA AGREGAR UN INPUT OCULTO EL ID DE LA FILA SELECCIONADA -->
                        <input type="hidden" id="id" name="id">

                        <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre"
                            placeholder="Nombre del usuario">
                    </div>
                    <!--EN ESTA SECCION CONTRASEÑA Y CONFIRMAR CONTRASEÑA SE UNEN EN UNA MISMA FILA-->
                    <div class="row" id="claves">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="clave">Contraseña</label>
                                <input id="clave" class="form-control" type="password" name="clave"
                                    placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="confirmar">Confirmar Contraseña</label>
                                <input id="confirmar" class="form-control" type="password" name="confirmar"
                                    placeholder="Confirmar Contraseña">
                            </div>
                        </div>
                    </div>
                    <!--ESTA SECCION ES PARA MOSTRAR Y SELECCIONAR LAS OPCIONES QUE EXISTEN EN CAJA -->
                    <div class="form-group">
                        <label for="caja">Caja</label>
                        <select id="caja" class="form-control" name="caja">
                            <?php foreach ($data['cajas'] as $row){ ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['caja']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="button" onclick="registrarUser(event);"
                        id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>