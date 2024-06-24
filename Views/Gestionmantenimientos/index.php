<?php include "Views/Templates/header.php"; ?>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Gestion de Mantenimientos</li>
</ol> -->


<div class="card">
    <div class="card-header bg-primary text-white text-center">
        <h4 class="font-weight-bold">GESTION DE MANTENIMIENTOS</h4>
    </div>

    <div class="card-body mt-4 mb-4">
        <h5 class="card-title">EN ESTE APARTADO USTED PODRA GESTIONAR LAS ACTIVIDADES PARA LLEVAR A CABO EL
            MANTENIMIENTO</h5>

        <form id="frmGestionmantenimiento" method="post" action="Gestionmantenimientos.php">
            <div class="form-group">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <label for="codigomantenimiento" class="text-primary"><b>Por favor ingrese el Codigo
                                Mantenimiento que va a Gestionar</b></label>
                        <input type="hidden" id="idmantenimiento" name="idmantenimiento">
                        <input type="hidden" id="codigomantenimientoh" name="codigomantenimientoh">
                        <input type="hidden" id="totalserviciosh" name="totalserviciosh">
                        <input type="hidden" id="totalrepuestosh" name="totalrepuestosh">
                        <input type="hidden" id="totalmantenimientoh" name="totalmantenimientoh">
                        <input id="codigomantenimiento" class="form-control" type="text" name="codigomantenimiento"
                            placeholder="Ingresar Codigo" onkeyup="buscarCodigomantenimiento(event);">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary btn-block" type="button"
                            onclick="buscarCodigomantenimientoDesdeBoton();">Buscar</button>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="codigomantenimiento"><b>CODIGO</b></label>
                            <input id="codigomantenimiento1" class="form-control" type="text"
                                name="codigomantenimiento1" placeholder="Codigo" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="codigosucursal"><b>SUCURSAL</b></label>
                            <input id="codigosucursal" class="form-control" type="text" name="codigosucursal"
                                placeholder="Sucursal" disabled>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="placavehiculo"><b>INFORMACION DEL VEHICULO</b></label>
                            <input id="placavehiculo" class="form-control" type="text" name="placavehiculo"
                                placeholder="Placa del Vehiculo" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="carnetcliente"><b>INFORMACION DEL PROPIETARIO</b></label>
                            <input id="carnetcliente" class="form-control" type="text" name="carnetcliente"
                                placeholder="Nombre Propietario" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>




<div class="card">
    <div class="card-body bg-white">
        <h5 class="card-title">SERVICIOS REALIZADOS</h5>
        <!-- BOTON NUEVO -->
        <button class="btn btn-primary mb-2" type="button" onclick="frmDetalleservicio();"><i class="fas fa-plus"></i>
            Agregar Nuevo Servicio</button>

        <!-- SECCION DE TABLA DE REPUESTOS CAMBIADOS - Tabla 1 -->
        <table id="tabla1" class="table table-light table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Ubicacion</th>
                    <th>Responsabe</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Sub_Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tblDetalleservicios">
                <!-- Aquí va el contenido de la tabla 1 -->
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label for="totalservicios" class="font-weight-bold">Total por Servicios</label>
                    <input id="totalservicios" class="form-control text-right" type="text" name="totalservicios"
                        placeholder="Total por Repuestos" disabled>
                    <!--<button class="btn btn-primary mt-2 btn-block" type="button">Guardar Repuestos</button>-->
                </div>
            </div>
        </div>
    </div>
</div>





<div class="card">
    <div class="card-body">
        <h5 class="card-title">RESPUESTOS CAMBIADOS</h5>

        <!-- BOTON NUEVO -->
        <button class="btn btn-primary mb-2" type="button" onclick="frmDetallerepuesto();"><i class="fas fa-plus"></i>
            Agregar Nuevo Repuesto</button>
        <!-- SECCION DE TABLA DE REPUESTOS CAMBIADOS - Tabla 2 -->
        <table id="tabla2" class="table table-light table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Ubicacion</th>
                    <th>Responsabe</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Sub_Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tblDetallerepuestos">
                <!-- Aquí va el contenido de la tabla 2 -->
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label for="totalrepuestos" class="font-weight-bold">Total por Repuestos</label>
                    <input id="totalrepuestos" class="form-control text-right" type="text" name="totalrepuestos"
                        placeholder="Total por Repuestos" disabled>
                    <!--<button class="btn btn-primary mt-2 btn-block" type="button">Guardar Repuestos</button>-->
                </div>
            </div>
        </div>
    </div>
</div>




<!--SECCION TOTAL A PAGAR-->
<div class="row">
    <div class="col-md-3 ml-auto">
        <div class="form-group">
            <label for="totalmantenimiento" class="font-weight-bold">Total</label>
            <input id="totalmantenimiento" class="form-control text-right" type="text" name="totalmantenimiento"
                placeholder="Total a Pagar" disabled>
            <button class="btn btn-primary mt-2 btn-block" type="button">GENERAR REPORTE</button>
        </div>
    </div>
</div>












<!-- Modal para Nuevo Detalle de Servicio -->
<div id="nuevo_detalleservicio" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
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
                <!-- Formulario para Nueva Area -->
                <form method="post" id="frmDetalleservicio" action="Gestionmantenimientos.php">
                    <input type="hidden" id="id" name="id">
                    <!--OCULTO DE ID DETALLE REPUESTO-->
                    <input type="hidden" id="codigomantenimiento2h" name="codigomantenimiento2h">
                    <!--OCULTO DE ID DETALLE REPUESTO-->
                    <input type="hidden" id="codigoservicioh" name="codigoservicioh">
                    <!--OCULTO DE ID DETALLE REPUESTO-->
                    <input type="hidden" id="nombreservicioh" name="nombreservicioh">
                    <!--OCULTO DE ID DETALLE REPUESTO-->
                    <input type="hidden" id="descripcionservicioh" name="descripcionservicioh">
                    <!--OCULTO DE ID DETALLE REPUESTO-->
                    <input type="hidden" id="precioservicioh" name="precioservicioh">
                    <!--OCULTO DE ID DETALLE REPUESTO-->
                    <input type="hidden" id="subtotalservicioh" name="subtotalservicioh">
                    <!--OCULTO DE ID DETALLE REPUESTO-->



                    <div class="form-group">
                        <div class="row align-items-end">
                            <div class="col-md-5">
                                <label for="codigoserviciobuscar">Codigo de Servicio</label>
                                <input id="codigoserviciobuscar" class="form-control" type="text"
                                    name="codigoserviciobuscar" placeholder="Codigo de Servicio">
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block" type="button"
                                    onclick="buscarCodigoservicio(event);" id="btnBuscarcodigoservicio">Buscar</button>
                            </div>
                            <div class="col-md-4">
                                <label for="codigomantenimiento2">Mantenimiento</label>
                                <input id="codigomantenimiento2" class="form-control" type="text"
                                    name="codigomantenimiento2" placeholder="" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="codigoservicio">Codigo</label>
                                <input id="codigoservicio" class="form-control" type="text" name="codigoservicio"
                                    placeholder="" disabled>
                            </div>
                            <div class="col-md-9">
                                <label for="nombreservicio">Nombre Repuesto</label>
                                <input id="nombreservicio" class="form-control" type="text" name="nombreservicio"
                                    placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripcionservicio">Descripcion</label>
                        <textarea id="descripcionservicio" class="form-control" name="descripcionservicio"
                            placeholder="" rows="3" disabled></textarea>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="precioservicio">Precio</label>
                                <input id="precioservicio" class="form-control" type="text" name="precioservicio"
                                    placeholder="" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="cantidadservicio">Cantidad</label>
                                <!--<input id="cantidadrepuesto" class="form-control" type="number" name="cantidadrepuesto" placeholder="Cantidad" min="1" onkeyup="calculasubtotalDetallerepuestos(event);">-->
                                <input id="cantidadservicio" class="form-control" type="number" name="cantidadservicio"
                                    placeholder="Cantidad" min="1" oninput="calculasubtotalDetalleservicios(event);">

                            </div>
                            <div class="col-md-4">
                                <label for="subtotalservicio" class="text-primary font-weight-bold">Sub-Total</label>
                                <input id="subtotalservicio" class="form-control text-primary font-weight-bold"
                                    type="text" name="subtotalservicio" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="button" onclick="registrarDetalleservicio(event);"
                        id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>








<!-- Modal para Nuevo Detalle de Repuesto -->
<div id="nuevo_detallerepuesto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
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
                <!-- Formulario para Nueva Area -->
                <form method="post" id="frmDetallerepuesto" action="Gestionmantenimientos.php">
                    <input type="hidden" id="id" name="id">
                    <!--OCULTO DE ID DETALLE REPUESTO-->
                    <input type="hidden" id="codigomantenimiento3h" name="codigomantenimiento3h">
                    <!--OCULTO DE ID DETALLE REPUESTO-->
                    <input type="hidden" id="codigorepuestoh" name="codigorepuestoh">
                    <!--OCULTO DE ID DETALLE REPUESTO-->
                    <input type="hidden" id="nombrerepuestoh" name="nombrerepuestoh">
                    <!--OCULTO DE ID DETALLE REPUESTO-->
                    <input type="hidden" id="descripcionrepuestoh" name="descripcionrepuestoh">
                    <!--OCULTO DE ID DETALLE REPUESTO-->
                    <input type="hidden" id="preciorepuestoh" name="preciorepuestoh">
                    <!--OCULTO DE ID DETALLE REPUESTO-->
                    <input type="hidden" id="subtotalrepuestoh" name="subtotalrepuestoh">
                    <!--OCULTO DE ID DETALLE REPUESTO-->



                    <div class="form-group">
                        <div class="row align-items-end">
                            <div class="col-md-5">
                                <label for="codigorepuestobuscar">Codigo de Repuesto</label>
                                <input id="codigorepuestobuscar" class="form-control" type="text"
                                    name="codigorepuestobuscar" placeholder="Codigo de Repuesto">
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block" type="button"
                                    onclick="buscarCodigorepuesto(event);" id="btnBuscarcodigorepuesto">Buscar</button>
                            </div>
                            <div class="col-md-4">
                                <label for="codigomantenimiento3">Mantenimiento</label>
                                <input id="codigomantenimiento3" class="form-control" type="text"
                                    name="codigomantenimiento3" placeholder="" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="codigorepuesto">Codigo</label>
                                <input id="codigorepuesto" class="form-control" type="text" name="codigorepuesto"
                                    placeholder="" disabled>
                            </div>
                            <div class="col-md-9">
                                <label for="nombrerepuesto">Nombre Repuesto</label>
                                <input id="nombrerepuesto" class="form-control" type="text" name="nombrerepuesto"
                                    placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripcionrepuesto">Descripcion</label>
                        <textarea id="descripcionrepuesto" class="form-control" name="descripcionrepuesto"
                            placeholder="" rows="3" disabled></textarea>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="preciorepuesto">Precio</label>
                                <input id="preciorepuesto" class="form-control" type="text" name="preciorepuesto"
                                    placeholder="" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="cantidadrepuesto">Cantidad</label>
                                <!--<input id="cantidadrepuesto" class="form-control" type="number" name="cantidadrepuesto" placeholder="Cantidad" min="1" onkeyup="calculasubtotalDetallerepuestos(event);">-->
                                <input id="cantidadrepuesto" class="form-control" type="number" name="cantidadrepuesto"
                                    placeholder="Cantidad" min="1" oninput="calculasubtotalDetallerepuestos(event);">

                            </div>
                            <div class="col-md-4">
                                <label for="subtotalrepuesto" class="text-primary font-weight-bold">Sub-Total</label>
                                <input id="subtotalrepuesto" class="form-control text-primary font-weight-bold"
                                    type="text" name="subtotalrepuesto" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="button" onclick="registrarDetallerepuesto(event);"
                        id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>







<?php include "Views/Templates/footer.php"; ?>