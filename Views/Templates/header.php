<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Autotronica EMS</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url;?>Assets/images/logo/Logo_proyect.png">
    <link href="<?php echo base_url;?>Assets/css/styles.css" rel="stylesheet" />
    <link href="<?php echo base_url;?>Assets/css/erika.css" rel="stylesheet" />
    <link href="<?php echo base_url;?>Assets/css/fonts.css" rel="stylesheet" />
    <link href="<?php echo base_url;?>Assets/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="<?php echo base_url;?>Assets/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-nav-principal">
        <a class="navbar-brand" style="margin-right:15px;" href="<?php echo base_url ?>Dashboard"><img class="img-login-nav" src="<?php echo base_url;?>Assets/images/logo/Logo_proyect.png" alt=""> Autotronica EMS</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar BUSCADOR-->
        <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>-->
        <!-- Navbar FIN DEL BUSCADOR-->
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Perfil</a>
                    <a class="dropdown-item" href="#">Cambiar Contraseña</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url; ?>Usuarios/salir">Cerrar Session</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu sb-dashboard-menu">
                    <div class="nav">


                        <!-- Botón expandible - Inicio -->
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInicio"
                            aria-expanded="false" aria-controls="collapseInicio">
                            <div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                            INICIO
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseInicio" aria-labelledby="headingInicio"
                            data-parent="#sidenavAccordion">
                            <!-- Contenido del colapso -->
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url ?>Dashboard"><i
                                        class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
                                <a class="nav-link" href="<?php echo base_url ?>Informes"><i
                                        class="fas fa-chart-line mr-2"></i>Informes</a>
                            </nav>
                        </div>

                        <!-- Botón expandible - Clientes -->
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes"
                            aria-expanded="false" aria-controls="collapseClientes">
                            <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                            CLIENTES
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseClientes" aria-labelledby="headingClientes"
                            data-parent="#sidenavAccordion">
                            <!-- Contenido del colapso -->
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url ?>Clientes"><i
                                        class="fas fa-users mr-2"></i>Clientes</a>
                                <a class="nav-link" href="<?php echo base_url ?>Consultaclientes"><i
                                        class="fas fa-search mr-2"></i>Consultar Clientes</a>
                            </nav>
                        </div>

                        <!-- Botón expandible - Vehiculos -->                          
                        <a class="nav-link" href="<?php echo base_url ?>Vehiculos"><i
                                class="fas fa-car mr-2"></i>VEHICULOS</a>                     

                        <!-- Botón expandible - Mantenimiento -->
                        <a class="nav-link collapsed" href="#" data-toggle="collapse"
                            data-target="#collapseMantenimiento" aria-expanded="false"
                            aria-controls="collapseMantenimiento">
                            <div class="sb-nav-link-icon"><i class="fa fa-wrench"></i></div>
                            MANTENIMIENTOS
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseMantenimiento" aria-labelledby="headingMantenimiento"
                            data-parent="#sidenavAccordion">
                            <!-- Contenido del colapso -->
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url ?>Mantenimientos"><i
                                        class="fas fa-wrench mr-2"></i>Mantenimientos</a>
                                <a class="nav-link" href="<?php echo base_url ?>Gestionmantenimientos"><i
                                        class="fas fa-cogs mr-2"></i>Gestión de Mantenimientos</a>
                            </nav>
                        </div>

                        <!-- Enlaces directos bajo MANTENIMIENTOS -->
                        <a class="nav-link" href="<?php echo base_url ?>Servicios"><i
                                class="fas fa-tools mr-2"></i>Servicios</a>
                        <a class="nav-link" href="<?php echo base_url ?>Repuestos"><i
                                class="fas fa-toolbox mr-2"></i>Repuestos</a>

                        <!-- Botón expandible - Personal -->
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePersonal"
                            aria-expanded="false" aria-controls="collapsePersonal">
                            <div class="sb-nav-link-icon"><i class="fas fa-hard-hat"></i></div>
                            PERSONAL
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePersonal" aria-labelledby="headingPersonal"
                            data-parent="#sidenavAccordion">
                            <!-- Contenido del colapso -->
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url ?>Areas"><i
                                        class="fas fa-building mr-2"></i>Áreas</a>
                                <a class="nav-link" href="<?php echo base_url ?>Empleados"><i
                                        class="fas fa-user-tie mr-2"></i>Empleados</a>
                            </nav>
                        </div>

                        <!-- Botón expandible - Empresa -->
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmpresa"
                            aria-expanded="false" aria-controls="collapseEmpresa">
                            <div class="sb-nav-link-icon"><i class="fa fa-building"></i></div>
                            EMPRESA
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseEmpresa" aria-labelledby="headingEmpresa"
                            data-parent="#sidenavAccordion">
                            <!-- Contenido del colapso -->
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url ?>Informascionempresa"><i
                                        class="fas fa-info-circle mr-2"></i>Información de Empresa</a>
                                <a class="nav-link" href="<?php echo base_url ?>Sucursales"><i
                                        class="fas fa-store-alt mr-2"></i>Sucursales</a>
                            </nav>
                        </div>

                        <!-- Botón expandible - Configuración -->
                        <a class="nav-link collapsed" href="#" data-toggle="collapse"
                            data-target="#collapseConfiguracion" aria-expanded="false"
                            aria-controls="collapseConfiguracion">
                            <div class="sb-nav-link-icon"><i class="fa fa-cog"></i></div>
                            CONFIGURACIÓN
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseConfiguracion" aria-labelledby="headingConfiguracion"
                            data-parent="#sidenavAccordion">
                            <!-- Contenido del colapso -->
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url ?>Usuarios"><i
                                        class="fas fa-user-friends mr-2"></i>Usuarios</a>
                                <a class="nav-link" href="<?php echo base_url ?>Categoriasusuarios"><i
                                        class="fas fa-users-cog mr-2"></i>Categoría de Usuarios</a>
                            </nav>
                        </div>



                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Usted ha ingresado como ADMINISTRADOR</div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid mt-2">