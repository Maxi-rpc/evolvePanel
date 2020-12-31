<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Perfil</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Perfil-Edit</li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- =========================================================== -->

            <div class="row">
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

            <!-- =========================================================== -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
</div>
<!-- /.content-wrapper -->