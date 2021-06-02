<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class SupervisorMrk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('supervisor_mrk');
	}

	public function mainTabel($bagian)
	{
		$data['title'] = "Tabel MRK";
		$data['mrk'] = $this->supervisor_mrk->tabel($bagian);
		$this->load->view('supervisor/header_supervisor', $data);
		$this->load->view('supervisor/mrk/index_mrk', $data);
		$this->load->view('supervisor/footer_supervisor', $data);
	}

	public function tambah_mrk()
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Tambah MRK";

			$this->form_validation->set_rules('komponen', 'komponen', 'required');
			$this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
			$this->form_validation->set_rules('volume', 'volume', 'required');
			$this->form_validation->set_rules('satuan', 'satuan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('supervisor/header_supervisor', $data);
				$this->load->view('supervisor/mrk/tambah_mrk', $data);
				$this->load->view('supervisor/footer_supervisor', $data);
			} else {
				$this->supervisor_mrk->proses_tambah_mrk();
				$bag = $this->session->userdata('bagian');
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('CSupervisor/SupervisorMrk/mainTabel/'.$bag, 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}
}
