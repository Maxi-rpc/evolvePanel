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
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box mb-3 bg-info">
                  <span class="info-box-icon"><i class="fas fa-user"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number"><?php echo $datosSql['cantUser'] ?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                  <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box mb-3 bg-info">
                  <span class="info-box-icon"><i class="fas fa-id-card"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">User Info</span>
                    <span class="info-box-number"><?php echo $datosSql['cantUserInfo'] ?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box mb-3 bg-info">
                    <span class="info-box-icon"><i class="fas fa-gamepad"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Teams</span>
                      <span class="info-box-number"><?php echo $datosSql['cantTeams'] ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box mb-3 bg-info">
                    <span class="info-box-icon"><i class="fas fa-chalkboard-teacher"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Sector</span>
                      <span class="info-box-number"><?php echo $datosSql['cantSector'] ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.info Box row -->

            <div class="row">
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box mb-3 bg-info">
                    <span class="info-box-icon"><i class="fas fa-user-tie"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Puesto</span>
                      <span class="info-box-number"><?php echo $datosSql['cantPuesto'] ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box mb-3 bg-info">
                  <span class="info-box-icon"><i class="fas fa-user-secret"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Perfil</span>
                    <span class="info-box-number"><?php echo $datosSql['cantPerfil'] ?></span>
                  </div>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box mb-3 bg-info">
                    <span class="info-box-icon"><i class="fas fa-user-friends"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Players</span>
                      <span class="info-box-number"><?php echo $datosSql['cantPlayer'] ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box mb-3 bg-info">
                    <span class="info-box-icon"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Staff</span>
                      <span class="info-box-number"><?php echo $datosSql['cantStaff'] ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.info Box row -->

            <!-- Listados -->
            <h3>Listados</h3>
            <div class="row">
              <div class="col-12">
                <div class="card card-primary collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Users</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <table id="dataTable1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Estado</th>
                        <th>Logueado</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php if(count($user)): ?>
                        <?php foreach($user as $u): ?>
                          <tr>
                            <td><?= $u->id_usuario ?></td>
                            <td><?= $u->nombre ?></td>
                            <td><?= $u->apellido ?></td>
                            <td><?= $u->email ?></td>
                            <td><?= $u->perfil ?></td>
                            <td><?= $u->estado ?></td>
                            <td><?= $u->is_logged ?></td>
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
                        <th>ID Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Estado</th>
                        <th>Logueado</th>
                      </tr>
                    </tfoot>
                  </table>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card card-primary collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Users Info</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <table id="dataTable1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>  
                        <th>ID Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Nickname</th>
                        <th>Email</th>
                        <th>Sector</th>
                        <th>Team</th>
                        <th>Puesto</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php if(count($userInfo)): ?>
                        <?php foreach($userInfo as $uI): ?>
                          <tr>
                            <td><?= $uI->id ?></td>
                            <td><?= $uI->id_usuario ?></td>
                            <td><?= $uI->nombre ?></td>
                            <td><?= $uI->apellido ?></td>
                            <td><?= $uI->nickname ?></td>
                            <td><?= $uI->email ?></td>
                            <td><?= $uI->sector ?></td>
                            <td><?= $uI->team ?></td>
                            <td><?= $uI->puesto ?></td>
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
                        <th>ID Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Nickname</th>
                        <th>Email</th>
                        <th>Sector</th>
                        <th>Team</th>
                        <th>Puesto</th>
                      </tr>
                    </tfoot>
                  </table>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card card-primary collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Teams</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <table id="dataTable1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID Team</th>  
                        <th>Nombre</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php if(count($teams)): ?>
                        <?php foreach($teams as $team): ?>
                          <tr>
                            <td><?= $team->id_team ?></td>
                            <td><?= $team->nombre ?></td>
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
                        <th>ID Team</th>  
                        <th>Nombre</th>
                      </tr>
                    </tfoot>
                  </table>
                  </div>
                  <!-- /.card-body -->
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