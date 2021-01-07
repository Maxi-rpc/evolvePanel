<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User-Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <?php if($this->session->flashdata('msj')): ?>
          <div class="row">
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fas fa-check"></i> Alert!</h5>
              <?php $this->session->flashdata('msj') ?>
            </div>
          </div>
        <?php endif ?>

        <div class="row">
          <div class="col-md-12">
            <!-- Profile -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('<?=base_url()?>assets/img/photo1.png') center center;">
                <h3 class="widget-user-username text-right"><?php echo $userInfo->nickname ?></h3>
                <h5 class="widget-user-desc text-right"> <?php foreach($sectores as $sec){
                  if($sec->id == $userInfo->sector){
                    echo $sec->nombre;
                  };
                } ?> </h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="<?=base_url()?>assets/img/user3-128x128.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">Facebok</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">Instagram</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">Twitter</span>
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
                <div class="card-tools">
                  <button type="button" class="btn btn-tool"> 
                    <a href="<?=base_url('profile/edit/'.$userInfo->id)?>"><i class="fas fa-edit"></i></a>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Datos Personales</strong>

                <p class="text-muted">
                  <?php 
                  echo $userInfo->nombre. " - " .$userInfo->apellido. " - " .$userInfo->email;
                  ?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Dirección </strong>

                <p class="text-muted">Dirección de la casa.</p>

                <hr>

                <strong><i class="far fa-share-alt mr-1"></i> Redes</strong>

                <p class="text-muted">Acá van las redes.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->