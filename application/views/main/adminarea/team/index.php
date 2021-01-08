<!-- =========================================================== -->

              <?php if($this->session->flashdata('msj')){ ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                          <?= $this->session->flashdata('msj') ?>
                    </div>
                  </div>
                </div>
              <?php } ?>

            <!-- Listados -->
            <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Listado de Teams - <span><?=$datosSql['cantTeams']?></span></h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool"><a href="<?=base_url('team/edit')?>"><i class="fas fa-user-plus"></i></a>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="dataTable1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Acción</th>
                        </tr>
                      </thead> 
                      <tbody>
                        <?php if($teams != NULL): ?>
                            <?php foreach($teams as $team): ?>
                            <tr>
                              <td><?= $team->id?></td>
                              <td><?= $team->nombre?></td>
                              <td>
                                <button type="button" class="btn btn-tool"><a href="<?=base_url('team/edit/'.$team->id)?>"><i class="fas fa-edit"></i></a>
                                </button>
                                <button type="button" class="btn btn-tool"><a href="<?=base_url('team/delete/'.$team->id)?>" onclick="return confirm('¿Estas seguro de eliminar?')"><i class="fas fa-trash-alt"></i></a>
                                </button>
                              </td>
                            </tr> 
                            <?php endforeach ?>
                            <?php else: ?>
                                <tr>
                                    <td class="text-center">No existen datos para mostrar.</td>
                                </tr>
                        <?php endif ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Acción</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>

<!-- =========================================================== -->
