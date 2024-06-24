<?php include "Views/Templates/header.php"; ?>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Empleados</li>
</ol> -->

<div class="card-header bg-success text-white text-center">
    <h4 class="font-weight-bold">EMPLEADOS</h4>
</div>
<!-- BOTON NUEVO -->
<button class="btn btn-primary mb-2 mt-4" type="button" onclick="frmEmpleado();"><i class="fas fa-plus"></i> Nuevo
    Empleado</button>

<!-- Tabla de Area -->
<div class="table-responsive">
    <table class="table table-light" id="tblEmpleados">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Codigo de Empleado</th>
                <th>Nombre</th>
                <th>Profesion</th>
                <th>Cargo</th>
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
<div id="nuevo_empleado" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="title">Nuevo Empleado</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para Nueva Area -->
                <form method="post" id="frmEmpleado" action="guardar_usuario.php">
                    <input type="hidden" id="id" name="id">

                    <div class="form-group">
                        <label for="codigoempleado">Codigo de Empleado</label>
                        <input id="codigoempleado" class="form-control" type="text" name="codigoempleado"
                            placeholder="Codigo de Empleado">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre"
                            placeholder="Nombre del Empleado">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="profesion">Profesion</label>
                                <input id="profesion" class="form-control" type="text" name="profesion"
                                    placeholder="Profesion del Empleado">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="cargo">Cargo</label>
                                <input id="cargo" class="form-control" type="text" name="cargo"
                                    placeholder="Cargo del Empleado">
                            </div>
                        </div>
                    </div>





                    <button class="btn btn-primary" type="button" onclick="registrarEmpleado(event);"
                        id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>