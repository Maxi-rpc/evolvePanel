<!-- =========================================================== -->

<div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Listado de todo las Partidas</h3>
                    </div> <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID Partida</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Resultado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($partidas != NULL): ?>
                                    <?php foreach($partidas as $par): ?>
                                        <tr>
                                            <td><?= $par->id_partida?></td>
                                            <td><?= $par->nombre?></td>
                                            <td><?= $par->nickname?></td>
                                            <td><?= $par->fecha?></td>
                                            <td><?= $par->resultado?></td>
                                            <td>
                                                <button type="button" class="btn btn-tool"><a href="<?=base_url('team/lol/search/'.$par->id)?>"><i class="fas fa-search-plus"></i></a>
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
                                    <th>ID Partida</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Resultado</th>
                                    <th>Acción</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> <!-- /.card-body -->
                </div> <!-- /.card -->
            </div> <!-- /.col-12 -->
        </div> <!-- /.row -->

<!-- =========================================================== -->