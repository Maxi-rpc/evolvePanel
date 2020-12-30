<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- Profile -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header"
                   style="background: url('../dist/img/photo1.png') center center;">
                <h3 class="widget-user-username"><?php echo $user['nickname'] ?></h3>
                <h5 class="widget-user-desc"> <?php foreach($sectores as $sec){
                  if($sec->id_sector == $user['sector']){
                    echo $sec->nombre;
                  };
                } ?> </h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Info de Mí</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Datos Personales</strong>

                <p class="text-muted">
                  <?php 
                  echo $user['nombre']. " - " .$user['apellido']. " - " .$user['email'];
                  ?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Dirección </strong>

                <p class="text-muted">Dirección de la casa.</p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Redes</strong>

                <p class="text-muted">Acá van las redes.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar Perfil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <?php if(validation_errors()) { ?>
                    <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    <?php echo validation_errors('<li>', '</li>'); ?>
                  </div>
                <?php } ?>

                <?php form_open('perfil/updatePerfil',array('method'=>'POST')); ?>

                <form class="form-horizontal">
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="inputName" placeholder="firstname">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="inputName2" placeholder="lastname">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="inputExperience" placeholder="nickname">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-12">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-danger">Guardar</button>
                    </div>
                  </div>
                </form>

                <?php form_close() ?>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->