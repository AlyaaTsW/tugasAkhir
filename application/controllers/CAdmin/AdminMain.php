<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class AdminMain extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('admin_ckp');
        $this->load->model('admin_pengguna');
        $this->load->model('admin_tugas');
    }

	public function index()
	{
		if (isset($_SESSION['id_user'])) {
			$data['title'] = "Dashboard Admin";
			$data['tugas'] = $this->admin_tugas->allTugas();
			$data['dis'] = $this->admin_tugas->countTugasBulanIni(1);
			$data['ner'] = $this->admin_tugas->countTugasBulanIni(2);
			$data['pro'] = $this->admin_tugas->countTugasBulanIni(3);
			$data['sos'] = $this->admin_tugas->countTugasBulanIni(4);
			$data['ipd'] = $this->admin_tugas->countTugasBulanIni(5);
			$this->load->view('admin/header_admin', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('admin/footer_admin_main', $data);
		} else {
			redirect('Login/logout');
		}
	}
}
