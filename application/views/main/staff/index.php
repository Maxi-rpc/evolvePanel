<!-- =========================================================== -->

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
                                            <?php foreach($sectores as $sec): ?>
                                              <?php if($user->sector == $sec->id){ ?>
                                                <td><?= $sec->nombre?></td>
                                              <?php } ?>
                                            <?php endforeach ?>
                                            <?php foreach($puestos as $pue): ?>
                                              <?php if($user->puesto == $pue->id){ ?>
                                                <td><?= $pue->nombre?></td>
                                              <?php } ?>
                                            <?php endforeach ?>
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