                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data MRK Seksi Distribusi</h1>
                    <!--                     <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">Data MRK</h6> -->
                            <a href="<?php echo base_url('Cadmin/AdminMrk/tambah_mrk') ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-folder-plus"></i>
                                </span>
                                <span class="text">Tambah MRK</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Komponen</th>
                                            <th>Kegiatan</th>
                                            <th>Volume</th>
                                            <th>Satuan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    $no=1;
                                    ?>

                                    <tbody>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td>Ini contoh komponen milik mrk</td>
                                            <td>contoh kegiatan penugasan</td>
                                            <td>61</td>
                                            <td>O-H</td>
                                            <td>
                                                <a href="<?php echo base_url('Cadmin/AdminMrk/edit_mrk') ?>" class="btn btn-primary btn-circle btn-sm">
                                                    <i class="fas fa-user-tag"></i>
                                                </a>
                                                <a href="<?php echo base_url('Cadmin/AdminMrk/edit_mrk') ?>" class="btn btn-warning btn-circle btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->