                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!--                     <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pengaturan Akun</h6>
                            <!-- <a href="#" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-folder-plus"></i>
                                </span>
                                <span class="text">Tambah MRK</span>
                            </a> -->
                        </div>
                        <div class="card-body">
                            <!-- <div class="row">
                                <div class="col-lg-7"> -->
                            <div class="p-5">
                                <!-- <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                        </div> -->
                                <?php if (validation_errors()) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo validation_errors(); ?>
                                    </div>
                                <?php endif; ?>
                                <form action="<?= base_url('COperator/OperatorTugas/pengaturan_akun/' . $user['id_user']) ?>" method="post">
                                    <form class="user">
                                        <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="NIP">NIP</label>
                                                <input type="text" class="form-control form-control-user" id="nip" name="nip" value="<?= $user['nip']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan" value="<?= $user['jabatan']; ?>" readonly>
                                            </div>
                                            <div class="col-sm-6" id="div_bagian" value="<?= $user['bagian']; ?>" readonly>
                                                <label for="bagian">Bagian</label>
                                                <input type="text" class="form-control form-control-user" readonly="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control form-control-user" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="pendidikan">Pendidikan</label>
                                                <input type="text" class="form-control form-control-user" id="pendidikan" name="pendidikan" value="<?= $user['pendidikan']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="password">Password</label>
                                                <input type="text" class="form-control form-control-user" id="password" name="password" value="<?= $user['password']; ?>">
                                            </div>
                                            <div class="col-sm-6" hidden>
                                                <label for="level">Level</label>
                                                <input type="text" class="form-control form-control-user" id="level" name="level" value="<?= $user['level']; ?>" readonly>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">UBAH</button>
                                    </form>
                                </form>
                            </div>
                            <!-- </div>
                            </div> -->
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->