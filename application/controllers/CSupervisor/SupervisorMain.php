<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class SupervisorMain extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('admin_ckp');
		$this->load->model('admin_pengguna');
		$this->load->model('admin_tugas');
		$this->load->model('admin_mrk');
		$this->load->model('supervisor_tugas');
		$this->load->model('supervisor_mrk');
	}

	public function index()
	{
		if (isset($_SESSION['id_user'])) {
			$data['title'] = "Dashboard Ketua Bagian";
			$data['tugas'] = $this->supervisor_tugas->selectTugasBulanIni($_SESSION['bagian']);

			$data['mrk'] = $this->supervisor_mrk->countMrk($_SESSION['bagian']);
			$data['mrk1'] = $this->supervisor_mrk->countMrkDitugaskan($_SESSION['bagian']);

			$data['tug'] = $this->supervisor_tugas->countTugasBulanMain($_SESSION['bagian']);
			$data['tug1'] = $this->supervisor_tugas->countLaporanTugasBulan($_SESSION['bagian']);
			
			$this->load->view('supervisor/header_supervisor', $data);
			$this->load->view('supervisor/index', $data);
			$this->load->view('supervisor/footer_supervisor_main', $data);
		} else {
			redirect('Login/logout');
		}
	}
	
	public function notif()
	{
		$data = $this->supervisor_tugas->countNotif($_SESSION['bagian']);
		echo json_encode($data);
	}

	public function notifContent()
	{
		$data = $this->supervisor_tugas->notifTugasLaporan($_SESSION['bagian']);
		echo json_encode($data);
	}

	public function klikNotif($id)
    {
        $this->supervisor_tugas->bacaNotif($id);
        redirect('CSupervisor/SupervisorTugas/detailTugasPegawai2/' . $id);
    }
}
