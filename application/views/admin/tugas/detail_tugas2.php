                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Tugas Pegawai</h1>
                    <!--                     <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Data Tugas Pegawai</h6>
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
                                            <th>Nama Pegawai</th>
                                            <td><?= $tugas['id_user']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Komponen</th>
                                            <td><?= $tugas['komponen']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Kegiatan</th>
                                            <td><?= $tugas['kegiatan']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Volume | Satuan</th>
                                            <td><?= $tugas['volume']; ?> | <?= $tugas['satuan']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Bagian</th>
                                            <td><?php if ($tugas['bag'] == '1') {
                                                    echo "Distribusi";
                                                }
                                                if ($tugas['bag'] == '2') {
                                                    echo "Nerwilis";
                                                }
                                                if ($tugas['bag'] == '3') {
                                                    echo "Produksi";
                                                }
                                                if ($tugas['bag'] == '4') {
                                                    echo "Sosial";
                                                }
                                                if ($tugas['bag'] == '5') {
                                                    echo "IPDS";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Periode</th>
                                            <td><?php if ($tugas['bulan'] == '1') {
                                                    echo "1 - 31 Januari ";
                                                }
                                                if ($tugas['bulan'] == '2') {
                                                    if ($tugas['tahun'] % 4) {
                                                        echo "1 - 28 Februari ";
                                                    } else {
                                                        echo "1 - 29 Februari ";
                                                    }
                                                }
                                                if ($tugas['bulan'] == '3') {
                                                    echo "1 - 31 Maret ";
                                                }
                                                if ($tugas['bulan'] == '4') {
                                                    echo "1 - 30 April ";
                                                }
                                                if ($tugas['bulan'] == '5') {
                                                    echo "1 - 31 Mei ";
                                                }
                                                if ($tugas['bulan'] == '6') {
                                                    echo "1 - 30 Juni ";
                                                }
                                                if ($tugas['bulan'] == '7') {
                                                    echo "1 - 31 Juli ";
                                                }
                                                if ($tugas['bulan'] == '8') {
                                                    echo "1 - 31 Agustus ";
                                                }
                                                if ($tugas['bulan'] == '9') {
                                                    echo "1 - 30 September ";
                                                }
                                                if ($tugas['bulan'] == '10') {
                                                    echo "1 - 31 Oktober ";
                                                }
                                                if ($tugas['bulan'] == '11') {
                                                    echo "1 - 30 November ";
                                                }
                                                if ($tugas['bulan'] == '12') {
                                                    echo "1 - 31 Desember ";
                                                }

                                                echo $tugas['tahun'];
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Terakhir Diubah</th>
                                            <td><?php
                                                if (date("l", strtotime($tugas['tgl_ubah'])) == "Monday") {
                                                    echo "Senin, ";
                                                }
                                                if (date("l", strtotime($tugas['tgl_ubah'])) == "Tuesday") {
                                                    echo "Selasa, ";
                                                }
                                                if (date("l", strtotime($tugas['tgl_ubah'])) == "Wednesday") {
                                                    echo "Rabu, ";
                                                }
                                                if (date("l", strtotime($tugas['tgl_ubah'])) == "Thursday") {
                                                    echo "Kamis, ";
                                                }
                                                if (date("l", strtotime($tugas['tgl_ubah'])) == "Friday") {
                                                    echo "Jum'at, ";
                                                }
                                                if (date("l", strtotime($tugas['tgl_ubah'])) == "Saturday") {
                                                    echo "Sabtu, ";
                                                }
                                                if (date("l", strtotime($tugas['tgl_ubah'])) == "Sunday") {
                                                    echo "Minggu, ";
                                                }
                                                echo date("d", strtotime($tugas['tgl_ubah']));
                                                echo " ";

                                                if (date("m", strtotime($tugas['tgl_ubah'])) == '01') {
                                                    echo "Januari ";
                                                }
                                                if (date("m", strtotime($tugas['tgl_ubah'])) == '02') {
                                                    echo "Februari ";
                                                }
                                                if (date("m", strtotime($tugas['tgl_ubah'])) == '03') {
                                                    echo "Maret ";
                                                }
                                                if (date("m", strtotime($tugas['tgl_ubah'])) == '04') {
                                                    echo "April ";
                                                }
                                                if (date("m", strtotime($tugas['tgl_ubah'])) == '05') {
                                                    echo "Mei ";
                                                }
                                                if (date("m", strtotime($tugas['tgl_ubah'])) == '06') {
                                                    echo "Juni ";
                                                }
                                                if (date("m", strtotime($tugas['tgl_ubah'])) == '07') {
                                                    echo "Juli ";
                                                }
                                                if (date("m", strtotime($tugas['tgl_ubah'])) == '08') {
                                                    echo "Agustus ";
                                                }
                                                if (date("m", strtotime($tugas['tgl_ubah'])) == '09') {
                                                    echo "September ";
                                                }
                                                if (date("m", strtotime($tugas['tgl_ubah'])) == '10') {
                                                    echo "Oktober ";
                                                }
                                                if (date("m", strtotime($tugas['tgl_ubah'])) == '11') {
                                                    echo "November ";
                                                }
                                                if (date("m", strtotime($tugas['tgl_ubah'])) == '12') {
                                                    echo "Desember ";
                                                }

                                                echo date("Y", strtotime($tugas['tgl_ubah']));
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Laporan</th>
                                            <td><?php if ($tugas['laporan'] == '0') {
                                                    echo "LAPORAN BELUM DIKUMPULKAN";
                                                } else { ?>
                                                    <a href="<?= base_url('upload/' . $tugas['file']) ?>"><?= $tugas['file']; ?></a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>