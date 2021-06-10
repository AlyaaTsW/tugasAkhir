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
                            <form action="<?= base_url('CAdmin/AdminCKP/exportCKP') ?>" method="POST">
                                <div class="form-group">
                                    <select id="pegawai" class="form-control">
                                        <option selected>Pilih Pegawai</option>
                                        <?php foreach ($user as $u) { ?>
                                        <option value="<?php echo $u->id_user ?>"><?php echo $u->nama ?></option>
                                        <?php } ?>
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
                                        <input type="number" class="form-control" placeholder="tahun" aria-label="tahun" aria-describedby="basic-addon2" id="tahun" name="tahun">
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export CKP</button>
                            </form>
                        </div>
                        <div class="card-body" id="viewTabel">
                            
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->