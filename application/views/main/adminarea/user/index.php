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

            <!-- Listados -->
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Listado de usuarios - <span><?=$datosSql['cantUser']?></span></h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool"><a href="<?=base_url('user/edit')?>"><i class="fas fa-user-plus"></i></a>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="dataTable2" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID Usuario</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Email</th>
                          <th>Perfil</th>
                          <th>Estado</th>
                          <th>Is Logged</th>
                        </tr>
                      </thead> 
                      <tbody>
                        <tr>
                          <?php if($users != NULL): ?>
                            <?php foreach($users as $user): ?>
                              <td><?= $user->id_usuario?></td>
                              <td><?= $user->nombre?></td>
                              <td><?= $user->apellido?></td>
                              <td><?= $user->email?></td>
                              <td><?= $user->perfil?></td>
                              <td><?= $user->estado?></td>
                              <td><?= $user->is_logged?></td>
                            <?php endforeach ?>
                            <?php else: ?>
                              <td class="text-center">No existen datos para mostrar.</td>
                          <?php endif ?>
                        </tr> 
                      </tbody>
                      <tfoot>
                        <tr>
                        <th>ID Usuario</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Email</th>
                          <th>Perfil</th>
                          <th>Estado</th>
                          <th>Is Logged</th>
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