<?php

defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class SupervisorExport extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('supervisor_ckp');
        $this->load->model('admin_pengguna');
    }

    public function export()
    {
        $pegawai = $this->input->post('pegawai', true);
        if ($pegawai != $_SESSION['id_user']) {
            $hasil['data'] = $this->supervisor_ckp->selectCkpPegawai($_SESSION['bagian']);
        } else {
            $hasil['data'] = $this->supervisor_ckp->selectCkpSaya();
        }
        $hasil['distribusi'] = $this->supervisor_ckp->countCkpPegawai(1);
        $hasil['nerwilis'] = $this->supervisor_ckp->countCkpPegawai(2);
        $hasil['produksi'] = $this->supervisor_ckp->countCkpPegawai(3);
        $hasil['sosial'] = $this->supervisor_ckp->countCkpPegawai(4);
        $hasil['ipds'] = $this->supervisor_ckp->countCkpPegawai(5);
        $all = $this->supervisor_ckp->countAllCkpPegawai();
        $hasil['kepala'] = $this->admin_pengguna->getKepalaBps();

        if ($all == 0) {
            echo "<script>alert('Data CKP Tidak Tersedia');</script>";
            if ($pegawai != $_SESSION['id_user']) {
                redirect('CSupervisor/SupervisorCKP/ckp_pegawai', 'refresh');
            } else {
                redirect('CSupervisor/SupervisorCKP', 'refresh');
            }
        }
        if ($all > 0) {
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=CKP_PEGAWAI.xls");

            $this->load->view('supervisor/ckp/export_ckp', $hasil);
        }
    }
}
