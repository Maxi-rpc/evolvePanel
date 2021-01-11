<!-- =========================================================== -->

            <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Editar Perfil</h3>
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
                              <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" value="<?php echo set_value('firstname',$userInfo->nombre) ?>">
                            </div>
                            <div class="form-group">
                              <label for="">Ingresar Apellido</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="lastname" value="<?php echo set_value('lastname',$userInfo->apellido) ?>">
                            </div>
                            <div class="form-group">
                              <label for="">Ingresar Nickname</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="nickname" value="<?php echo set_value('nickname',$userInfo->nickname) ?>">
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