<!-- Footer -->
<!-- <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer> -->
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Klik "Keluar" di bawah jika Anda yakin ingin meninggalkan halaman ini.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?php echo base_url('Login/logout') ?>">Keluar</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Data Realisasi</h4>
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('CAdmin/AdminCkp/TambahRealisasi') ?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group" hidden="true">
                        <label class="col-lg-2 col-sm-2 control-label">id tugas</label>
                        <div class="col-lg-10">
                            <input type="text" id="id_tugas" name="id_tugas">
                            <input type="number" id="volume" name="volume">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Realisasi</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="realisasi" name="realisasi" placeholder="Jumlah Realisasi">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- END Modal Ubah -->


<!-- Modal Ubah TINGKAT KUALITAS -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-kualitas" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Data Tingkat Kualitas</h4>
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('CAdmin/AdminCkp/TambahKualitas') ?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group" hidden="true">
                        <label class="col-lg-2 col-sm-2 control-label">id tugas</label>
                        <div class="col-lg-10">
                            <input type="text" id="id_tugas1" name="id_tugas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label">Tingkat Kualitas (%)</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="kualitas" name="kualitas" placeholder="Jumlah Kualitas">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- END Modal Ubah TINGKAT KUALITAS-->

<!-- Modal Ubah KODE BUTIR-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-kode" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Data Kode Butir</h4>
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('CAdmin/AdminCkp/TambahKode') ?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group" hidden="true">
                        <label class="col-lg-2 col-sm-2 control-label">id tugas</label>
                        <div class="col-lg-10">
                            <input type="text" id="id_tugas2" name="id_tugas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label">Kode Butir</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="kd_butir" name="kd_butir" placeholder="Kode Butir">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- END Modal Ubah KODE BUTIR-->

<!-- Modal Ubah ANGKA KREDIT-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-angka" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Data Angka Kredit</h4>
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('CAdmin/AdminCkp/TambahAngka') ?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group" hidden="true">
                        <label class="col-lg-2 col-sm-2 control-label">id tugas</label>
                        <div class="col-lg-10">
                            <input type="text" id="id_tugas3" name="id_tugas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label">Angka Kredit</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="angka_kredit" name="angka_kredit" placeholder="jumlah Angka Kredit">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- END Modal Ubah ANGKA KREDIT-->

<!-- Modal Ubah KETERANGAN-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-keterangan" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Keterangan</h4>
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('CAdmin/AdminCkp/TambahKeterangan') ?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group" hidden="true">
                        <label class="col-lg-2 col-sm-2 control-label">id tugas</label>
                        <div class="col-lg-10">
                            <input type="text" id="id_tugas4" name="id_tugas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label">Keterangan</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- END Modal Ubah KETERANGAN-->

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- Core plugin JavaScript-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/js/demo/chart-area-demo.js') ?>"></script>
<script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/js/demo/datatables-demo.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(() => {
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url(); ?>CAdmin/AdminMain/notif',
                dataType: 'json',
                success: function(data) {
                    var html = '<span class="badge badge-danger badge-counter">' + data + '</span>';
                    $("#notifCount").html(html);
                }
            });
        }, 1000);
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(() => {
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url(); ?>CAdmin/AdminMain/notifContent',
                dataType: 'json',
                success: function(data) {
                    $("#notifCount").val(data.notif);
                    var html = '';
                    var i;
                    if (data.length == 0) {
                        html += '<a class="dropdown-item d-flex align-items-center" href="#">Tidak Ada Notifikasi Terbaru</a>';
                    }
                    for (i = 0; i < data.length; i++) {
                        var date = new Date(data[i].tgl_ubah);
                        var hari = date.getDay();
                        var tanggal = date.getDate();
                        var bulan = date.getMonth() + 1;
                        var tahun = date.getFullYear();

                        var namaHari = "";
                        var namaBulan = "";
                        if (hari == 1) {
                            namaHari = "Senin";
                        }
                        if (hari == 2) {
                            namaHari = "Selasa";
                        }
                        if (hari == 3) {
                            namaHari = "Rabu";
                        }
                        if (hari == 4) {
                            namaHari = "Kamis";
                        }
                        if (hari == 5) {
                            namaHari = "Jumat";
                        }
                        if (hari == 6) {
                            namaHari = "Sabtu";
                        }
                        if (hari == 7) {
                            namaHari = "Minggu";
                        }

                        if (bulan == 1) {
                            namaBulan = "Januari";
                        }
                        if (bulan == 2) {
                            namaBulan = "Februari";
                        }
                        if (bulan == 3) {
                            namaBulan = "Maret";
                        }
                        if (bulan == 4) {
                            namaBulan = "April";
                        }
                        if (bulan == 5) {
                            namaBulan = "Mei";
                        }
                        if (bulan == 6) {
                            namaBulan = "Juni";
                        }
                        if (bulan == 7) {
                            namaBulan = "Juli";
                        }
                        if (bulan == 8) {
                            namaBulan = "Agustus";
                        }
                        if (bulan == 9) {
                            namaBulan = "September";
                        }
                        if (bulan == 10) {
                            namaBulan = "Oktober";
                        }
                        if (bulan == 11) {
                            namaBulan = "November";
                        }
                        if (bulan == 12) {
                            namaBulan = "Desember";
                        }

                        html += '<a class="dropdown-item d-flex align-items-center" href="<?= base_url() ?>CAdmin/AdminMain/klikNotif/' + data[i].id_tugas + '">';
                        html += '<div class="mr-3">';
                        html += '<div class="icon-circle bg-primary">';
                        html += '<i class="fas fa-file-alt text-white"></i>';
                        html += '</div>';
                        html += '</div>';
                        html += '<div>';
                        html += '<div class="small text-gray-500">' + namaHari + ', ' + tanggal + " " + namaBulan + " " + tahun;
                        html += '</div>';
                        html += '<span class="font-weight-bold">' + data[i].nama + ' Mengunggah Laporan Tugas</span>';
                        html += '</div>';
                        html += '</a>';
                    }
                    $('#notifContent').html(html);
                }
            });
        }, 1000);
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tahun').change(function() {
            var tahun = $(this).val();
            var pegawai = $('#pegawai').val();
            var bulan = $('#bulan').val();
            $.post("<?php echo base_url(); ?>CAdmin/AdminCkp/filter_ckp", {
                pegawai: pegawai,
                bulan: bulan,
                tahun: tahun
            }).done(function(data) {
                $('#viewTabel').html(data);
            });
        })
        // $('#edit').click(function(){
        //   alert("The paragraph was clicked.");
        // });
    })
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#pegawai').change(function() {
            var pegawai = $(this).val();
            var tahun = $('#tahun').val();
            var bulan = $('#bulan').val();
            if (tahun != 0 && bulan != 0) {
                $.post("<?php echo base_url(); ?>CAdmin/AdminCkp/filter_ckp", {
                    pegawai: pegawai,
                    bulan: bulan,
                    tahun: tahun
                }).done(function(data) {
                    $('#viewTabel').html(data);
                });
            }
        })
        // $('#edit').click(function(){
        //   alert("The paragraph was clicked.");
        // });
    })
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#bulan').change(function() {
            var bulan = $(this).val();
            var tahun = $('#tahun').val();
            var pegawai = $('#pegawai').val();
            if (tahun != 0 && pegawai != 0) {
                $.post("<?php echo base_url(); ?>CAdmin/AdminCkp/filter_ckp", {
                    pegawai: pegawai,
                    bulan: bulan,
                    tahun: tahun
                }).done(function(data) {
                    $('#viewTabel').html(data);
                });
            }
        })
        // $('#edit').click(function(){
        //   alert("The paragraph was clicked.");
        // });
    })
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#edit', function() {
            var id = $(this).data('id');
            var realisasi = $(this).data('realisasi');
            var volume = $(this).data('volume');
            $('#id_tugas').val(id);
            $('#realisasi').val(realisasi);
            $('#volume').val(volume);
            // $('#edit-data').modal('hide');
            // alert(realisasi);
        })
        $(document).on('change', '#realisasi', function() {
            var real = $(this).val();
            var vol = $('#volume').val();
            if (vol < real) {
                alert("Realisasi melebihi volume tersedia (" + vol + ")");
                $(this).val("");
            }
        })
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#editKualitas', function() {
            var id = $(this).data('id');
            var kualitas = $(this).data('kualitas');
            $('#id_tugas1').val(id);
            $('#kualitas').val(kualitas);
            // $('#edit-data').modal('hide');
            // alert(realisasi);
        })
        $(document).on('change', '#kualitas', function() {
            var kual = $(this).val();
            if (kual > 97) {
                alert("Tingkat Kualitas Maksimal 97%");
                $(this).val("");
            }
        })
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#editKode', function() {
            var id = $(this).data('id');
            var kd_butir = $(this).data('kd_butir');
            $('#id_tugas2').val(id);
            $('#kd_butir').val(kd_butir);
            // $('#edit-data').modal('hide');
            // alert(realisasi);
        })
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#editAngka', function() {
            var id = $(this).data('id');
            var angkakredit = $(this).data('angkakredit');
            $('#id_tugas3').val(id);
            $('#angka_kredit').val(angkakredit);
            // $('#edit-data').modal('hide');
            // alert(realisasi);
        })
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#editKeterangan', function() {
            var id = $(this).data('id');
            var keterangan = $(this).data('keterangan');
            $('#id_tugas4').val(id);
            $('#keterangan').val(keterangan);
            // $('#edit-data').modal('hide');
            // alert(realisasi);
        })
    });
</script>
</body>

</html>