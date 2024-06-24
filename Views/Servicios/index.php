<?php include "Views/Templates/header.php"; ?>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Servicios</li>
</ol> -->
<div class="card-header bg-primary text-white text-center">
    <h4 class="font-weight-bold">SERVICIOS</h4>
</div>
<!-- BOTON NUEVO -->
<button class="btn btn-primary mb-2 mt-4" type="button" onclick="frmServicio();"><i class="fas fa-plus"></i> Nuevo
    Servicio</button>

<!-- Tabla de Servicio -->
<div class="table-responsive">
    <table class="table table-light" id="tblServicios">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Codigo de Servicio</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Tiempo Rapido</th>
                <th>Tiempo Lento</th>
                <th>Tiempo Promedio</th>
                <th>Costo Referencial</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se cargarán dinámicamente los datos de los Servicios -->
        </tbody>
    </table>
</div>

<!-- Modal para Nuevo Servicio -->
<div id="nuevo_servicio" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="title">Nuevo Servicio</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para Nuevo Servicio -->
                <form method="post" id="frmServicio" action="guardar_usuario.php">
                    <input type="hidden" id="id" name="id">

                    <div class="form-group">
                        <label for="codigoservicio">Codigo de Servicio</label>
                        <input id="codigoservicio" class="form-control" type="text" name="codigoservicio"
                            placeholder="Codigo de Servicio">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="descripcion">Descripcion</label>
                                <input id="descripcion" class="form-control" type="text" name="descripcion"
                                    placeholder="Descripcion del Servicio">
                            </div>
                            <div class="col-md-6">
                                <label for="tiemporapido">Tiempo Rapido</label>
                                <input id="tiemporapido" class="form-control" type="text" name="tiemporapido"
                                    placeholder="Tiempo Rapido">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tiempolento">Tiempo Lento</label>
                        <textarea id="tiempolento" class="form-control" name="tiempolento" placeholder="Tiempo Lento"
                            rows="2"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="tiempopromedio">Tiempo Promedio</label>
                                <input id="tiempopromedio" class="form-control" type="text" name="tiempopromedio"
                                    placeholder="Tiempo Promedio">
                            </div>
                            <div class="col-md-6">
                                <label for="costoreferencial">Costo Referencial</label>
                                <input id="costoreferencial" class="form-control" type="text" name="costoreferencial"
                                    placeholder="Costo Referencial">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="button" onclick="registrarServicio(event);"
                        id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>