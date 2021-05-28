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
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Pegawai</h6>
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
                                <form action="<?= base_url('CAdmin/AdminPengguna/edit_pegawai/' . $user['id_user']) ?>" method="post">
                                    <form class="user">
                                        <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="NIP">NIP</label>
                                                <input type="text" class="form-control form-control-user" id="nip" name="nip" value="<?= $user['nip']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label for="jabatan">Jabatan</label>
                                                <select class="form-control" id="jabatan" name="jabatan">
                                                    <option selected>--- Pilih Jabatan ---</option>
                                                    <option value="Kepala" <?php if ($user['jabatan'] == 'Kepala') echo "selected"; ?>>Kepala</option>
                                                    <option value="Kasubbag Umum" <?php if ($user['jabatan'] == 'Kasubbag Umum') echo "selected"; ?>>Kasubbag Umum</option>
                                                    <option value="Koordinator Fungsional" <?php if ($user['jabatan'] == 'Koordinator Fungsional') echo "selected"; ?>>Koordinator Fungsional</option>
                                                    <option value="Bendahara" <?php if ($user['jabatan'] == 'Bendahara') echo "selected"; ?>>Bendahara</option>
                                                    <option value="Statistisi Pelaksana Lanjutan" <?php if ($user['jabatan'] == 'Statistisi Pelaksana Lanjutan') echo "selected"; ?>>Statistisi Pelaksana Lanjutan</option>
                                                    <option value="Statistisi Pertama" <?php if ($user['jabatan'] == 'Statistisi Pertama') echo "selected"; ?>>Statistisi Pertama</option>
                                                    <option value="Statistisi Muda" <?php if ($user['jabatan'] == 'Statistisi Muda') echo "selected"; ?>>Statistisi Muda</option>
                                                    <option value="Statistisi Penyelia" <?php if ($user['jabatan'] == 'Statistisi Penyelia') echo "selected"; ?>>Statistisi Penyelia</option>
                                                    <option value="Statistisi Pelaksana" <?php if ($user['jabatan'] == 'Statistisi Pelaksana') echo "selected"; ?>>Statistisi Pelaksana</option>
                                                    <option value="Fungsional Umum" <?php if ($user['jabatan'] == 'Fungsional Umum') echo "selected"; ?>>Fungsional Umum</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6" id="div_bagian" value="<?= $user['bagian']; ?>">
                                                <label for="bagian">Bagian</label>
                                                <?php
                                                if ($user['jabatan'] == 'Koordinator Fungsional') {
                                                ?>
                                                    <select class="form-control" id="bagian" name="bagian">
                                                        <option value="1" <?php if ($user['bagian'] == '1') echo "selected"; ?>>Distribusi</option>
                                                        <option value="2" <?php if ($user['bagian'] == '2') echo "selected"; ?>>Nerwilis</option>
                                                        <option value="3" <?php if ($user['bagian'] == '3') echo "selected"; ?>>Produksi</option>
                                                        <option value="4" <?php if ($user['bagian'] == '4') echo "selected"; ?>>Sosial</option>
                                                        <option value="5" <?php if ($user['bagian'] == '5') echo "selected"; ?>>IPDS</option>
                                                    </select>
                                                <?php
                                                } else {
                                                ?>
                                                    <input type="text" class="form-control form-control-user" readonly="true">
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control form-control-user" id="email" name="email" value="<?= $user['email']; ?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="pendidikan">Pendidikan</label>
                                                <select class="form-control" id="pendidikan" name="pendidikan">
                                                    <option selected>--- Pilih Pendidikan Terakhir ---</option>
                                                    <option value="SMA" <?php if ($user['pendidikan'] == 'SMA') echo "selected"; ?>>SMA</option>
                                                    <option value="SMK" <?php if ($user['pendidikan'] == 'SMK') echo "selected"; ?>>SMK</option>
                                                    <option value="D3" <?php if ($user['pendidikan'] == 'D3') echo "selected"; ?>>D3</option>
                                                    <option value="D4" <?php if ($user['pendidikan'] == 'D4') echo "selected"; ?>>D4</option>
                                                    <option value="S1" <?php if ($user['pendidikan'] == 'S1') echo "selected"; ?>>S1</option>
                                                    <option value="S2" <?php if ($user['pendidikan'] == 'S2') echo "selected"; ?>>S2</option>
                                                    <option value="S3" <?php if ($user['pendidikan'] == 'S3') echo "selected"; ?>>S3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row" hidden="true">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="password">Password</label>
                                                <input type="text" class="form-control form-control-user" id="password" name="password" value="<?= $user['password']; ?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="level">Level</label>
                                                <select class="form-control" id="level" name="level">
                                                    <option value="admin" <?php if ($user['level'] == 'admin') echo "selected"; ?>> Admin </option>
                                                    <option value="supervisor" <?php if ($user['level'] == 'supervisor') echo "selected"; ?>> Supervisor </option>
                                                    <option value="operator" <?php if ($user['level'] == 'operator') echo "selected"; ?>> Operator </option>
                                                </select>
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