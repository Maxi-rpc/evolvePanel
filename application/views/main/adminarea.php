<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bg-dark">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-white">Admin Area</h1>
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
        <div class="content">
          <div class="container-fluid">
            <!-- =========================================================== -->
            <div class="row">
              <!--Stats-->
              <div class="col-md-3 col-sm-6 col-12">
                <!--Usuarios-->
                <div class="info-box bg-transparent border">
                  <span class="info-box-icon"
                    ><i class="fas fa-users"></i
                  ></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number">10</span>

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
                <div class="info-box bg-transparent border">
                  <span class="info-box-icon"
                    ><i class="fas fa-gamepad"></i
                  ></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Teams</span>
                    <span class="info-box-number">10</span>

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
                <div class="info-box bg-transparent border">
                  <span class="info-box-icon"
                    ><i class="fas fa-restroom"></i
                  ></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Players</span>
                    <span class="info-box-number">20</span>

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
            <!-- =========================================================== -->
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements disabled -->
                <div class="card card-danger border collapse-card">
                  <div class="card-header">
                    <h3 class="card-title">Agregar Usuario</h3>
                    <div class="card-tools">
                        <button
                          type="button"
                          class="btn btn-tool"
                          data-card-widget="collapse"
                        >
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body bg-dark">
                  
                    <form role="form">
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Nombre</label>
                            <input
                              type="text"
                              name="firstname"
                              class="form-control"
                              placeholder="Nombre"
                            />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Apellido</label>
                            <input
                              type="text"
                              name="lastname"
                              class="form-control"
                              placeholder="Apellido"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Nombre</label>
                            <input
                              type="text"
                              name="firstname"
                              class="form-control"
                              placeholder="Nombre"
                            />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Password</label>
                            <input
                              type="password"
                              class="form-control"
                              placeholder="Enter ..."
                            />
                          </div>
                        </div>
                      </div>

                      <!-- input states -->
                        <div class="row">
                            <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label>Seleccionar Perfil</label>
                                <select class="form-control">
                                <option>Usuario</option>
                                <option>Admin</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Grupo Laboral</label>
                                    <select class="form-control">
                                    <option>Redes</option>
                                    <option>Team</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Team</label>
                                    <select class="form-control">
                                    <option>No</option>
                                    <option>Rainbow</option>
                                    <option>Counter</option>
                                    <option>Free</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                Crear
                            </button>
                        </div>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!--/.col (left) -->
              <!-- right column -->
              <div class="col-md-6">
                <!-- general form elements -->
              </div>
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Personalizacion</h5>
          <p>Panel de menu color:</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->