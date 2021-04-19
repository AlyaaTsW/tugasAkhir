<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class OperatorCkp extends CI_Controller
{
    public function index()
    {
        $data['title'] = "CKP Saya";
        $this->load->view('operator/header_operator', $data);
        $this->load->view('operator/ckp/ckp_saya', $data);
        $this->load->view('operator/footer_operator', $data);
    }
}
