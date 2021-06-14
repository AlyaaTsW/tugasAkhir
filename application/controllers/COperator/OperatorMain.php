<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class OperatorMain extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('admin_ckp');
        $this->load->model('admin_mrk');
        $this->load->model('admin_tugas');
        $this->load->model('operator_ckp');
        $this->load->model('operator_tugas');
    }

	public function index()
	{
		if (isset($_SESSION['id_user'])) {
			$data['title'] = "Dashboard Pegawai";
			$data['tugas'] = $this->operator_tugas->selectTugasUserByBulan($_SESSION['id_user']);

			$data['tug'] = $this->operator_tugas->countTugasBulanMain($_SESSION['id_user']);
			$data['tug1'] = $this->operator_tugas->countLaporanTugasBulan($_SESSION['id_user']);

			$data['ds'] = $this->operator_tugas->countTugasDone1($_SESSION['id_user']);
			$data['ds1'] = $this->operator_tugas->countTugasBag1($_SESSION['id_user']);
			$data['nw'] = $this->operator_tugas->countTugasDone2($_SESSION['id_user']);
			$data['nw1'] = $this->operator_tugas->countTugasBag2($_SESSION['id_user']);
			$data['pd'] = $this->operator_tugas->countTugasDone3($_SESSION['id_user']);
			$data['pd1'] = $this->operator_tugas->countTugasBag3($_SESSION['id_user']);
			$data['so'] = $this->operator_tugas->countTugasDone4($_SESSION['id_user']);
			$data['so1'] = $this->operator_tugas->countTugasBag4($_SESSION['id_user']);
			$data['ip'] = $this->operator_tugas->countTugasDone5($_SESSION['id_user']);
			$data['ip1'] = $this->operator_tugas->countTugasBag5($_SESSION['id_user']);

			$data['dis'] = $this->operator_tugas->countTugasBag1($_SESSION['id_user']);
			$data['ner'] = $this->operator_tugas->countTugasBag2($_SESSION['id_user']);
			$data['pro'] = $this->operator_tugas->countTugasBag3($_SESSION['id_user']);
			$data['sos'] = $this->operator_tugas->countTugasBag4($_SESSION['id_user']);
			$data['ipd'] = $this->operator_tugas->countTugasBag5($_SESSION['id_user']);
			$this->load->view('operator/header_operator', $data);
			$this->load->view('operator/index', $data);
			$this->load->view('operator/footer_operator_main', $data);
		} else {
			redirect('Login/logout');
		}
	}
}
