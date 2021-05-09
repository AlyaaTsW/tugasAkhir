                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data MRK Seksi Sosial</h1>
                    <!--                     <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">Data MRK</h6> -->
                            <a href="<?php echo base_url('Cadmin/AdminMrk/tambah_mrk_sos') ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
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
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    $no=1;
                                    foreach ($mrk as $u) {
                                    ?>

                                    <tbody>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?php echo $u->komponen ?></td>
                                            <td><?php echo $u->kegiatan ?></td>
                                            <td><?php echo $u->volume ?></td>
                                            <td><?php echo $u->satuan ?></td>
                                            <td><?php if ($u->status == '1') {
                                                    echo "ditugaskan";
                                                } else {
                                                    echo "tersedia";
                                                } ?>
                                            </td>
                                            <td>
                                                <?php if ($u->status == '1') {
                                                ?>
                                                    <a href="<?php echo base_url('CAdmin/AdminMrk/edit_penugasan_mrk_sos/') ?><?php echo $u->id_mrk ?>" class="btn btn-primary btn-circle btn-sm">
                                                        <i class="fas fa-user-check"></i>
                                                    </a>
                                                <?php
                                                } else {
                                                ?>
                                                    <a href="<?php echo base_url('CAdmin/AdminMrk/penugasan_mrk_sos/') ?><?php echo $u->id_mrk ?>" class="btn btn-primary btn-circle btn-sm">
                                                        <i class="fas fa-user-plus"></i>
                                                    </a>
                                                    <a href="<?php echo base_url('CAdmin/AdminMrk/edit_mrk_sos/') ?><?php echo $u->id_mrk ?>" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="<?php echo base_url('CAdmin/AdminMrk/hapus_mrk_sos/') ?><?php echo $u->id_mrk ?>" class="btn btn-danger btn-circle btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                <?php
                                                } ?>
                                            </td>
                                        </tr>
                                    <?php
                                            $no++;
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->