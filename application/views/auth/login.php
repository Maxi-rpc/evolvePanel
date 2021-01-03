<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <link rel="icon" href="<?=base_url()?>assets/img/logo/evolveteamfavico512x512.png" type="image/png">
        <title>Evolve | Panel</title>

        <!-- Font Awesome Icons -->
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
            integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
            crossorigin="anonymous"
        />
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/adminlte.min.css" />
        <!-- Google Font: Source Sans Pro -->
        <link
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
            rel="stylesheet"
        />
    </head>
    <body class="hold-transition login-page">
        <div class="login-box ">
            <div class="login-logo"> 
                <a href="../../index2.html"><img src="" alt="">  EVOLVE | PANEL</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                <p class="login-box-msg">Iniciar Sesión</p>

                <form action="<?php base_url() ?>login/validate" method="post" id="formLogin">
                    <div class="input-group mb-3" id="email">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback"></div>
                    </div>
                    <div class="input-group mb-3" id="password">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback"></div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                    </div>
                    <!-- /.col -->
                    </div>
                </form>
                <p class="mb-1">
                    <a href="forgot-password.html">Olvidé mi contraseña</a>
                </p>
                </div>
                <!-- /.login-card-body -->
            </div>
            </div>
        <!-- /.login-box -->
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="<?php base_url() ?>assets/js/jquery/jquery.js"></script>
        <script src="<?php base_url() ?>assets/js/auth/login.js"></script>
    </body>
</html>