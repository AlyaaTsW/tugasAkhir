                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data MRK <?php echo date('Y') ?> </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $mrk ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <?php
                        if ($mrk1 == 0) {
                            $mrk2 = 0;
                        } else {
                            $mrk2 = round($mrk1 / $mrk * 100, 2);
                        }
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">MRK Ditugaskan
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $mrk2; ?>%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $mrk2; ?>%" aria-valuenow="<?php echo $mrk1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $mrk ?>"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Tugas Bulan Ini</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $tug ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <?php
                        if ($tug1 == 0) {
                            $tug2 = 0;
                        } else {
                            $tug2 = round($tug1 / $tug * 100, 2);
                        }
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Laporan Terkumpul
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $tug2; ?>%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $tug2; ?>%" aria-valuenow="<?php echo $tug1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $tug ?>"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <!-- <div class="col-lg-6 mb-4"> -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tugas Pegawai Bulan ini</h6>
                            <!-- <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> -->
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <!-- <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div> -->

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Komponen</th>
                                            <th>Kegiatan</th>
                                            <th>Bagian</th>
                                            <th>Periode</th>
                                            <th>Laporan</th>
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
                    <!-- </div> -->
                    <!-- </div> -->

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->