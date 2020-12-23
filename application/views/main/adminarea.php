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
            <!--/Stats-->
            <div class="row">
              <!-- left column -->
              <!-- Usuario -->
              <div class="col-md-6">
                <div class="card card-primary collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Usuario</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- form start -->

                    <div class="card card-primary card-tabs">
                      <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Crear</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Editar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Eliminar</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                          <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
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
                                <button type="submit" class="btn btn-primary">Crear</button>
                              </div>
                            </form> 
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                            ACA VA CODIGO DE Editar
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                            Aca va codigo de eliminar
                          </div>
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>


                    
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
                <!-- right column -->
                <!-- Perfil -->
              <div class="col-md-6">
                <div class="card card-primary collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Perfil</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- form start -->
                    <div class="card card-primary card-tabs">
                      <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Crear</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Editar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Eliminar</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                          <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
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
                          <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                            ACA VA CODIGO DE Editar
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                            Aca va codigo de eliminar
                          </div>
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
            </div>
            
            <div class="row">
              <!-- left column -->
              <!-- Sector -->
              <div class="col-md-6">
                <div class="card card-primary collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Sector</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- form start -->

                    <div class="card card-primary card-tabs">
                      <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Crear</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Editar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Eliminar</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                          <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
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
                          <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                            ACA VA CODIGO DE Editar
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                            Aca va codigo de eliminar
                          </div>
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>


                    
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
                <!-- right column -->
                <!-- Team -->
              <div class="col-md-6">
                <div class="card card-primary collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Team</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- form start -->

                    <div class="card card-primary card-tabs">
                      <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Crear</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Editar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Eliminar</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                          <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                          <form role="form" action="<?= base_url('register/crearTeam'); ?>" method="post" id="frm_login">
                              <div class="form-group">
                                <label>Team</label>
                                <input type="text" name="team" value="" class="form-control" placeholder="Team">
                              </div>
                              <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Crear</button>
                              </div>
                          </form> 
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                            ACA VA CODIGO DE Editar
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                            Aca va codigo de eliminar
                          </div>
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>

                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
</div>
<!-- /.content-wrapper -->