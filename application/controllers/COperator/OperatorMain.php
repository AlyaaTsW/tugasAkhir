<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class OperatorMain extends CI_Controller
{
	public function index()
	{
		if (isset($_SESSION['id_user'])) {
			$data['title'] = "Dashboard Pegawai";
			$this->load->view('operator/header_operator', $data);
			$this->load->view('operator/index', $data);
			$this->load->view('operator/footer_operator', $data);
		} else {
			redirect('Login/logout');
		}
	}
}
