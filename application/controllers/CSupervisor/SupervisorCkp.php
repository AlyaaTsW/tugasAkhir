<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class supervisorCkp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('supervisor_ckp');
        $this->load->model('admin_pengguna');
    }

    public function index()
    {
        $data['title'] = "CKP Saya";
        $data['user'] = $this->admin_pengguna->all();
        $this->load->view('supervisor/header_supervisor', $data);
        $this->load->view('supervisor/ckp/ckp_saya', $data);
        $this->load->view('supervisor/footer_supervisor_ckp', $data);
    }

    public function ckp_pegawai()
    {
        $data['title'] = "CKP Pegawai";
        $data['user'] = $this->admin_pengguna->all();
        $this->load->view('supervisor/header_supervisor', $data);
        $this->load->view('supervisor/ckp/ckp_pegawai', $data);
        $this->load->view('supervisor/footer_supervisor_ckp', $data);
    }

    public function filter_ckp()
    {

        $pegawai = $this->input->post('pegawai', true);
        if ($pegawai != $_SESSION['id_user']) {
            $data = $this->supervisor_ckp->selectCkpPegawaiUtama($_SESSION['bagian']);
            $data1 = $this->supervisor_ckp->selectCkpPegawaiTambahan($_SESSION['bagian']);
        } else {
            $data = $this->supervisor_ckp->selectCkpSayaUtama();
            $data1 = $this->supervisor_ckp->selectCkpSayaTambahan();
        }

        $distribusi = $this->supervisor_ckp->countCkpPegawaiUtama(1);
        $nerwilis = $this->supervisor_ckp->countCkpPegawaiUtama(2);
        $produksi = $this->supervisor_ckp->countCkpPegawaiUtama(3);
        $sosial = $this->supervisor_ckp->countCkpPegawaiUtama(4);
        $ipds = $this->supervisor_ckp->countCkpPegawaiUtama(5);

        $distribusi1 = $this->supervisor_ckp->countCkpPegawaiTambahan(1);
        $nerwilis1 = $this->supervisor_ckp->countCkpPegawaiTambahan(2);
        $produksi1 = $this->supervisor_ckp->countCkpPegawaiTambahan(3);
        $sosial1 = $this->supervisor_ckp->countCkpPegawaiTambahan(4);
        $ipds1 = $this->supervisor_ckp->countCkpPegawaiTambahan(5);

        $all = $this->supervisor_ckp->countAllCkpPegawai($_SESSION['bagian']);
        $allTambahan = $this->supervisor_ckp->countAllCkpPegawaiTambahan($_SESSION['bagian']);

        $jmlhData = 0;
        $jmlhAngka = 0;
        $jmlhKualitas = 0;
        $jmlhPersen = 0;
        $jmlhRealisasi = 0;

        $no = 1;
        if ($all == 0) {
            echo "<script>alert('Data CKP Tidak Tersedia');</script>";
        }
        foreach ($data as $u) {
            echo '<h5 class="m-0 font-weight-bold" style="text-align: center;" id="judulTabel">CAPAIAN KINERJA PEGAWAI TAHUN ' . $u['tahun'] . ' </h5>
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
                                        <td id="judulNama">' . $u['nama'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>Jabatan</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td id="judulJabatan">' . $u['jabatan'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>Periode</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td id="judulPeriode">';
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
            echo '</td>
                                    </tr>
                                </table>
                                <table class="table table-bordered table-responsive" id="dataTable" cellspacing="0">
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
                                    <tr>
                                        <td colspan="2"><b>UTAMA</b></td>
                                        <td>&nbsp</td>
                                        <td>&nbsp</td>
                                        <td>&nbsp</td>
                                        <td>&nbsp</td>
                                        <td>&nbsp</td>
                                        <td>&nbsp</td>
                                        <td>&nbsp</td>
                                        <td>&nbsp</td>
                                    </tr>';
            break;
        }
        if ($distribusi > 0) {
            echo '<tr>';
            echo '<td colspan="2"><b>Distribusi</b></td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<tr>';
            foreach ($data as $u) {
                if ($u['bag'] == '1') {
                    echo '<tr>';
                    echo '<td>' . $no++ . '</td>';
                    echo '<td>' . $u['kegiatan'] . '</td>';
                    echo '<td>' . $u['satuan'] . '</td>';
                    echo '<td>' . $u['volume'] . '</td>';
                    echo '<td>' . $u['realisasi'] . '&nbsp&nbsp<a id="edit" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-data"
                                href="javascript:;"
                                data-id="' . $u['id_tugas'] . '"
                                data-volume="' . $u['volume'] . '"
                                data-realisasi="' . $u['realisasi'] . '">
                                <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['realisasi'] == 0) {
                        echo '0';
                    } else {
                        $persen = round($u['realisasi'] / $u['volume'] * 100, 2);
                        echo $persen . '%';
                        $jmlhPersen += $persen;
                    }
                    echo '</td>';
                    echo '<td>';
                    if ($u['kualitas'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['kualitas'] . '% &nbsp&nbsp';
                    }
                    echo '<a id="editKualitas" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kualitas"
                                href="javascript:;"
                                data-id="' . $u['id_tugas'] . '"
                                data-kualitas="' . $u['kualitas'] . '">
                                <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['kd_butir'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['kd_butir'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editKode" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kode"
                                href="javascript:;"
                                data-id="' . $u['id_tugas'] . '"
                                data-kd_butir="' . $u['kd_butir'] . '">
                                <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['angka_kredit'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['angka_kredit'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editAngka" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-angka"
                                href="javascript:;"
                                data-id="' . $u['id_tugas'] . '"
                                data-angkakredit="' . $u['angka_kredit'] . '">
                                <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['keterangan'] == NULL) {
                        echo '&nbsp';
                    } else {
                        echo $u['keterangan'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editKeterangan" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-keterangan"
                                href="javascript:;"
                                data-id="' . $u['id_tugas'] . '"
                                data-keterangan="' . $u['keterangan'] . '">
                                <i class="fas fa-pen-alt"></i></a></td>';
                    echo '</tr>';
                    $jmlhData++;
                    $jmlhAngka += $u['angka_kredit'];
                    $jmlhKualitas += $u['kualitas'];
                    $jmlhRealisasi += $u['realisasi'];
                }
            }
        }
        if ($nerwilis > 0) {
            echo '<tr>';
            echo '<td colspan="2"><b>Nerwilis</b></td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<tr>';
            foreach ($data as $u) {
                if ($u['bag'] == '2') {
                    echo '<tr>';
                    echo '<td>' . $no++ . '</td>';
                    echo '<td>' . $u['kegiatan'] . '</td>';
                    echo '<td>' . $u['satuan'] . '</td>';
                    echo '<td>' . $u['volume'] . '</td>';
                    echo '<td>' . $u['realisasi'] . '&nbsp&nbsp<a id="edit" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-data"
                                href="javascript:;"
                                data-id="' . $u['id_tugas'] . '"
                                data-volume="' . $u['volume'] . '"
                                data-realisasi="' . $u['realisasi'] . '">
                                <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['realisasi'] == 0) {
                        echo '0';
                    } else {
                        $persen = round($u['realisasi'] / $u['volume'] * 100, 2);
                        echo $persen . '%';
                        $jmlhPersen += $persen;
                    }
                    echo '</td>';
                    echo '<td>';
                    if ($u['kualitas'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['kualitas'] . '% &nbsp&nbsp';
                    }
                    echo '<a id="editKualitas" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kualitas"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-kualitas="' . $u['kualitas'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['kd_butir'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['kd_butir'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editKode" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kode"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-kd_butir="' . $u['kd_butir'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['angka_kredit'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['angka_kredit'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editAngka" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-angka"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-angkakredit="' . $u['angka_kredit'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['keterangan'] == NULL) {
                        echo '&nbsp';
                    } else {
                        echo $u['keterangan'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editKeterangan" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-keterangan"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-keterangan="' . $u['keterangan'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '</tr>';
                    $jmlhData++;
                    $jmlhAngka += $u['angka_kredit'];
                    $jmlhKualitas += $u['kualitas'];
                    $jmlhRealisasi += $u['realisasi'];
                }
            }
        }
        if ($produksi > 0) {
            echo '<tr>';
            echo '<td colspan="2"><b>Produksi</b></td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<tr>';
            foreach ($data as $u) {
                if ($u['bag'] == '3') {
                    echo '<tr>';
                    echo '<td>' . $no++ . '</td>';
                    echo '<td>' . $u['kegiatan'] . '</td>';
                    echo '<td>' . $u['satuan'] . '</td>';
                    echo '<td>' . $u['volume'] . '</td>';
                    echo '<td>' . $u['realisasi'] . '&nbsp&nbsp<a id="edit" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-data"
                                href="javascript:;"
                                data-id="' . $u['id_tugas'] . '"
                                data-volume="' . $u['volume'] . '"
                                data-realisasi="' . $u['realisasi'] . '">
                                <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['realisasi'] == 0) {
                        echo '0';
                    } else {
                        $persen = round($u['realisasi'] / $u['volume'] * 100, 2);
                        echo $persen . '%';
                        $jmlhPersen += $persen;
                    }
                    echo '</td>';
                    echo '<td>';
                    if ($u['kualitas'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['kualitas'] . '% &nbsp&nbsp';
                    }
                    echo '<a id="editKualitas" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kualitas"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-kualitas="' . $u['kualitas'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['kd_butir'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['kd_butir'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editKode" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kode"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-kd_butir="' . $u['kd_butir'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['angka_kredit'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['angka_kredit'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editAngka" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-angka"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-angkakredit="' . $u['angka_kredit'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['keterangan'] == NULL) {
                        echo '&nbsp';
                    } else {
                        echo $u['keterangan'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editKeterangan" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-keterangan"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-keterangan="' . $u['keterangan'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '</tr>';
                    $jmlhData++;
                    $jmlhAngka += $u['angka_kredit'];
                    $jmlhKualitas += $u['kualitas'];
                    $jmlhRealisasi += $u['realisasi'];
                }
            }
        }
        if ($sosial > 0) {
            echo '<tr>';
            echo '<td colspan="2"><b>Sosial</b></td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<tr>';
            foreach ($data as $u) {
                if ($u['bag'] == '4') {
                    echo '<tr>';
                    echo '<td>' . $no++ . '</td>';
                    echo '<td>' . $u['kegiatan'] . '</td>';
                    echo '<td>' . $u['satuan'] . '</td>';
                    echo '<td>' . $u['volume'] . '</td>';
                    echo '<td>' . $u['realisasi'] . '&nbsp&nbsp<a id="edit" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-data"
                                href="javascript:;"
                                data-id="' . $u['id_tugas'] . '"
                                data-volume="' . $u['volume'] . '"
                                data-realisasi="' . $u['realisasi'] . '">
                                <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['realisasi'] == 0) {
                        echo '0';
                    } else {
                        $persen = round($u['realisasi'] / $u['volume'] * 100, 2);
                        echo $persen . '%';
                        $jmlhPersen += $persen;
                    }
                    echo '</td>';
                    echo '<td>';
                    if ($u['kualitas'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['kualitas'] . '% &nbsp&nbsp';
                    }
                    echo '<a id="editKualitas" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kualitas"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-kualitas="' . $u['kualitas'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['kd_butir'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['kd_butir'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editKode" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kode"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-kd_butir="' . $u['kd_butir'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['angka_kredit'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['angka_kredit'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editAngka" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-angka"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-angkakredit="' . $u['angka_kredit'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['keterangan'] == NULL) {
                        echo '&nbsp';
                    } else {
                        echo $u['keterangan'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editKeterangan" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-keterangan"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-keterangan="' . $u['keterangan'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '</tr>';
                    $jmlhData++;
                    $jmlhAngka += $u['angka_kredit'];
                    $jmlhKualitas += $u['kualitas'];
                    $jmlhRealisasi += $u['realisasi'];
                }
            }
        }
        if ($ipds > 0) {
            echo '<tr>';
            echo '<td colspan="2"><b>IPDS</b></td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<td>&nbsp</td>';
            echo '<tr>';
            foreach ($data as $u) {
                if ($u['bag'] == '5') {
                    echo '<tr>';
                    echo '<td>' . $no++ . '</td>';
                    echo '<td>' . $u['kegiatan'] . '</td>';
                    echo '<td>' . $u['satuan'] . '</td>';
                    echo '<td>' . $u['volume'] . '</td>';
                    echo '<td>' . $u['realisasi'] . '&nbsp&nbsp<a id="edit" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-data"
                                href="javascript:;"
                                data-id="' . $u['id_tugas'] . '"
                                data-volume="' . $u['volume'] . '"
                                data-realisasi="' . $u['realisasi'] . '">
                                <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['realisasi'] == 0) {
                        echo '0';
                    } else {
                        $persen = round($u['realisasi'] / $u['volume'] * 100, 2);
                        echo $persen . '%';
                        $jmlhPersen += $persen;
                    }
                    echo '</td>';
                    echo '<td>';
                    if ($u['kualitas'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['kualitas'] . '% &nbsp&nbsp';
                    }
                    echo '<a id="editKualitas" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kualitas"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-kualitas="' . $u['kualitas'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['kd_butir'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['kd_butir'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editKode" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kode"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-kd_butir="' . $u['kd_butir'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['angka_kredit'] == 0) {
                        echo '&nbsp';
                    } else {
                        echo $u['angka_kredit'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editAngka" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-angka"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-angkakredit="' . $u['angka_kredit'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '<td>';
                    if ($u['keterangan'] == NULL) {
                        echo '&nbsp';
                    } else {
                        echo $u['keterangan'] . '&nbsp&nbsp';
                    }
                    echo '<a id="editKeterangan" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-keterangan"
                                            href="javascript:;"
                                            data-id="' . $u['id_tugas'] . '"
                                            data-keterangan="' . $u['keterangan'] . '">
                                            <i class="fas fa-pen-alt"></i></a></td>';
                    echo '</tr>';
                    $jmlhData++;
                    $jmlhAngka += $u['angka_kredit'];
                    $jmlhKualitas += $u['kualitas'];
                    $jmlhRealisasi += $u['realisasi'];
                }
            }
        }
        if ($all > 0) {
            if ($allTambahan > 0) {
                echo '
                            <tr>
                                <td colspan="2"><b>TAMBAHAN</b></td>
                                <td>&nbsp</td>
                                <td>&nbsp</td>
                                <td>&nbsp</td>
                                <td>&nbsp</td>
                                <td>&nbsp</td>
                                <td>&nbsp</td>
                                <td>&nbsp</td>
                                <td>&nbsp</td>
                            </tr>';
                if ($distribusi1 > 0) {
                    echo '<tr>';
                    echo '<td colspan="2"><b>Distribusi</b></td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<tr>';
                    foreach ($data1 as $u) {
                        if ($u['bag'] == '1') {
                            echo '<tr>';
                            echo '<td>' . $no++ . '</td>';
                            echo '<td>' . $u['kegiatan'] . '</td>';
                            echo '<td>' . $u['satuan'] . '</td>';
                            echo '<td>' . $u['volume'] . '</td>';
                            echo '<td>' . $u['realisasi'] . '&nbsp&nbsp<a id="edit" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-data"
                                                    href="javascript:;"
                                                    data-id="' . $u['id_tugas'] . '"
                                                    data-volume="' . $u['volume'] . '"
                                                    data-realisasi="' . $u['realisasi'] . '">
                                                    <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['realisasi'] == 0) {
                                echo '0';
                            } else {
                                $persen = round($u['realisasi'] / $u['volume'] * 100, 2);
                                echo $persen . '%';
                                $jmlhPersen += $persen;
                            }
                            echo '</td>';
                            echo '<td>';
                            if ($u['kualitas'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['kualitas'] . '% &nbsp&nbsp';
                            }
                            echo '<a id="editKualitas" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kualitas"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-kualitas="' . $u['kualitas'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['kd_butir'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['kd_butir'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editKode" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kode"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-kd_butir="' . $u['kd_butir'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['angka_kredit'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['angka_kredit'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editAngka" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-angka"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-angkakredit="' . $u['angka_kredit'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['keterangan'] == NULL) {
                                echo '&nbsp';
                            } else {
                                echo $u['keterangan'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editKeterangan" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-keterangan"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-keterangan="' . $u['keterangan'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '</tr>';
                            $jmlhData++;
                            $jmlhAngka += $u['angka_kredit'];
                            $jmlhKualitas += $u['kualitas'];
                            $jmlhRealisasi += $u['realisasi'];
                        }
                    }
                }
                if ($nerwilis1 > 0) {
                    echo '<tr>';
                    echo '<td colspan="2"><b>Nerwilis</b></td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<tr>';
                    foreach ($data1 as $u) {
                        if ($u['bag'] == '2') {
                            echo '<tr>';
                            echo '<td>' . $no++ . '</td>';
                            echo '<td>' . $u['kegiatan'] . '</td>';
                            echo '<td>' . $u['satuan'] . '</td>';
                            echo '<td>' . $u['volume'] . '</td>';
                            echo '<td>' . $u['realisasi'] . '&nbsp&nbsp<a id="edit" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-data"
                                                    href="javascript:;"
                                                    data-id="' . $u['id_tugas'] . '"
                                                    data-volume="' . $u['volume'] . '"
                                                    data-realisasi="' . $u['realisasi'] . '">
                                                    <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['realisasi'] == 0) {
                                echo '0';
                            } else {
                                $persen = round($u['realisasi'] / $u['volume'] * 100, 2);
                                echo $persen . '%';
                                $jmlhPersen += $persen;
                            }
                            echo '</td>';
                            echo '<td>';
                            if ($u['kualitas'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['kualitas'] . '% &nbsp&nbsp';
                            }
                            echo '<a id="editKualitas" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kualitas"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-kualitas="' . $u['kualitas'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['kd_butir'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['kd_butir'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editKode" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kode"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-kd_butir="' . $u['kd_butir'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['angka_kredit'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['angka_kredit'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editAngka" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-angka"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-angkakredit="' . $u['angka_kredit'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['keterangan'] == NULL) {
                                echo '&nbsp';
                            } else {
                                echo $u['keterangan'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editKeterangan" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-keterangan"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-keterangan="' . $u['keterangan'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '</tr>';
                            $jmlhData++;
                            $jmlhAngka += $u['angka_kredit'];
                            $jmlhKualitas += $u['kualitas'];
                            $jmlhRealisasi += $u['realisasi'];
                        }
                    }
                }
                if ($produksi1 > 0) {
                    echo '<tr>';
                    echo '<td colspan="2"><b>Produksi</b></td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<tr>';
                    foreach ($data1 as $u) {
                        if ($u['bag'] == '3') {
                            echo '<tr>';
                            echo '<td>' . $no++ . '</td>';
                            echo '<td>' . $u['kegiatan'] . '</td>';
                            echo '<td>' . $u['satuan'] . '</td>';
                            echo '<td>' . $u['volume'] . '</td>';
                            echo '<td>' . $u['realisasi'] . '&nbsp&nbsp<a id="edit" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-data"
                                                    href="javascript:;"
                                                    data-id="' . $u['id_tugas'] . '"
                                                    data-volume="' . $u['volume'] . '"
                                                    data-realisasi="' . $u['realisasi'] . '">
                                                    <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['realisasi'] == 0) {
                                echo '0';
                            } else {
                                $persen = round($u['realisasi'] / $u['volume'] * 100, 2);
                                echo $persen . '%';
                                $jmlhPersen += $persen;
                            }
                            echo '</td>';
                            echo '<td>';
                            if ($u['kualitas'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['kualitas'] . '% &nbsp&nbsp';
                            }
                            echo '<a id="editKualitas" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kualitas"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-kualitas="' . $u['kualitas'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['kd_butir'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['kd_butir'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editKode" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kode"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-kd_butir="' . $u['kd_butir'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['angka_kredit'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['angka_kredit'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editAngka" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-angka"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-angkakredit="' . $u['angka_kredit'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['keterangan'] == NULL) {
                                echo '&nbsp';
                            } else {
                                echo $u['keterangan'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editKeterangan" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-keterangan"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-keterangan="' . $u['keterangan'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '</tr>';
                            $jmlhData++;
                            $jmlhAngka += $u['angka_kredit'];
                            $jmlhKualitas += $u['kualitas'];
                            $jmlhRealisasi += $u['realisasi'];
                        }
                    }
                }
                if ($sosial1 > 0) {
                    echo '<tr>';
                    echo '<td colspan="2"><b>Sosial</b></td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<tr>';
                    foreach ($data1 as $u) {
                        if ($u['bag'] == '4') {
                            echo '<tr>';
                            echo '<td>' . $no++ . '</td>';
                            echo '<td>' . $u['kegiatan'] . '</td>';
                            echo '<td>' . $u['satuan'] . '</td>';
                            echo '<td>' . $u['volume'] . '</td>';
                            echo '<td>' . $u['realisasi'] . '&nbsp&nbsp<a id="edit" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-data"
                                                    href="javascript:;"
                                                    data-id="' . $u['id_tugas'] . '"
                                                    data-volume="' . $u['volume'] . '"
                                                    data-realisasi="' . $u['realisasi'] . '">
                                                    <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['realisasi'] == 0) {
                                echo '0';
                            } else {
                                $persen = round($u['realisasi'] / $u['volume'] * 100, 2);
                                echo $persen . '%';
                                $jmlhPersen += $persen;
                            }
                            echo '</td>';
                            echo '<td>';
                            if ($u['kualitas'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['kualitas'] . '% &nbsp&nbsp';
                            }
                            echo '<a id="editKualitas" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kualitas"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-kualitas="' . $u['kualitas'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['kd_butir'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['kd_butir'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editKode" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kode"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-kd_butir="' . $u['kd_butir'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['angka_kredit'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['angka_kredit'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editAngka" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-angka"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-angkakredit="' . $u['angka_kredit'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['keterangan'] == NULL) {
                                echo '&nbsp';
                            } else {
                                echo $u['keterangan'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editKeterangan" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-keterangan"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-keterangan="' . $u['keterangan'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '</tr>';
                            $jmlhData++;
                            $jmlhAngka += $u['angka_kredit'];
                            $jmlhKualitas += $u['kualitas'];
                            $jmlhRealisasi += $u['realisasi'];
                        }
                    }
                }
                if ($ipds1 > 0) {
                    echo '<tr>';
                    echo '<td colspan="2"><b>IPDS</b></td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<td>&nbsp</td>';
                    echo '<tr>';
                    foreach ($data1 as $u) {
                        if ($u['bag'] == '5') {
                            echo '<tr>';
                            echo '<td>' . $no++ . '</td>';
                            echo '<td>' . $u['kegiatan'] . '</td>';
                            echo '<td>' . $u['satuan'] . '</td>';
                            echo '<td>' . $u['volume'] . '</td>';
                            echo '<td>' . $u['realisasi'] . '&nbsp&nbsp<a id="edit" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-data"
                                                    href="javascript:;"
                                                    data-id="' . $u['id_tugas'] . '"
                                                    data-volume="' . $u['volume'] . '"
                                                    data-realisasi="' . $u['realisasi'] . '">
                                                    <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['realisasi'] == 0) {
                                echo '0';
                            } else {
                                $persen = round($u['realisasi'] / $u['volume'] * 100, 2);
                                echo $persen . '%';
                                $jmlhPersen += $persen;
                            }
                            echo '</td>';
                            echo '<td>';
                            if ($u['kualitas'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['kualitas'] . '% &nbsp&nbsp';
                            }
                            echo '<a id="editKualitas" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kualitas"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-kualitas="' . $u['kualitas'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['kd_butir'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['kd_butir'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editKode" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-kode"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-kd_butir="' . $u['kd_butir'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['angka_kredit'] == 0) {
                                echo '&nbsp';
                            } else {
                                echo $u['angka_kredit'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editAngka" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-angka"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-angkakredit="' . $u['angka_kredit'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '<td>';
                            if ($u['keterangan'] == NULL) {
                                echo '&nbsp';
                            } else {
                                echo $u['keterangan'] . '&nbsp&nbsp';
                            }
                            echo '<a id="editKeterangan" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#edit-keterangan"
                                                                href="javascript:;"
                                                                data-id="' . $u['id_tugas'] . '"
                                                                data-keterangan="' . $u['keterangan'] . '">
                                                                <i class="fas fa-pen-alt"></i></a></td>';
                            echo '</tr>';
                            $jmlhData++;
                            $jmlhAngka += $u['angka_kredit'];
                            $jmlhKualitas += $u['kualitas'];
                            $jmlhRealisasi += $u['realisasi'];
                        }
                    }
                }
            }

            $rataKualitas = 0;
            if ($jmlhKualitas != 0) {
                $rataKualitas = round($jmlhKualitas / $jmlhData, 2);
            }

            $rataPersen = 0;
            if ($jmlhPersen != 0) {
                $rataPersen = round($jmlhPersen / $jmlhData, 2);
            }

            $jmlhCkp = 0;
            if ($jmlhRealisasi != 0 && $jmlhKualitas != 0) {
                $jmlhCkp = round($rataKualitas / $jmlhRealisasi, 2);
            }

            echo '
                        <tr>
                            <td colspan="8"><b>JUMLAH</b></td>
                            <td>';
            if ($jmlhAngka == 0) {
                echo '&nbsp';
            } else {
                echo $jmlhAngka;
            }
            echo '
                            </td>
                            <td class="table-active">&nbsp</td>
                        </tr>
                        <tr>
                            <td colspan="5"><b>RATA-RATA</b></td>
                            <td>';
            if ($rataPersen == 0) {
                echo '&nbsp';
            } else {
                echo $rataPersen;
            }
            echo
                '</td>
                <td>';
            if ($rataKualitas == 0) {
                echo '&nbsp';
            } else {
                echo $rataKualitas;
            }
            echo
                '</td>
                            <td rowspan="2">&nbsp</td>
                            <td class="table-active" rowspan="2">&nbsp</td>
                            <td class="table-active" rowspan="2">&nbsp</td>
                        </tr>
                        <tr>
                            <td colspan="5"><b>CAPAIAN KINERJA PEGAWAI (CKP)</b></td>
                            <td colspan="2">';
            if ($jmlhCkp == 0) {
                echo '&nbsp';
            } else {
                echo $jmlhCkp;
            }
            echo
                '</td>
                        </tr>
                    </tbody>
                </table>
            </div>';
        }
    }

    public function TambahRealisasi()
    {
        $this->supervisor_ckp->prosesTambahRealisasi();
        echo "<script>alert('Anda berhasil mengedit data realisasi');</script>";
        redirect('CSupervisor/SupervisorCkp/ckp_pegawai', 'refresh');
    }

    public function TambahRealisasiSaya()
    {
        $this->supervisor_ckp->prosesTambahRealisasi();
        echo "<script>alert('Anda berhasil mengedit data realisasi');</script>";
        redirect('CSupervisor/SupervisorCkp', 'refresh');
    }

    public function TambahKualitas()
    {
        $this->supervisor_ckp->prosesTambahKualitas();
        echo "<script>alert('Anda berhasil mengedit data tingkat kualitas');</script>";
        redirect('CSupervisor/SupervisorCkp/ckp_pegawai', 'refresh');
    }

    public function TambahKualitasSaya()
    {
        $this->supervisor_ckp->prosesTambahKualitas();
        echo "<script>alert('Anda berhasil mengedit data tingkat kualitas');</script>";
        redirect('CSupervisor/SupervisorCkp', 'refresh');
    }

    public function TambahKode()
    {
        $this->supervisor_ckp->prosesTambahKode();
        echo "<script>alert('Anda berhasil mengedit data kode butir');</script>";
        redirect('CSupervisor/SupervisorCkp/ckp_pegawai', 'refresh');
    }

    public function TambahKodeSaya()
    {
        $this->supervisor_ckp->prosesTambahKode();
        echo "<script>alert('Anda berhasil mengedit data kode butir');</script>";
        redirect('CSupervisor/SupervisorCkp', 'refresh');
    }

    public function TambahAngka()
    {
        $this->supervisor_ckp->prosesTambahAngka();
        echo "<script>alert('Anda berhasil mengedit data angka kredit');</script>";
        redirect('CSupervisor/SupervisorCkp/ckp_pegawai', 'refresh');
    }

    public function TambahAngkaSaya()
    {
        $this->supervisor_ckp->prosesTambahAngka();
        echo "<script>alert('Anda berhasil mengedit data angka kredit');</script>";
        redirect('CSupervisor/SupervisorCkp', 'refresh');
    }

    public function TambahKeterangan()
    {
        $this->supervisor_ckp->prosesTambahKeterangan();
        echo "<script>alert('Anda berhasil mengedit data keterangan');</script>";
        redirect('CSupervisor/SupervisorCkp/ckp_pegawai', 'refresh');
    }

    public function TambahKeteranganSaya()
    {
        $this->supervisor_ckp->prosesTambahKeterangan();
        echo "<script>alert('Anda berhasil mengedit data keterangan');</script>";
        redirect('CSupervisor/SupervisorCkp', 'refresh');
    }
}
