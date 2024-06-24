<?php include "Views/Templates/header.php"; ?>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Areas</li>
</ol> -->
<div class="card-header bg-danger text-white text-center">
    <h4 class="font-weight-bold">AREAS</h4>
</div>
<!-- BOTON NUEVO -->
<button class="btn btn-primary mb-2 mt-4" type="button" onclick="frmArea();"><i class="fas fa-plus"></i> Nueva
    Area</button>

<!-- Tabla de Area -->
<div class="table-responsive">
    <table class="table table-light" id="tblAreas">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Codigo de Area</th>
                <th>Nombre</th>
                <th>Descripcion</th>
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
<div id="nuevo_area" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="title">Nueva Area</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para Nueva Area -->
                <form method="post" id="frmArea" action="guardar_usuario.php">
                    <input type="hidden" id="id" name="id">

                    <div class="form-group">
                        <label for="codigoarea">Codigo de Area</label>
                        <input id="codigoarea" class="form-control" type="text" name="codigoarea"
                            placeholder="Codigo de Area">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre del Area">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="descripcion">Descripcion</label>
                                <input id="descripcion" class="form-control" type="text" name="descripcion"
                                    placeholder="Descripcion del Area">
                            </div>
                        </div>
                    </div>





                    <button class="btn btn-primary" type="button" onclick="registrarArea(event);"
                        id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>