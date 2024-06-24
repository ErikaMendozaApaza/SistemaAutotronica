<?php include "Views/Templates/header.php"; ?>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Clientes</li>
</ol> -->

<div class="card-header bg-success text-white text-center">
    <h4 class="font-weight-bold">CLIENTES</h4>
</div>
<!-- BOTON NUEVO -->
<button class="btn btn-primary mb-2 mt-4" type="button" onclick="frmCliente();"><i class="fas fa-plus"></i> Nuevo
    Cliente</button>

<!-- Tabla de Clientes -->
<div class="table-responsive">
    <table class="table table-light" id="tblClientes">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Carnet</th>
                <th>Nombres</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Direccion</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se cargarán dinámicamente los datos de los clientes -->
        </tbody>
    </table>
</div>

<!-- Modal para Nuevo Cliente -->
<div id="nuevo_cliente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="title">Nuevo Cliente</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para Nuevo Cliente -->
                <form method="post" id="frmCliente" action="guardar_usuario.php">
                    <input type="hidden" id="id" name="id">

                    <div class="form-group">
                        <label for="ci">Numero de Carnet</label>
                        <input id="ci" class="form-control" type="text" name="ci"
                            placeholder="Numero del Carnet de Identidad">
                    </div>

                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input id="nombres" class="form-control" type="text" name="nombres" placeholder="Nombres">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="apellidopaterno">Apellido Paterno</label>
                                <input id="apellidopaterno" class="form-control" type="text" name="apellidopaterno"
                                    placeholder="Apellido Paterno">
                            </div>
                            <div class="col-md-6">
                                <label for="apellidomaterno">Apellido Materno</label>
                                <input id="apellidomaterno" class="form-control" type="text" name="apellidomaterno"
                                    placeholder="Apellido Materno">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <textarea id="direccion" class="form-control" name="direccion"
                            placeholder="Direccion de Domicilio" rows="2"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="correo">Correo Electronico</label>
                                <input id="correo" class="form-control" type="text" name="correo"
                                    placeholder="Correo Electronico">
                            </div>
                            <div class="col-md-6">
                                <label for="telefono">Telefono</label>
                                <input id="telefono" class="form-control" type="text" name="telefono"
                                    placeholder="Numero de Telefono">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="button" onclick="registrarCliente(event);"
                        id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>