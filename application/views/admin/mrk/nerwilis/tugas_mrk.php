                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Penugasan MRK Seksi Nerwilis</h1>
                    <!--                     <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Penugasan MRK</h6>
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
                                <form class="user" action="<?= base_url('CAdmin/AdminMrk/penugasan_mrk_nrw/' . $mrk['id_mrk']) ?>" method="post">
                                    <!-- <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="output">Komponen</label>
                                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                                        placeholder="First Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="output">Kegiatan</label>
                                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                                        placeholder="Last Name">
                                                </div>
                                            </div> -->
                                    <input type="hidden" name="id_mrk" value="<?= $mrk['id_mrk']; ?>">
                                    <div class="form-group">
                                        <label for="komponen">Komponen</label>
                                        <input type="text" class="form-control form-control-user" id="komponen" placeholder="Komponen" name="komponen" style="text-transform: uppercase;" value="<?= $mrk['komponen']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kegiatan">Kegiatan</label>
                                        <input type="text" class="form-control form-control-user" id="kegiatan" name="kegiatan" placeholder="Kegiatan" value="<?= $mrk['kegiatan']; ?>" readonly>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="volume">Volume</label>
                                            <input type="number" class="form-control form-control-user" id="volume" name="volume" placeholder="Volume" value="<?= $mrk['volume']; ?>" readonly>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="satuan">Satuan</label>
                                            <input type="text" class="form-control form-control-user" id="satuan" name="satuan" placeholder="Satuan" value="<?= $mrk['satuan']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="bulan">Bulan</label>
                                            <select class="form-control" id="bulan" name="bulan">
                                                <option value="0_bulan">--- Pilih Bulan ---</option>
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
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="tahun">Tahun</label>
                                            <input type="number" class="form-control form-control-user" id="tahun" name="tahun" value="<?= $mrk['tahun']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="pegawai">Pegawai</label>
                                            <select class="form-control" id="id_user" name="id_user">
                                                <option value="0_user">--- Pilih Pegawai ---</option>
                                                <?php foreach ($user as $u) {
                                                ?>
                                                    <option value="<?php echo $u->id_user ?>"><?php echo $u->nama ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0" hidden="true">
                                            <label for="volume">Bagian</label>
                                            <input type="number" class="form-control form-control-user" id="bagian" name="bagian" value="<?= $mrk['bag']; ?>">
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Simpan</button>
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