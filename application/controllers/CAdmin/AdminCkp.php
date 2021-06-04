<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class AdminCkp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('admin_ckp');
        $this->load->model('admin_pengguna');
    }

    public function index()
    {
        $data['title'] = "CKP Saya";
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/ckp/ckp_saya', $data);
        $this->load->view('admin/footer_admin', $data);
    }

    public function ckp_pegawai()
    {
        $data['title'] = "CKP Pegawai";
        $data['user'] = $this->admin_pengguna->all();
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/ckp/ckp_pegawai', $data);
        $this->load->view('admin/footer_admin_ckp', $data);
    }

    public function ckp_pegawai_filtered()
    {
        $data['title'] = "CKP Pegawai";
        $data['user'] = $this->admin_pengguna->all();
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/ckp/ckp_pegawai_filtered', $data);
        $this->load->view('admin/footer_admin_ckp', $data);
    }
}
