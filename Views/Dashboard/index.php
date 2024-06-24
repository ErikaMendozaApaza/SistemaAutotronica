<?php include "Views/Templates/header.php"; ?>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Areas</li>
</ol> -->
<div class="card-header text-white text-center bg-main-principal" style="margin-bottom:1em;">
    <h1 class="font-weight-bold">BIENVENIDO AL SISTEMA</h1>
    <img class="img-login-dashboard" src="<?php echo base_url;?>Assets/images/logo/Logo_proyect.png" alt="">
</div>





<!-- AQUI VA EL CONTENIDO DE LA VISTA DE DASHBOARD-->


<div class="row" >
    <div class="col-xl-3 col-md-7">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total de Ventas</h5>
                <h2 class="font-weight-bold"> Bs. 500</h2>
            </div>
        </div>

    </div>
    <div class="col-xl-9 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Porcentaje sobre la meta</h5>
                <div class="progress" style="height: 30px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
                <p class="card-text mt-2">Total Ventas</p>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-info">
            <div class="card-body d-flex text-white">
                Clientes
                <i class="fas fa-users fa-2x ml-auto"></i>
            </div>
            <div class="card-footer d-flex aling-items-center justify-content-between">
                <a href="<?php echo base_url ?>Clientes" class="text-white">Ver Detalle</a>
                <span class="text-white">10</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success">
            <div class="card-body d-flex text-white">
                Vehiculos
                <i class="fas fa-car fa-2x ml-auto"></i>
            </div>
            <div class="card-footer d-flex aling-items-center justify-content-between">
                <a href="<?php echo base_url ?>Vehiculos" class="text-white">Ver Detalle</a>
                <span class="text-white">10</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary">
            <div class="card-body d-flex text-white">
                Mantenimientos
                <i class="fa fa-wrench fa-2x ml-auto"></i>
            </div>
            <div class="card-footer d-flex aling-items-center justify-content-between">
                <a href="<?php echo base_url ?>Mantenimientos" class="text-white">Ver Detalle</a>
                <span class="text-white">4</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger">
            <div class="card-body d-flex text-white">
                Personal
                <i class="fas fa-hard-hat fa-2x ml-auto"></i>
            </div>
            <div class="card-footer d-flex aling-items-center justify-content-between">
                <a href="<?php echo base_url ?>Empleados" class="text-white">Ver Detalle</a>
                <span class="text-white">2</span>
            </div>
        </div>
    </div>
</div>



<!-- <div class="card">
    <div class="card-body">
        <h5 class="card-title">Estadísticas Mensuales</h5>
        <div class="row">
            <div class="col-4">
                <h3 class="font-weight-bold">350</h3>
                <p class="text-muted">Nuevas Ordenes de Trabajo</p>
            </div>
            <div class="col-4">
                <h3 class="font-weight-bold">2</h3>
                <p class="text-muted">Usuarios registrados</p>
            </div>
            <div class="col-4">
                <h3 class="font-weight-bold">85%</h3>
                <p class="text-muted">Tasa de cumplimiento</p>
            </div>
        </div>
    </div>
</div> -->


















<div class="card">
    <div class="card-body">
        <h5 class="card-title">Mantenimientos Completados</h5>
        <div class="count-up">
            <span class="counter">0</span>
        </div>
        <p class="text-muted">Desde el inicio</p>
    </div>
</div>

<script>
$(document).ready(function() {
    $('.count-up .counter').countUp({
        delay: 10,
        time: 1000
    });
});
</script>








<!-- AQUI TERMINA EL CONTENIDO DE LA VISTA DE DASHBOARD-->




<?php include "Views/Templates/footer.php"; ?>