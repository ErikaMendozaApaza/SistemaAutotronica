<?php include "Views/Templates/header.php"; ?>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Repuestos</li>
</ol> -->
<div class="card-header bg-primary text-white text-center">
    <h4 class="font-weight-bold">REPUESTOS</h4>
</div>
<!-- BOTON NUEVO -->
<button class="btn btn-primary mb-2 mt-4" type="button" onclick="frmRepuesto();"><i class="fas fa-plus"></i> Nuevo
    Repuesto</button>

<!-- Tabla de Repuesto -->
<div class="table-responsive">
    <table class="table table-light" id="tblRepuestos">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Codigo de Repuesto</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Costo</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Cantidad</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se cargarán dinámicamente los datos de los Repuestos -->
        </tbody>
    </table>
</div>

<!-- Modal para Nuevo Repuesto -->
<div id="nuevo_repuesto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="title">Nuevo Repuesto</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para Nuevo Repuesto -->
                <form method="post" id="frmRepuesto" action="guardar_usuario.php">
                    <input type="hidden" id="id" name="id">

                    <div class="form-group">
                        <label for="codigorepuesto">Codigo de Repuesto</label>
                        <input id="codigorepuesto" class="form-control" type="text" name="codigorepuesto"
                            placeholder="Codigo de Repuesto">
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
                                    placeholder="Descripcion del Repuesto">
                            </div>
                            <div class="col-md-6">
                                <label for="costocompra">Costo de Compra</label>
                                <input id="costocompra" class="form-control" type="text" name="costocompra"
                                    placeholder="Costo de Compra">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="precioventa">Precio de Venta</label>
                        <textarea id="precioventa" class="form-control" name="precioventa" placeholder="Precio de Venta"
                            rows="2"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="codigocategoria">Codigo de Categoria</label>
                                <input id="codigocategoria" class="form-control" type="text" name="codigocategoria"
                                    placeholder="Codigo de la Categoria">
                            </div>
                            <div class="col-md-6">
                                <label for="cantidad">Cantidad</label>
                                <input id="cantidad" class="form-control" type="text" name="cantidad"
                                    placeholder="Cantidad en Stock">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="button" onclick="registrarRepuesto(event);"
                        id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>