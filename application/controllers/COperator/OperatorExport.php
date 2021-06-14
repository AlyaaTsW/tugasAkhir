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
        $hasil['data'] = $this->operator_ckp->selectCkpPegawai();
        $hasil['distribusi'] = $this->operator_ckp->countCkpPegawai(1);
        $hasil['nerwilis'] = $this->operator_ckp->countCkpPegawai(2);
        $hasil['produksi'] = $this->operator_ckp->countCkpPegawai(3);
        $hasil['sosial'] = $this->operator_ckp->countCkpPegawai(4);
        $hasil['ipds'] = $this->operator_ckp->countCkpPegawai(5);
        $all = $this->operator_ckp->countAllCkpPegawai();
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
