                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data CKP Pegawai</h1>
                    <!--                     <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <form>
                                <div class="form-group">
                                    <select id="pegawai" class="form-control">
                                        <option selected>Pilih Pegawai</option>
                                        <option value="1">Pegawai 1</option>
                                        <option value="1">Pegawai 2</option>
                                        <option value="1">Pegawai 3</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select id="bulan" class="form-control">
                                            <option selected>Pilih Bulan</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Tahun" aria-label="Tahun" aria-describedby="basic-addon2">
                                    </div>
                                </div>
                                <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download CKP</button>
                                <button class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export CKP</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <h5 class="m-0 font-weight-bold" style="text-align: center;">CAPAIAN KINERJA PEGAWAI TAHUN </h5>
                            <br>
                            <div class="table-responsive">
                                <table cellspacing="0" style="font-family: times new roman;">
                                    <tr>
                                        <td>Satuan Organisasi</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Staf Seksi Statistik Sosial BPS Kota Malang Jawa Timur</td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td><?php echo $this->session->userdata('nama'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jabatan</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td><?php echo $this->session->userdata('jabatan'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Periode</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Satuan Organisasi</td>
                                    </tr>
                                </table>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Uraian Kegiatan</th>
                                            <th rowspan="2">Satuan</th>
                                            <th colspan="3">Kuantitas</th>
                                            <th rowspan="2">Tingkat Kualitas <br> (%) </th>
                                            <th rowspan="2">Kode Butir Kegiatan</th>
                                            <th rowspan="2">Angka Kredit</th>
                                            <th rowspan="2">Keterangan</th>
                                        </tr>
                                        <tr>
                                            <th>Target</th>
                                            <th>Realisasi</th>
                                            <th>%</th>
                                        </tr>
                                        <tr style="text-align: center;">
                                            <th>(1)</th>
                                            <th>(2)</th>
                                            <th>(3)</th>
                                            <th>(4)</th>
                                            <th>(5)</th>
                                            <th>(6)</th>
                                            <th>(7)</th>
                                            <th>(8)</th>
                                            <th>(9)</th>
                                            <th>(10)</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    $no = 1;
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td>SHPB</td>
                                            <td>Responden</td>
                                            <td>6</td>
                                            <td>6</td>
                                            <td>&nbsp</td>
                                            <td>&nbsp</td>
                                            <td>&nbsp</td>
                                            <td>&nbsp</td>
                                            <td>&nbsp</td>
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