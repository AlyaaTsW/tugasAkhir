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
                            <h6 class="m-0 font-weight-bold text-primary">Detail Data Pegawai</h6>
                            <!-- <a href="#" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-folder-plus"></i>
                                </span>
                                <span class="text">Tambah MRK</span>
                            </a> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="widget-content">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th>Nama</th>
                                            <td><?= $user['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>NIP</th>
                                            <td><?= $user['nip']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Jabatan</th>
                                            <td><?= $user['jabatan']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Bagian</th>
                                            <td><?php if ($user['bagian'] == '1') {
                                                    echo "Distribusi";
                                                }
                                                if ($user['bagian'] == '2') {
                                                    echo "Nerwilis";
                                                }
                                                if ($user['bagian'] == '3') {
                                                    echo "Produksi";
                                                }
                                                if ($user['bagian'] == '4') {
                                                    echo "Sosial";
                                                }
                                                if ($user['bagian'] == '5') {
                                                    echo "IPDS";
                                                }
                                                ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?= $user['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Password</th>
                                            <td><?= $user['password']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Pendidikan</th>
                                            <td><?= $user['pendidikan']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Level</th>
                                            <td><?= $user['level']; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>