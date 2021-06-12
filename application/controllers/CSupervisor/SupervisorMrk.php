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
				redirect('CSupervisor/SupervisorMrk/mainTabel/' . $bag, 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	//EDIT MRK
	public function edit_mrk($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Edit MRK";

			$data['mrk'] = $this->supervisor_mrk->getMrkById($id);

			$this->form_validation->set_rules('komponen', 'komponen', 'required');
			$this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
			$this->form_validation->set_rules('volume', 'volume', 'required');
			$this->form_validation->set_rules('satuan', 'satuan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('supervisor/header_supervisor', $data);
				$this->load->view('supervisor/mrk/edit_mrk', $data);
				$this->load->view('supervisor/footer_supervisor', $data);
			} else {
				$this->supervisor_mrk->proses_edit_mrk();
				$bag = $this->session->userdata('bagian');
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('CSupervisor/SupervisorMrk/mainTabel/' . $bag, 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	//HAPUS MRK
	public function hapus_mrk($id)
	{
		if (isset($_SESSION['id_user'])) {

			if ($this->supervisor_mrk->proses_hapus_mrk($id)) {
				$this->session->set_flashdata('hapus_mrk', true);
			} else {
				$this->session->set_flashdata('hapus_mrk', false);
			}
			$bag = $this->session->userdata('bagian');
			echo "<script>alert('Data Berhasil Dihapus :)');</script>";
			redirect('CSupervisor/SupervisorMrk/mainTabel/' . $bag, 'refresh');
		} else {
			redirect('Login/logout');
		}
	}


	//PENUGASAN
	public function penugasan_mrk($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Penugasan MRK";
			$data['user'] = $this->supervisor_mrk->all();
			$data['mrk'] = $this->supervisor_mrk->getMrkById($id);

			$this->form_validation->set_rules('id_user', 'id_user', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('supervisor/header_supervisor', $data);
				$this->load->view('supervisor/mrk/tugas_mrk', $data);
				$this->load->view('supervisor/footer_supervisor', $data);
			} else {
				$this->supervisor_mrk->proses_tambah_tugas();
				$this->supervisor_mrk->proses_edit_status();
				$bag = $this->session->userdata('bagian');
				echo "<script>alert('Anda berhasil menugaskan MRK');</script>";
				redirect('CSupervisor/SupervisorMrk/mainTabel/' . $bag, 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	//EDIT PENUGASAN
	public function edit_penugasan_mrk($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Penugasan MRK";
			$data['user'] = $this->supervisor_mrk->all();
			$data['mrk'] = $this->supervisor_mrk->getMrkById($id);
			$data['tugas'] = $this->supervisor_mrk->getTugasByMrk($id);

			$this->form_validation->set_rules('id_user', 'id_user', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('supervisor/header_supervisor', $data);
				$this->load->view('supervisor/mrk/edit_tugas_mrk', $data);
				$this->load->view('supervisor/footer_supervisor', $data);
			} else {
				$this->supervisor_mrk->proses_edit_tugas();
				$bag = $this->session->userdata('bagian');
				echo "<script>alert('Anda berhasil mengedit penugasan MRK');</script>";
				redirect('CSupervisor/SupervisorMrk/mainTabel/' . $bag, 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}
}
