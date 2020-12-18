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
              <!--Stats-->
              <div class="col-md-3 col-sm-6 col-12">
                <!--Usuarios-->
                <div class="info-box bg-blue">
                  <span class="info-box-icon"
                    ><i class="fas fa-user"></i
                  ></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number"><?= $datos['cantUser'] ?></span>

                    <div class="progress">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      70% Increase in 30 Days
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <!--Equipos-->
                <div class="info-box bg-blue">
                  <span class="info-box-icon"
                    ><i class="fas fa-gamepad"></i
                  ></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Teams</span>
                    <span class="info-box-number"><?= $datos['cantTeams'] ?></span>

                    <div class="progress">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      70% Increase in 30 Days
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <!--Equipos-->
                <div class="info-box bg-blue">
                  <span class="info-box-icon"
                    ><i class="fas fa-users"></i
                  ></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Players</span>
                    <span class="info-box-number"><?= $datos['cantPlayers'] ?></span>

                    <div class="progress">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      70% Increase in 30 Days
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-12">
                <!--Staff-->
                <div class="info-box bg-blue">
                  <span class="info-box-icon"
                    ><i class="fas fa-user-friends"></i
                  ></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Staff</span>
                    <span class="info-box-number"><?= $datos['cantStaff'] ?></span>

                    <div class="progress">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      70% Increase in 30 Days
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- Crear Usuario -->
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
              <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Crear Usuario</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- form start -->
                <form role="form" action="<?= base_url('register/create'); ?>" method="post" id="frm_login">
                    <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" name="firstname" value="" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <label>Apellido</label>
                      <input type="text" name="lastname" value="" class="form-control" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" value="" class="form-control" placeholder="Email">
                    </div>
                    <!-- select -->
                    <div class="form-group">
                        <label>Perfil</label>
                        <select class="form-control" name="perfil">
                          <?php
                            foreach($perfiles as $p){ 
                          ?>
                            <option value="<?= $p->id_perfil ?>"> <?= $p->nombre ?> </option>
                          <?php
                            }
                          ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Contraseña</label>
                      <input type="password" name="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                      <label>Confirmar contraseña</label>
                      <input type="password" name="password_c" class="form-control" placeholder="Reescribir contraseña">
                    </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary toastrDefaultSuccess">Crear</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.Crear Usuario -->
            <!-- Crear Perfil -->
            <div class="row">
                <div class="col-md-6">
                  <div class="card card-primary collapsed-card">
                    <div class="card-header">
                      <h3 class="card-title">Crear Perfil</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <!-- form start -->
                      <form role="form" action="<?= base_url('register/crearPerfil'); ?>" method="post" id="frm_login">
                          <div class="form-group">
                            <label>Perfil</label>
                            <input type="text" name="profile" value="" class="form-control" placeholder="Perfil">
                          </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-primary collapsed-card">
                    <div class="card-header">
                      <h3 class="card-title">Crear Sector</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <!-- form start -->
                      <form role="form" action="<?= base_url('register/crearSector'); ?>" method="post" id="frm_login">
                          <div class="form-group">
                            <label>Sector</label>
                            <input type="text" name="sector" value="" class="form-control" placeholder="Sector">
                          </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
                <!-- /.Crear Perfil -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
</div>
<!-- /.content-wrapper -->