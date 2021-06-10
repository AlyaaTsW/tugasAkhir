<?php
    $no = 1;
    foreach ($data as $u) { ?>
        <h5 class="m-0 font-weight-bold" style="text-align: center;" id="judulTabel">CAPAIAN KINERJA PEGAWAI TAHUN <?php echo $u['tahun'] ?> </h5>
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
                    <td id="judulNama"><?php echo $u['nama'] ?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>&nbsp : &nbsp</td>
                    <td id="judulJabatan"><?php echo $u['jabatan'] ?></td>
                </tr>
                <tr>
                    <td>Periode</td>
                    <td>&nbsp : &nbsp</td>
                    <td id="judulPeriode"> 
                        <?php
                            if ($u['bulan'] == '1') {
                                 echo "1 - 31 Januari ";
                            }
                             if ($u['bulan'] == '2') {
                                if ($u['tahun'] % 4) {
                                     echo "1 - 28 Februari ";
                                } else {
                                     echo "1 - 29 Februari ";
                                }
                            }
                        ?>
<?php } ?>