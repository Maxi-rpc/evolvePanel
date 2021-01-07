<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Home</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <!-- =========================================================== -->

        <?php if($userSearch != NULL): ?>
          <div class="row">
            <div class="col-12">
              <!-- Widget: user widget style 1 -->
              <div class="card card-widget widget-user">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header text-white"
                      style="background: url('<?=base_url()?>assets/img/photo1.png') center center;">
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                        </button>
                    </div>
                    <h3 class="widget-user-username text-left"><?php echo $userSearch['nombre'].' '.$userSearch['apellido'] ?></h3>
                    <h4 class="widget-user-username text-left"><?php echo $userSearch['nickname'] ?></h4>
                    <h5 class="widget-user-desc text-left"><?php echo $userSearch['sector'] ?></h5>
                  </div>
                  <div class="widget-user-image">
                    <img class="img-circle" src="<?=base_url()?>assets/img/user3-128x128.jpg" alt="User Avatar">
                  </div>
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-sm-4 border-right">
                        <div class="description-block">
                          <h5 class="description-header"><?php echo $userSearch['email'] ?></h5>
                          <span class="description-text">Email</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4 border-right">
                        <div class="description-block">
                          <h5 class="description-header">13,000</h5>
                          <span class="description-text">Facebook</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4">
                        <div class="description-block">
                          <h5 class="description-header">35</h5>
                          <span class="description-text">Twitter</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
              </div> <!-- /.widget-user -->
            </div> <!-- /.col-12 -->
          </div> <!-- /.row -->
        <?php endif ?>

        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Listado de todo el Staff</h3>
                    </div> <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Nickname</th>
                                    <th>Email</th>
                                    <th>Sector</th>
                                    <th>Puesto</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($userInfo != NULL): ?>
                                    <?php foreach($userInfo as $user): ?>
                                        <tr>
                                            <td><?= $user->nombre?></td>
                                            <td><?= $user->apellido?></td>
                                            <td><?= $user->nickname?></td>
                                            <td><?= $user->email?></td>
                                            <td><?= $user->sector?></td>
                                            <td><?= $user->puesto?></td>
                                            <td>
                                                <button type="button" class="btn btn-tool"><a href="<?=base_url('staff/search/'.$user->id)?>"><i class="fas fa-search-plus"></i></a>
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
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Nickname</th>
                                    <th>Email</th>
                                    <th>Sector</th>
                                    <th>Puesto</th>
                                    <th>Acción</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> <!-- /.card-body -->
                </div> <!-- /.card -->
            </div> <!-- /.col-12 -->
        </div> <!-- /.row -->
        
      <!-- =========================================================== -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->