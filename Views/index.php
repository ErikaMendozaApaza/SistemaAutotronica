<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Iniciar Session | Sistema Autotronica</title>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url;?>Assets/images/logo/Logo_proyect.png">
        <link href="<?php echo base_url;?>Assets/css/styles.css" rel="stylesheet" />
        <link href="<?php echo base_url;?>Assets/css/erika.css" rel="stylesheet" />
        <link href="<?php echo base_url;?>Assets/css/fonts.css" rel="stylesheet" />
        <script src="<?php echo base_url;?>Assets/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-login-principal">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header" style="display:grid;place-items:center center;">
                                        <h3 class="text-center font-weight-light my-4">Iniciar Sesión</h3>
                                        <img class="img-login" src="<?php echo base_url;?>Assets/images/logo/Logo_proyect.png" alt="">
                                    </div>
                                    <div class="card-body">
                                        <form id="frmLogin">
                                            <div class="form-group">
                                                <label class="small mb-1" for="usuario"><i class="fas fa-user"></i> Usuario</label>
                                                <input class="form-control py-4" id="usuario" name="usuario" type="text" placeholder="Ingrese Usuario" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="clave"><i class="fas fa-key"></i> Contraseña</label>
                                                <input class="form-control py-4" id="clave" name="clave" type="password" placeholder="Ingrese Contraseña" />
                                            </div>
                                            <div class="alert alert-danger text-center d-none" id="alerta" role="alert">
                                            </div>

                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary btn-login" type="submit" onclick="frmLogin(event);">Ingresar</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Sistema Autotronica</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?php echo base_url;?>Assets/js/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url;?>Assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url;?>Assets/js/scripts.js"></script>
        <script>
            const base_url="<?php echo base_url; ?>";
        </script>
        <script src="<?php echo base_url;?>Assets/js/funciones.js"></script>
    </body>
</html>
