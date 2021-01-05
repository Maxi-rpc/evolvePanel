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

            
              <?php if($this->session->flashdata('msj')){ ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                          <?= $this->session->flashdata('msj') ?>
                    </div>
                  </div>
                </div>
              <?php } ?>

            <!-- Listados -->
            <div class="row">
              <div class="col-md-12">
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
                    <table id="dataTable2" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID Team</th>
                          <th>Nombre</th>
                          <th>Acción</th>
                        </tr>
                      </thead> 
                      <tbody>
                        <tr>
                          <?php if($teams != NULL): ?>
                            <?php foreach($teams as $team): ?>
                              <td><?= $team->id?></td>
                              <td><?= $team->nombre?></td>
                              <td><button type="button" class="btn btn-tool"><a href="<?=base_url('team/edit/'.$user->id_usuario)?>"><i class="fas fa-user-edit"></i></a>
                      </button></td>
                            <?php endforeach ?>
                            <?php else: ?>
                              <td class="text-center">No existen datos para mostrar.</td>
                          <?php endif ?>
                        </tr> 
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>ID Team</th>
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
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
</div>
<!-- /.content-wrapper -->