<?php include "Views/Templates/header.php"; ?>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Sucursales</li>
</ol> -->
<div class="card-header bg-danger text-white text-center">
    <h4 class="font-weight-bold">SUCURSALES</h4>
</div>
<!-- BOTON NUEVO -->
<button class="btn btn-primary mb-2 mt-4" type="button" onclick="frmSucursal();"><i class="fas fa-plus"></i> Nueva
    Sucursal</button>

<!-- Tabla de Area -->
<div class="table-responsive">
    <table class="table table-light" id="tblSucursales">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Codigo de Sucursal</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se cargarán dinámicamente los datos de los Areas -->
        </tbody>
    </table>
</div>

<!-- Modal para Nueva Area -->
<div id="nuevo_sucursal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="title">Nueva Sucursal</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para Nueva Area -->
                <form method="post" id="frmSucursal" action="guardar_usuario.php">
                    <input type="hidden" id="id" name="id">

                    <div class="form-group">
                        <label for="codigosucursal">Codigo de Sucursal</label>
                        <input id="codigosucursal" class="form-control" type="text" name="codigosucursal"
                            placeholder="Codigo de Sucursal">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre"
                            placeholder="Nombre de la Sucursal">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="direccion">Direccion</label>
                                <input id="direccion" class="form-control" type="text" name="direccion"
                                    placeholder="Direccion de la Sucursal">
                            </div>
                        </div>
                    </div>





                    <button class="btn btn-primary" type="button" onclick="registrarSucursal(event);"
                        id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>