<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-black">League of Legends</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">League-of-Legends</li>
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
        <div class="row">
          <div class="col-12">
            <div class="card collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Buscar Partida</h3>
                
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID USUARIO</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>E-MAIL</th>
                    <th>ESTADO</th>
                  </tr>
                  </thead>
                  <tbody>

                      <?php
                        foreach($data as $a){
                            
                      ?>
                        <tr>
                            <td><?= $a->id_usuario ?></td>
                            <td><?= $a->nombre ?></td>
                            <td><?= $a->apellido ?></td>
                            <td><?= $a->email ?></td>
                            <td><?= $a->estado ?></td>
                        </tr>
                    <?php
                    }
                      ?>

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID USUARIO</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>E-MAIL</th>
                    <th>ESTADO</th>
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
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- /.content-wrapper -->