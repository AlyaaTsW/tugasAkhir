<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class AdminMain extends CI_Controller
{
	public function index()
	{
		if (isset($_SESSION['id_user'])) {
			$data['title'] = "Dashboard Admin";
			$this->load->view('admin/header_admin', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('admin/footer_admin', $data);
		} else {
			redirect('Login/logout');
		}
	}
}
