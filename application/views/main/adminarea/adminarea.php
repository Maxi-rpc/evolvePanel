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
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3><?php echo $datosSql['cantUser'] ?></h3>

                    <p>Users</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-user"></i>
                  </div>
                  <a href="#" class="small-box-footer">
                    info <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div> <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <div class="small-box bg-info">
                    <div class="inner">
                      <h3><?php echo $datosSql['cantUserInfo'] ?></h3>

                      <p>User Info</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-id-card"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div> <!-- /.info-box -->  
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <div class="small-box bg-info">
                      <div class="inner">
                        <h3><?php echo $datosSql['cantTeams'] ?></h3>

                        <p>Teams</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-gamepad"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                        info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                </div> <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <div class="small-box bg-info">
                      <div class="inner">
                        <h3><?php echo $datosSql['cantSector'] ?></h3>

                        <p>Sector</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                        info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.info Box row -->

            <div class="row">
              <div class="col-md-3 col-sm-6 col-12">
                <div class="small-box bg-info">
                      <div class="inner">
                        <h3><?php echo $datosSql['cantPuesto'] ?></h3>

                        <p>Puesto</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-user-tie"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                        info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <div class="small-box bg-info">
                        <div class="inner">
                          <h3><?php echo $datosSql['cantPerfil'] ?></h3>

                          <p>Perfil</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-user-secret"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <div class="small-box bg-info">
                        <div class="inner">
                          <h3><?php echo $datosSql['cantPlayer'] ?></h3>

                          <p>Players</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-user-friends"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <div class="small-box bg-info">
                        <div class="inner">
                          <h3><?php echo $datosSql['cantStaff'] ?></h3>

                          <p>Staff</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-user"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          info <i class="fas fa-arrow-circle-right"></i>
                        </a>
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