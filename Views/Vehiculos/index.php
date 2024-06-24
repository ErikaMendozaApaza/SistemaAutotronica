<?php include "Views/Templates/header.php"; ?>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Vehiculos</li>
</ol> -->
<div class="card-header bg-success text-white text-center">
    <h4 class="font-weight-bold">VEHICULOS</h4>
</div>
<!-- BOTON NUEVO -->
<button class="btn btn-primary mb-2 mt-4" type="button" onclick="frmVehiculo();"><i class="fas fa-plus"></i> Nuevo
    Vehiculo</button>

<!-- Tabla de Clientes -->
<div class="table-responsive">
    <table class="table table-light" id="tblVehiculos">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Motor</th>
                <th>Chasis</th>
                <th>Color</th>
                <th>CI_cliente</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se cargarán dinámicamente los datos de los vehiculos -->
        </tbody>
    </table>
</div>

<!-- Modal para Nuevo Vehiculo -->
<div id="nuevo_vehiculo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="title">Nuevo Vehiculo</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para Nuevo Cliente -->
                <form method="post" id="frmVehiculo" action="guardar_usuario.php">
                    <input type="hidden" id="id" name="id">

                    <div class="form-group">
                        <label for="placa">PLACA</label>
                        <input id="placa" class="form-control" type="text" name="placa"
                            placeholder="Placa del Vehiculo">
                    </div>
                    <div class="form-group">
                        <label for="tipo">TIPO</label>
                        <input id="tipo" class="form-control" type="text" name="tipo" placeholder="Tipo del Vehiculo">
                    </div>

                    <div class="form-group">
                        <label for="marca">MARCA</label>
                        <input id="marca" class="form-control" type="text" name="marca"
                            placeholder="Marca del Vehiculo">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="modelo">MODELO</label>
                                <input id="modelo" class="form-control" type="text" name="modelo"
                                    placeholder="Modelo del Vehiculo">
                            </div>
                            <div class="col-md-6">
                                <label for="motor">MOTOR</label>
                                <input id="motor" class="form-control" type="text" name="motor"
                                    placeholder="Motor del Vehiculo">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="chasis">CHASIS</label>
                        <textarea id="chasis" class="form-control" name="chasis" placeholder="Chasis del Vehiculo"
                            rows="2"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="color">COLOR</label>
                                <input id="color" class="form-control" type="text" name="color"
                                    placeholder="Correo Electronico">
                            </div>
                            <div class="col-md-6">
                                <label for="ci">CLIENTE</label>
                                <input id="ci" class="form-control" type="text" name="ci"
                                    placeholder="Numero de Telefono">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="button" onclick="registrarVehiculo(event);"
                        id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>