<?php
    $no = 1; //foreach header
    foreach ($data as $u) { ?>
        <table>
            <tr>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td border="3" style="font-family: Arrus Blk BT; font-size: 16pt;">CKP-R</td>
            </tr>
        </table>
        <h5 class="m-0 font-weight-bold" style="text-align: center;" id="judulTabel" style="font-family: Segoe UI; font-size: 14pt;">CAPAIAN KINERJA PEGAWAI TAHUN <?php echo $u['tahun'] ?> </h5>
        <br>
        <div class="table-responsive">
            <table cellspacing="3" >
                <tr>
                    <td style="font-family: Segoe UI; font-size: 10pt;">Satuan Organisasi</td>
                    <td colspan="5"><b>: Staf Seksi Statistik Sosial BPS Kota Malang Jawa Timur</b></td>
                </tr>
                <tr>
                    <td style="font-family: Segoe UI; font-size: 10pt;">Nama</td>
                    <td  colspan="5"><b>: <?php echo $u['nama'] ?></b></td>
                </tr>
                <tr>
                    <td style="font-family: Segoe UI; font-size: 10pt;">Jabatan</td>
                    <td  colspan="5"><b>: <?php echo $u['jabatan'] ?></b></td>
                </tr>
                <tr>
                    <td style="font-family: Segoe UI; font-size: 10pt;">Periode</td>
                    <td  colspan="5"><b>:  
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
                        ?> </b>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" cellpadding="8">
                <thead>
                    <tr style="font-family: Segoe UI; font-size: 8pt;">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Uraian Kegiatan</th>
                        <th rowspan="2">Satuan</th>
                        <th colspan="3">Kuantitas</th>
                        <th rowspan="2">Tingkat <br> Kualitas <br> (%) </th>
                        <th rowspan="2">Kode Butir <br> Kegiatan</th>
                        <th rowspan="2">Angka <br> Kredit</th>
                        <th rowspan="2">Keterangan</th>
                    </tr>
                    <tr style="font-family: Segoe UI; font-size: 8pt;">
                        <th>Target</th>
                        <th>Realisasi</th>
                        <th>&nbsp % &nbsp</th>
                    </tr>
                    <tr style="text-align: center; font-family: Segoe UI; font-size: 8pt;">
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
                    <tr>
                        <td colspan="2" style="font-family: Segoe UI; font-size: 10pt;"><b>UTAMA</b></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
<?php break; } //foreach header END
                if ($distribusi > 0) { ?>
                    <tr>
                        <td colspan="2" style="font-family: Segoe UI; font-size: 10pt;"><b>Distribusi</b></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                <?php foreach ($data as $u) { //foreach distribusi
                        if ($u['bag']== '1') { ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $no++ ?></td>
                        <td><?php echo $u['kegiatan'] ?></td>
                        <td><?php echo $u['satuan'] ?></td>
                        <td><?php echo $u['volume'] ?></td>
                        <td><?php echo $u['realisasi'] ?></td>
                        <td>&nbsp</td>
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
                        <td colspan="2" style="font-family: Segoe UI; font-size: 10pt;"> <b>Nerwilis</b> </td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                <?php foreach ($data as $u) { //foreach nerwilis
                        if ($u['bag']== '2') { ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $no++ ?></td>
                        <td><?php echo $u['kegiatan'] ?></td>
                        <td><?php echo $u['satuan'] ?></td>
                        <td><?php echo $u['volume'] ?></td>
                        <td><?php echo $u['realisasi'] ?></td>
                        <td>&nbsp</td>
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
                        <td colspan="2" style="font-family: Segoe UI; font-size: 10pt;"><b>Produksi</b></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                <?php foreach ($data as $u) { //foreach produksi
                        if ($u['bag']== '3') { ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $no++ ?></td>
                        <td><?php echo $u['kegiatan'] ?></td>
                        <td><?php echo $u['satuan'] ?></td>
                        <td><?php echo $u['volume'] ?></td>
                        <td><?php echo $u['realisasi'] ?></td>
                        <td>&nbsp</td>
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
                        <td colspan="2" style="font-family: Segoe UI; font-size: 10pt;"><b>Sosial</b></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                <?php foreach ($data as $u) { //foreach sosial
                        if ($u['bag']== '4') { ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $no++ ?></td>
                        <td><?php echo $u['kegiatan'] ?></td>
                        <td><?php echo $u['satuan'] ?></td>
                        <td><?php echo $u['volume'] ?></td>
                        <td><?php echo $u['realisasi'] ?></td>
                        <td>&nbsp</td>
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
                        <td colspan="2" style="font-family: Segoe UI; font-size: 10pt;"><b>IPDS</b></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                <?php foreach ($data as $u) { //foreach ipds
                        if ($u['bag']== '5') { ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $no++ ?></td>
                        <td><?php echo $u['kegiatan'] ?></td>
                        <td><?php echo $u['satuan'] ?></td>
                        <td><?php echo $u['volume'] ?></td>
                        <td><?php echo $u['realisasi'] ?></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    
                <?php
                        } //if ($u['bag']== '5') END 
                    } //foreach ipds END
                } //if($ipds > 0) END ?>
                    <tr>
                        <td colspan="2" style="font-family: Segoe UI; font-size: 10pt;"><b>TAMBAHAN</b></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td colspan="8" style="font-family: Segoe UI; font-size: 10pt;"><b>JUMLAH</b></td>
                        <td>&nbsp</td>
                        <td class="table-active">&nbsp</td>
                    </tr>
                    <tr>
                        <td colspan="5" style="font-family: Segoe UI; font-size: 10pt;"><b>RATA-RATA</b></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td rowspan="2">&nbsp</td>
                        <td class="table-active" rowspan="2">&nbsp</td>
                        <td class="table-active" rowspan="2">&nbsp</td>
                    </tr>
                    <tr>
                        <td colspan="5" style="font-family: Segoe UI; font-size: 10pt;"><b>CAPAIAN KINERJA PEGAWAI (CKP)</b></td>
                        <td colspan="2">&nbsp</td>
                    </tr>
                </tbody>
            </table>
            <table>
                    <tr>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td style="font-family: Segoe UI; font-size: 10pt;"><b>Penilaian Kinerja</b></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td style="font-family: Segoe UI; font-size: 10pt;"><b>Tanggal : 
                            <?php
                            foreach ($data as $u) {
                                if ($u['bulan'] == '1') {
                                     echo "31 Januari ";
                                }
                                if ($u['bulan'] == '2') {
                                    if ($u['tahun'] % 4) {
                                         echo "28 Februari ";
                                    } else {
                                         echo "29 Februari ";
                                    }
                                }
                                if ($u['bulan'] == '3') {
                                    echo "31 Maret ";
                                }
                                if ($u['bulan'] == '4') {
                                    echo "30 April ";
                                }
                                if ($u['bulan'] == '5') {
                                    echo "31 Mei ";
                                }
                                if ($u['bulan'] == '6') {
                                    echo "30 Juni ";
                                }
                                if ($u['bulan'] == '7') {
                                    echo "31 Juli ";
                                }
                                if ($u['bulan'] == '8') {
                                    echo "31 Agustus ";
                                }
                                if ($u['bulan'] == '9') {
                                    echo "30 September ";
                                }
                                if ($u['bulan'] == '10') {
                                    echo "31 Oktober ";
                                }
                                if ($u['bulan'] == '11') {
                                    echo "30 November ";
                                }
                                if ($u['bulan'] == '12') {
                                    echo "31 Desember ";
                                }

                                echo $u['tahun'];
                            ?> </b>
                        </td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td style="text-align: center; font-family: Segoe UI; font-size: 9pt;" colspan="2"><b>Pegawai Yang Dinilai</b></td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td style="text-align: center; font-family: Segoe UI; font-size: 9pt;" colspan="3"><b>Pejabat Penilai</b></td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td style="text-align: center; font-family: Segoe UI; font-size: 9pt;" colspan="2"><b><u><?php echo $u['nama'] ?></u></b></td>
                    <?php break; } 
                        foreach ($kepala as $k) {
                    ?>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td style="text-align: center; font-family: Segoe UI; font-size: 9pt;" colspan="3"><b><u><?php echo $k['nama'] ?></u></b></td>
                    <?php break; } 
                        foreach ($data as $u) {
                    ?>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td style="text-align: center; font-family: Segoe UI; font-size: 9pt;" colspan="2"><b>NIP.<?php echo $u['nip'] ?></b></td>
                    <?php break; } 
                        foreach ($kepala as $k) {
                    ?>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td style="text-align: center; font-family: Segoe UI; font-size: 9pt;" colspan="3"><b>NIP.<?php echo $k['nip'] ?></b></td>
                    </tr>
                    <?php break; } ?>
            </table>
        </div>