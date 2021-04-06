                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Pegawai</h1>
                    <!--                     <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Pegawai</h6>
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
                                <form action="<?= base_url('CAdmin/AdminPengguna/tambah_pegawai') ?>" method="post">
                                    <form class="user">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control form-control-user" id="nama" name="nama">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="NIP">NIP</label>
                                                <input type="text" class="form-control form-control-user" id="nip" name="nip">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="pendidikan">Pendidikan</label>
                                                <input type="text" class="form-control form-control-user" id="pendidikan" name="pendidikan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control form-control-user" id="email" name="email">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="level">Level</label>
                                                <select class="form-control" id="level" name="level">
                                                    <option value="admin">Admin</option>
                                                    <option value="supervisor">Supervisor</option>
                                                    <option value="operator">Operator</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row" hidden>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control form-control-user" id="password" name="password" value="12345">
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Simpan</button>
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