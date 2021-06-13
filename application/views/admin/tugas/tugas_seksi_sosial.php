                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Tugas Seksi Sosial</h1>
                    <!--                     <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pegawai</th>
                                            <th>Komponen</th>
                                            <th>Kegiatan</th>
                                            <th>Bagian</th>
                                            <th>Periode</th>
                                            <th>Laporan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $no = 1;
                                        foreach ($tugas as $u) {
                                        ?>

                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?php echo $u->nama ?></td>
                                                <td><?php echo $u->komponen ?></td>
                                                <td><?php echo $u->kegiatan ?></td>
                                                <td>
                                                    <?php if ($u->bag == '1') {
                                                        echo "Distribusi";
                                                    }
                                                    if ($u->bag == '2') {
                                                        echo "Nerwilis";
                                                    }
                                                    if ($u->bag == '3') {
                                                        echo "Produksi";
                                                    }
                                                    if ($u->bag == '4') {
                                                        echo "Sosial";
                                                    }
                                                    if ($u->bag == '5') {
                                                        echo "IPDS";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php if ($u->bulan == '1') {
                                                        echo "1 - 31 Januari ";
                                                    }
                                                    if ($u->bulan == '2') {
                                                        if ($u->tahun % 4) {
                                                            echo "1 - 28 Februari ";
                                                        } else {
                                                            echo "1 - 29 Februari ";
                                                        }
                                                    }
                                                    if ($u->bulan == '3') {
                                                        echo "1 - 31 Maret ";
                                                    }
                                                    if ($u->bulan == '4') {
                                                        echo "1 - 30 April ";
                                                    }
                                                    if ($u->bulan == '5') {
                                                        echo "1 - 31 Mei ";
                                                    }
                                                    if ($u->bulan == '6') {
                                                        echo "1 - 30 Juni ";
                                                    }
                                                    if ($u->bulan == '7') {
                                                        echo "1 - 31 Juli ";
                                                    }
                                                    if ($u->bulan == '8') {
                                                        echo "1 - 31 Agustus ";
                                                    }
                                                    if ($u->bulan == '9') {
                                                        echo "1 - 30 September ";
                                                    }
                                                    if ($u->bulan == '10') {
                                                        echo "1 - 31 Oktober ";
                                                    }
                                                    if ($u->bulan == '11') {
                                                        echo "1 - 30 November ";
                                                    }
                                                    if ($u->bulan == '12') {
                                                        echo "1 - 31 Desember ";
                                                    }

                                                    echo $u->tahun;
                                                    ?>
                                                </td>
                                                <td><?php if ($u->laporan == '0') {
                                                        echo "Belum Terlampir";
                                                    }
                                                    if ($u->laporan == '1') {
                                                        echo "Terlampir";
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php if ($u->laporan == '0') {
                                                    ?>
                                                        <a href="<?= base_url('CAdmin/AdminTugas/detailTugas/' . $u->id_tugas) ?>" class="btn btn-primary btn-sm" title="Tambahkan Laporan">
                                                            <i class="fa fa-file fa-sm">Kumpulkan</i>
                                                        </a>
                                                    <?php
                                                    }
                                                    if ($u->laporan == '1') {
                                                    ?>
                                                        <a href="<?= base_url('CAdmin/AdminTugas/detailTugas2/' . $u->id_tugas) ?><?= base_url('CAdmin/AdminTugas/detailTugas/' . $u->id_tugas) ?>" class="btn btn-success btn-sm btn-circle" title="Lihat Laporan">
                                                            <i class="fa fa-eye fa-sm"></i>
                                                        </a>
                                                        <a href="<?= base_url('CAdmin/AdminTugas/detailTugas/' . $u->id_tugas) ?>" class="btn btn-success btn-sm" title="Edit Laporan">
                                                            <i class="fa fa-edit>Edit</i>
                                                        </a>
                                                    <?php
                                                    }
                                                    ?>
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