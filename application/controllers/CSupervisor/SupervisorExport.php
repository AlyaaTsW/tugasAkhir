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
            $hasil['data'] = $this->admin_ckp->selectCkpPegawaiUtama($_SESSION['bagian']);
            $hasil['data1'] = $this->admin_ckp->selectCkpPegawaiTambahan($_SESSION['bagian']);
        } else {
            $hasil['data'] = $this->supervisor_ckp->selectCkpSayaUtama();
            $hasil['data1'] = $this->supervisor_ckp->selectCkpSayaTambahan();
        }

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

        $all = $this->admin_ckp->countAllCkpPegawai($_SESSION['bagian']);
        $hasil['allTambahan'] = $this->admin_ckp->countAllCkpPegawaiTambahan($_SESSION['bagian']);

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
