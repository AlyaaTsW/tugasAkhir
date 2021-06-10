<?php

defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class AdminExport extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('admin_ckp');
        $this->load->model('admin_pengguna');
    }

    public function export()
    {
    	$hasil['data'] = $this->admin_ckp->selectCkpPegawai();
        $hasil['distribusi'] = $this->admin_ckp->countCkpPegawai(1);
        $hasil['nerwilis'] = $this->admin_ckp->countCkpPegawai(2);
        $hasil['produksi'] = $this->admin_ckp->countCkpPegawai(3);
        $hasil['sosial'] = $this->admin_ckp->countCkpPegawai(4);
        $hasil['ipds'] = $this->admin_ckp->countCkpPegawai(5);
        $all = $this->admin_ckp->countAllCkpPegawai();
        $hasil['kepala'] = $this->admin_pengguna->getKepalaBps();

        if ($all == 0) {
            echo "<script>alert('Data CKP Tidak Tersedia');</script>";
        } if ($all > 0) {
        	header("Content-type: application/vnd-ms-excel");
		    header("Content-Disposition: attachment; filename=CKP_PEGAWAI.xls");
		    
		    $this->load->view('admin/ckp/export_ckp', $hasil);
        }
    }
}
