<!-- =========================================================== -->

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Editar Datos</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url('user/edit'); ?>" method="POST">
                            <div class="card-body">
                            <?php if(validation_errors()){ ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-ban"></i> Error!</h5>
                                    <?= validation_errors('<li>','</li>') ?>
                                </div>
                            <?php } ?>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="lastname" placeholder="Apellido">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="perfil">
                                        <option value="">Seleccione Perfil</option>

                                        <?php foreach($perfil as $perf): ?>
                                        <option value="<?= $perf->id ?>"><?= $perf->nombre ?></option>
                                        <?php endforeach ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password_c" placeholder="Password Confirm">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

<!-- =========================================================== -->