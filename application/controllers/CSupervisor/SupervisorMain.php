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
	}

	public function index()
	{
		if (isset($_SESSION['id_user'])) {
			$data['title'] = "Dashboard Ketua Bagian";
			$data['tugas'] = $this->admin_tugas->allTugas();

			$data['mrk'] = $this->admin_mrk->countMrk();
			$data['mrk1'] = $this->admin_mrk->countMrkDitugaskan();

			$data['tug'] = $this->admin_tugas->countTugasBulanMain();
			$data['tug1'] = $this->admin_tugas->countLaporanTugasBulan();

			$data['ds'] = $this->admin_tugas->countTugasDone(1);
			$data['ds1'] = $this->admin_mrk->countMrkBag(1);
			$data['nw'] = $this->admin_tugas->countTugasDone(2);
			$data['nw1'] = $this->admin_mrk->countMrkBag(2);
			$data['pd'] = $this->admin_tugas->countTugasDone(3);
			$data['pd1'] = $this->admin_mrk->countMrkBag(3);
			$data['so'] = $this->admin_tugas->countTugasDone(4);
			$data['so1'] = $this->admin_mrk->countMrkBag(4);
			$data['ip'] = $this->admin_tugas->countTugasDone(5);
			$data['ip1'] = $this->admin_mrk->countMrkBag(5);

			$data['dis'] = $this->admin_tugas->countTugasBulanIni(1);
			$data['ner'] = $this->admin_tugas->countTugasBulanIni(2);
			$data['pro'] = $this->admin_tugas->countTugasBulanIni(3);
			$data['sos'] = $this->admin_tugas->countTugasBulanIni(4);
			$data['ipd'] = $this->admin_tugas->countTugasBulanIni(5);
			$this->load->view('supervisor/header_supervisor', $data);
			$this->load->view('supervisor/index', $data);
			$this->load->view('supervisor/footer_supervisor_main', $data);
		} else {
			redirect('Login/logout');
		}
	}
	
	public function notif()
	{
		$data = $this->admin_tugas->countNotif();
		echo json_encode($data);
	}

	public function notifContent()
	{
		$data = $this->admin_tugas->notifTugasLaporan();
		echo json_encode($data);
	}

	public function klikNotif($id)
    {
        $this->admin_tugas->bacaNotif($id);
        redirect('CAdmin/AdminTugas/detailTugas2/' . $id);
    }
}
