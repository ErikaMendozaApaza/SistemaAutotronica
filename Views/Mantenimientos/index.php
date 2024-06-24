<?php include "Views/Templates/header.php"; ?>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Mantenimientos</li>
</ol> -->
<div class="card-header bg-primary text-white text-center">
    <h4 class="font-weight-bold">MANTENIMIENTOS</h4>
</div>
<!-- BOTON NUEVO -->
<button class="btn btn-primary mb-2 mt-4" type="button" onclick="frmMantenimiento();"><i class="fas fa-plus"></i> Nuevo
    Mantenimiento</button>

<!-- Tabla de Clientes -->
<div class="table-responsive">
    <table class="table table-light" id="tblMantenimientos">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Cod Mantenimiento</th>
                <th>Cod Sucursal</th>
                <th>Placa</th>
                <th>Recepcion</th>
                <th>Finalizacion</th>
                <th>Entrega</th>
                <th>Km Recibido</th>
                <th>Km Entrega</th>
                <th>Problema</th>
                <th>Inventario</th>
                <th>Autorizacion</th>
                <th>Costo Total</th>
                <th>Estado Mantenimiento</th>
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
<div id="nuevo_mantenimiento" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="title">Nuevo Mantenimiento</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para Nuevo Cliente -->
                <form method="post" id="frmMantenimiento" action="guardar_usuario.php">
                    <input type="hidden" id="id" name="id">

                    <div class="form-group">
                        <label for="codigomantenimiento">Codigo de Mantenimiento</label>
                        <input id="codigomantenimiento" class="form-control" type="text" name="codigomantenimiento"
                            placeholder="Codigo de Mantenimiento">
                    </div>

                    <div class="form-group">
                        <label for="codigosucursal">Codigo de Sucursal</label>
                        <input id="codigosucursal" class="form-control" type="text" name="codigosucursal"
                            placeholder="Codigo de Sucursal">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="placavehiculo">Placa del Vehiculo</label>
                                <input id="placavehiculo" class="form-control" type="text" name="placavehiculo"
                                    placeholder="Placa del Vehiculo">
                            </div>
                            <div class="col-md-6">
                                <label for="fecharecepcion">Fecha de Recepcion</label>
                                <input id="fecharecepcion" class="form-control" type="text" name="fecharecepcion"
                                    placeholder="Fecha de Recepcion">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kilometrajerecibido">Kilometraje Recibido</label>
                        <textarea id="kilometrajerecibido" class="form-control" name="kilometrajerecibido"
                            placeholder="Kilometraje Recibido" rows="2"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="descripcionproblema">Descripcion del Problema</label>
                                <input id="descripcionproblema" class="form-control" type="text"
                                    name="descripcionproblema" placeholder="Descripcion del Problema">
                            </div>
                            <div class="col-md-6">
                                <label for="inventariovehiculo">Inventario de Vehiculo</label>
                                <input id="inventariovehiculo" class="form-control" type="text"
                                    name="inventariovehiculo" placeholder="Inventario de Vehiculo">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="autorizacionrepuestos">Autorizacion para Repuestos</label>
                        <textarea id="autorizacionrepuestos" class="form-control" name="autorizacionrepuestos"
                            placeholder="Autorizacion para Repuestos" rows="2"></textarea>
                    </div>

                    <button class="btn btn-primary" type="button" onclick="registrarMantenimiento(event);"
                        id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>