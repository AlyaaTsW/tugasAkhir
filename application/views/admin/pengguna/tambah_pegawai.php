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
                                            <div class="col-sm-6">
                                                <label for="jabatan">Jabatan</label>
                                                <select class="form-control" id="jabatan" name="jabatan">
                                                    <option selected>--- Pilih Jabatan ---</option>
                                                    <option value="Kepala">Kepala</option>
                                                    <option value="Kasubbag Umum">Kasubbag Umum</option>
                                                    <option value="Koordinator Fungsional">Koordinator Fungsional</option>
                                                    <option value="Bendahara">Bendahara</option>
                                                    <option value="Statistisi Pelaksana Lanjutan">Statistisi Pelaksana Lanjutan</option>
                                                    <option value="Statistisi Pertama">Statistisi Pertama</option>
                                                    <option value="Statistisi Muda">Statistisi Muda</option>
                                                    <option value="Statistisi Penyelia">Statistisi Penyelia</option>
                                                    <option value="Statistisi Pelaksana">Statistisi Pelaksana</option>
                                                    <option value="Fungsional Umum">Fungsional Umum</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6" id="div_bagian">
                                                <label for="bagian">Bagian</label>
                                                <input type="text" class="form-control form-control-user" readonly="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control form-control-user" id="email" name="email">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="pendidikan">Pendidikan</label>
                                                <select class="form-control" id="pendidikan" name="pendidikan">
                                                    <option selected>--- Pilih Pendidikan Terakhir ---</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="SMK">SMK</option>
                                                    <option value="D3">D3</option>
                                                    <option value="D4">D4</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row" hidden="true">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="password">Password</label>
                                                <input type="text" class="form-control form-control-user" id="password" name="password" value="12345">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="level">Level</label>
                                                <input type="text" class="form-control form-control-user" id="level" name="level">
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