<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Admin Area</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Admin-Area</li>
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
              <div class="col-12">
                <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo empty($puesto->nombre) ? 'Nuevo Puesto':'Editar Puesto';?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                          <?php if(validation_errors()){ ?>
                            <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-ban"></i> Error!</h5>
                                <?= validation_errors('<li>','</li>') ?>
                            </div>
                          <?php } ?>
                          <?php echo form_open() ?>
                            <div class="form-group">
                              <label for="">Ingresar Nombre</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="<?php echo set_value('name',$puesto->nombre) ?>">
                            </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <?php echo form_close() ?>
                </div>
              </div>
            </div>

            <!-- =========================================================== -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
</div>
<!-- /.content-wrapper -->