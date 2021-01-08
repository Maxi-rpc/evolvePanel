<!-- =========================================================== -->

            <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo empty($team->nombre) ? 'Nuevo Team':'Editar Team';?></h3>
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
                              <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="<?php echo set_value('name',$team->nombre) ?>">
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
