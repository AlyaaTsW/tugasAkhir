<?php
    $no = 1; //foreach header
    foreach ($data as $u) { ?>
        <h5 class="m-0 font-weight-bold" style="text-align: center;" id="judulTabel">CAPAIAN KINERJA PEGAWAI TAHUN <?php echo $u['tahun'] ?> </h5>
        <br>
        <div class="table-responsive">
            <table cellspacing="0" style="font-family: times new roman;" >
                <tr>
                    <td>Satuan Organisasi</td>
                    <td colspan="5">: Staf Seksi Statistik Sosial BPS Kota Malang Jawa Timur</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td  colspan="5">: <?php echo $u['nama'] ?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td  colspan="5">: <?php echo $u['jabatan'] ?></td>
                </tr>
                <tr>
                    <td>Periode</td>
                    <td  colspan="5">:  
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
                            if ($u['bulan'] == '3') {
                                echo "1 - 31 Maret ";
                            }
                            if ($u['bulan'] == '4') {
                                echo "1 - 30 April ";
                            }
                            if ($u['bulan'] == '5') {
                                echo "1 - 31 Mei ";
                            }
                            if ($u['bulan'] == '6') {
                                echo "1 - 30 Juni ";
                            }
                            if ($u['bulan'] == '7') {
                                echo "1 - 31 Juli ";
                            }
                            if ($u['bulan'] == '8') {
                                echo "1 - 31 Agustus ";
                            }
                            if ($u['bulan'] == '9') {
                                echo "1 - 30 September ";
                            }
                            if ($u['bulan'] == '10') {
                                echo "1 - 31 Oktober ";
                            }
                            if ($u['bulan'] == '11') {
                                echo "1 - 30 November ";
                            }
                            if ($u['bulan'] == '12') {
                                echo "1 - 31 Desember ";
                            }

                            echo $u['tahun'];
                        ?>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" cellpadding="8">
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
                <tbody id="tabelBody">
<?php break; } //foreach header END
                if ($distribusi > 0) { ?>
                    <tr>
                        <td colspan="10">Distribusi</td>
                    </tr>
                <?php foreach ($data as $u) { //foreach distribusi
                        if ($u['bag']== '1') { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u['kegiatan'] ?></td>
                        <td><?php echo $u['satuan'] ?></td>
                        <td><?php echo $u['volume'] ?></td>
                        <td><?php echo $u['realisasi'] ?></td>
                        <td><?php echo $u['persen'] ?></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    
                <?php
                        } //if ($u['bag']== '1') END 
                    } //foreach distribusi END
                } //if($distribusi > 0) END
                if ($nerwilis > 0) { ?>
                    <tr>
                        <td colspan="10">Nerwilis</td>
                    </tr>
                <?php foreach ($data as $u) { //foreach nerwilis
                        if ($u['bag']== '2') { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u['kegiatan'] ?></td>
                        <td><?php echo $u['satuan'] ?></td>
                        <td><?php echo $u['volume'] ?></td>
                        <td><?php echo $u['realisasi'] ?></td>
                        <td><?php echo $u['persen'] ?></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    
                <?php
                        } //if ($u['bag']== '2') END 
                    } //foreach nerwilis END
                } //if($nerwilis > 0) END
                if ($produksi > 0) { ?>
                    <tr>
                        <td colspan="10">Produksi</td>
                    </tr>
                <?php foreach ($data as $u) { //foreach produksi
                        if ($u['bag']== '3') { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u['kegiatan'] ?></td>
                        <td><?php echo $u['satuan'] ?></td>
                        <td><?php echo $u['volume'] ?></td>
                        <td><?php echo $u['realisasi'] ?></td>
                        <td><?php echo $u['persen'] ?></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    
                <?php
                        } //if ($u['bag']== '3') END 
                    } //foreach produksi END
                } //if($produksi > 0) END
                if ($sosial > 0) { ?>
                    <tr>
                        <td colspan="10">Sosial</td>
                    </tr>
                <?php foreach ($data as $u) { //foreach sosial
                        if ($u['bag']== '4') { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u['kegiatan'] ?></td>
                        <td><?php echo $u['satuan'] ?></td>
                        <td><?php echo $u['volume'] ?></td>
                        <td><?php echo $u['realisasi'] ?></td>
                        <td><?php echo $u['persen'] ?></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    
                <?php
                        } //if ($u['bag']== '4') END 
                    } //foreach sosial END
                } //if($sosial > 0) END
                if ($ipds > 0) { ?>
                    <tr>
                        <td colspan="10">ipds</td>
                    </tr>
                <?php foreach ($data as $u) { //foreach ipds
                        if ($u['bag']== '5') { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u['kegiatan'] ?></td>
                        <td><?php echo $u['satuan'] ?></td>
                        <td><?php echo $u['volume'] ?></td>
                        <td><?php echo $u['realisasi'] ?></td>
                        <td><?php echo $u['persen'] ?></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    
                <?php
                        } //if ($u['bag']== '5') END 
                    } //foreach ipds END
                } //if($ipds > 0) END ?>
                </tbody>
            </table>
        </div>