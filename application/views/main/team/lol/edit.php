<!-- =========================================================== -->

            <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo empty($partidas->nombre) ? 'Nueva Partida':'Editar Partida';?></h3>
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
                              <label for="">Ingresar Id Partida</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="id_partida" value="<?php echo set_value('id_partida',$partidas->id_partida) ?>">
                            </div>
                            <div class="form-group">
                              <label for="">Ingresar Teams</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="id_teams" value="<?php echo set_value('id_teams',$partidas->id_teams) ?>">
                            </div>
                            <div class="form-group">
                              <label for="">Ingresar Nombre</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="<?php echo set_value('name',$partidas->nombre) ?>">
                            </div>
                            <div class="form-group">
                              <label for="">Ingresar Fecha</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="fecha" value="<?php echo set_value('fecha',$partidas->fecha) ?>">
                            </div>
                            <div class="form-group">
                              <label for="">Ingresar Resultado</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="resultado" value="<?php echo set_value('resultado',$partidas->resultado) ?>">
                            </div>
                        </div> <!-- /.card-body -->
                            
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                          <?php echo form_close() ?>
                </div>
              </div>
            </div>

<!-- =========================================================== -->