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
                            <!-- <h6 class="m-0 font-weight-bold text-primary">Data MRK</h6> -->
                            <a href="<?php echo base_url('CAdmin/AdminPengguna/tambah_pegawai') ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-folder-plus"></i>
                                </span>
                                <span class="text">Tambah Pegawai</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Jabatan</th>
                                            <!-- <th>Email</th>
                                            <th>Password</th>
                                            <th style="width: 45px;">Pendidikan</th>
                                            <th>Level</th> -->
                                            <th> Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($user as $u) { ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $u->nama ?></td>
                                                <td><?php echo $u->nip ?></td>
                                                <td><?php echo $u->jabatan ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>CAdmin/AdminPengguna/detail_pegawai/<?= $u->id_user; ?>" class="btn btn-primary btn-circle btn-sm">
                                                        <i class="fas fa-info-circle" title="Detail Pegawai"></i>
                                                    </a>
                                                    <a href="<?= base_url(); ?>CAdmin/AdminPengguna/edit_pegawai/<?= $u->id_user; ?>" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="fas fa-edit" title="Edit Pegawai"></i>
                                                    </a>
                                                    <!-- <a href="<?= base_url(); ?>CAdmin/AdminPengguna/hapus_pegawai/<?= $u->id_user; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Data Pegawai <?php echo $u->nama ?> akan dihapus? ?')">
                                                        <i class="fas fa-trash" title="Hapus Pegawai"></i>
                                                    </a> -->

                                                    <!-- Button trigger modal -->
                                                    <a data-toggle="modal" data-target="#exampleModal-<?= $u->id_user; ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash" aria-hidden="true"> </i></a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal-<?= $u->id_user; ?> ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Yakin mau Hapus Data ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                    <button type="button" class="btn btn-primary"><a href="<?= base_url(); ?>CAdmin/AdminPengguna/hapus_pegawai/<?= $u->id_user; ?>">Hapus</a></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

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