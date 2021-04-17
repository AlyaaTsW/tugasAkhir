                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data MRK</h1>
<!--                     <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah MRK</h6>
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
                                        <form class="user" action="<?= base_url('CAdmin/AdminMrk/tambah_mrk_nerw') ?>" method="post">
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
                                            <div class="form-group">
                                                <label for="komponen">Komponen</label>
                                                <input type="text" class="form-control form-control-user" id="komponen" placeholder="Komponen" name="komponen" style="text-transform: uppercase;">
                                            </div>
                                            <div class="form-group">
                                                <label for="kegiatan">Kegiatan</label>
                                                <input type="text" class="form-control form-control-user" id="kegiatan" name="kegiatan" placeholder="Kegiatan">
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="volume">Volume</label>
                                                    <input type="number" class="form-control form-control-user" id="volume" name="volume" placeholder="Volume">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="satuan">Satuan</label>
                                                    <input type="text" class="form-control form-control-user" id="satuan" name="satuan" placeholder="Satuan">
                                                </div>
                                            </div>
                                            <div class="form-group row" hidden>
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="volume">Bagian</label>
                                                    <input type="number" class="form-control form-control-user" id="bagian" name="bagian" value="2">
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="tahun">Tahun</label>
                                                    <input type="number" class="form-control form-control-user" id="tahun" name="tahun" value="<?php echo date("Y"); ?>">
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