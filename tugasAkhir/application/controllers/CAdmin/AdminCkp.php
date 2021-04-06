<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class AdminCkp extends CI_Controller
{
    public function index()
    {
        $data['title'] = "CKP Saya";
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/ckp/ckp_saya', $data);
        $this->load->view('admin/footer_admin', $data);
    }

    public function ckp_pegawai()
    {
        $data['title'] = "CKP Saya";
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/ckp/ckp_pegawai', $data);
        $this->load->view('admin/footer_admin', $data);
    }
}
