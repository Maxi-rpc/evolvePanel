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
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="">Ingresar Nombre</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="<?php echo set_value('nombre',$userInfo->nombre) ?>">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="">Ingresar Apellido</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="apellido" value="<?php echo set_value('apellido',$userInfo->apellido) ?>">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="">Ingresar Nickname</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="nickname" value="<?php echo set_value('nickname',$userInfo->nickname) ?>">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-3">
                                <div class="form-group">
                                  <label for="">Ingresar Facebook</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="facebook" value="<?php echo set_value('facebook',$red->user_facebook) ?>">
                                </div>
                              </div>
                              <div class="col-sm-3">
                                <div class="form-group">
                                  <label for="">Ingresar Instagram</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="instagtram" value="<?php echo set_value('instagtram',$red->user_instagram) ?>">
                                </div>
                              </div>
                              <div class="col-sm-3">
                                <div class="form-group">
                                  <label for="">Ingresar Twitter</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="twitter" value="<?php echo set_value('twitter',$red->user_twitter) ?>">
                                </div>
                              </div>
                              <div class="col-sm-3">
                                <div class="form-group">
                                  <label for="">Ingresar Twitch</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="twitch" value="<?php echo set_value('twitch',$red->user_twitch) ?>">
                                </div>
                              </div>
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