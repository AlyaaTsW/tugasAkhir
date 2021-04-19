<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class SupervisorMain extends CI_Controller
{
	public function index()
	{
		if (isset($_SESSION['id_user'])) {
			$data['title'] = "Dashboard Kasubbag";
			$this->load->view('supervisor/header_supervisor', $data);
			$this->load->view('supervisor/index', $data);
			$this->load->view('supervisor/footer_supervisor', $data);
		} else {
			redirect('Login/logout');
		}
	}
}
