<?php

defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class OperatorExport extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('operator_ckp');
        $this->load->model('admin_pengguna');
    }

    public function export()
    {
        $hasil['data'] = $this->admin_ckp->selectCkpPegawaiUtama();
        $hasil['data1'] = $this->admin_ckp->selectCkpPegawaiTambahan();

        $hasil['distribusi'] = $this->admin_ckp->countCkpPegawaiUtama(1);
        $hasil['nerwilis'] = $this->admin_ckp->countCkpPegawaiUtama(2);
        $hasil['produksi'] = $this->admin_ckp->countCkpPegawaiUtama(3);
        $hasil['sosial'] = $this->admin_ckp->countCkpPegawaiUtama(4);
        $hasil['ipds'] = $this->admin_ckp->countCkpPegawaiUtama(5);

        $hasil['distribusi1'] = $this->admin_ckp->countCkpPegawaiTambahan(1);
        $hasil['nerwilis1'] = $this->admin_ckp->countCkpPegawaiTambahan(2);
        $hasil['produksi1'] = $this->admin_ckp->countCkpPegawaiTambahan(3);
        $hasil['sosial1'] = $this->admin_ckp->countCkpPegawaiTambahan(4);
        $hasil['ipds1'] = $this->admin_ckp->countCkpPegawaiTambahan(5);

        $all = $this->admin_ckp->countAllCkpPegawai();
        $hasil['allTambahan'] = $this->admin_ckp->countAllCkpPegawaiTambahan();

        $hasil['kepala'] = $this->admin_pengguna->getKepalaBps();

        if ($all == 0) {
            echo "<script>alert('Data CKP Tidak Tersedia');</script>";
            redirect('COperator/operatorCKP/ckp_saya', 'refresh');
        }
        if ($all > 0) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=CKP_PEGAWAI.xls");

            $this->load->view('operator/ckp/export_ckp', $hasil);
        }
    }
}
