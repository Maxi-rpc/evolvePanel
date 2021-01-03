<body class="hold-transition login-page">
<div class="login-box ">
    <div class="login-logo"> 
        <a href="../../index2.html"><img src="" alt="">  EVOLVE | PANEL</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <?php if($this->session->flashdata('msj')): ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                    <?php echo $this->session->flashdata('msj') ?>
                </div>
            <?php endif ?>
        <p class="login-box-msg">Iniciar Sesión</p>

        <form action="<?php base_url() ?>login/validate" method="post" id="">
            <div class="input-group mb-3">
            <input name="email" type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input name="password" type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
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