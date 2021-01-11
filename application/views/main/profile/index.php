<!-- =========================================================== -->

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
          <div class="col-6">
            <!-- Profile -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('<?=base_url()?>assets/img/photo1.png') center center;">
                <h3 class="widget-user-username text-right"><?php echo $userInfo->nickname ?></h3>
                <h5 class="widget-user-desc text-right"> <?php echo $sector->nombre.'-'.echo $puesto->nombre ?></h5>
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

                <strong><i class="fas fa-share-alt mr-1"></i> Redes</strong>

                <p class="text-muted">Acá van las redes.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div> <!-- /.col -->
          
          <div class="col-6">
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
                          <?php echo form_open('profile/edit/'.$userInfo->id) ?>
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
        <!-- /.row -->

<!-- =========================================================== -->