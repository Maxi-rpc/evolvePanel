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
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Listado de usuarios</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
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