<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class SupervisorTugas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper('download');
		$this->load->model('supervisor_tugas');
		$this->load->model('supervisor_pengaturanAkun');
	}

	public function tugas_pegawai($bag)
	{
		$data['title'] = "Daftar Tugas Pegawai";
		$data['tugas'] = $this->supervisor_tugas->SelectTugasByBag($bag);
		$this->load->view('supervisor/header_supervisor', $data);
		$this->load->view('supervisor/tugas/tugas_pegawai', $data);
		$this->load->view('supervisor/footer_supervisor', $data);
	}

	public function tugasSaya($id)
	{
		$data['title'] = "Daftar Tugas";
		$data['tugas'] = $this->supervisor_tugas->selectTugasByUser($id);
		$this->load->view('supervisor/header_supervisor', $data);
		$this->load->view('supervisor/tugas/tugas_saya', $data);
		$this->load->view('supervisor/footer_supervisor', $data);
	}

	public function detailTugasSaya($id)
	{
		$data['title'] = "Daftar Tugas";
		$data['tugas'] = $this->supervisor_tugas->selectTugasById($id);
		$this->load->view('supervisor/header_supervisor', $data);
		$this->load->view('supervisor/tugas/detail_tugas_saya', $data);
		$this->load->view('supervisor/footer_supervisor', $data);
	}

	public function detailTugasPegawai($id)
	{
		$data['title'] = "Daftar Tugas Pegawai";
		$data['tugas'] = $this->supervisor_tugas->selectTugasById($id);
		$this->load->view('supervisor/header_supervisor', $data);
		$this->load->view('supervisor/tugas/detail_tugas_pegawai', $data);
		$this->load->view('supervisor/footer_supervisor', $data);
	}

	public function detailTugasPegawai2($id)
	{
		$data['title'] = "Daftar Tugas Pegawai";
		$data['tugas'] = $this->supervisor_tugas->selectTugasById($id);
		$this->load->view('supervisor/header_supervisor', $data);
		$this->load->view('supervisor/tugas/detail_tugas_pegawai2', $data);
		$this->load->view('supervisor/footer_supervisor', $data);
	}

	public function actionLaporan($id)
	{
		$this->supervisor_tugas->prosesTambahLaporan();
		echo "<script>alert('Laporan Berhasil Dikumpulkan');</script>";
		redirect('CSupervisor/SupervisorTugas/detailTugasSaya/' . $id, 'refresh');
	}

	public function actionLaporanPegawai($id)
	{
		$this->supervisor_tugas->prosesTambahLaporan();
		echo "<script>alert('Laporan Berhasil Dikumpulkan');</script>";
		redirect('CSupervisor/SupervisorTugas/detailTugasPegawai/' . $id, 'refresh');
	}

	public function downloadFile($file)
	{
		force_download('upload/' . $file, NULL);
	}

	public function pengaturan_akun($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = 'Pengaturan Akun';
			$data['user'] = $this->supervisor_pengaturanAkun->getPenggunaById($id);

			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('nip', 'nip', 'required');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('supervisor/header_supervisor', $data);
				$this->load->view('supervisor/pengaturan_akun', $data);
				$this->load->view('supervisor/footer_supervisor', $data);
			} else {
				$this->supervisor_pengaturanAkun->proses_edit_pengguna();
				$bag = $this->session->userdata('bagian');
				echo "<script>alert('Anda berhasil mengedit akun');</script>";
				redirect('CSupervisor/SupervisorTugas/pengaturan_akun/' . $bag, 'refresh');
			}
		} else {
			redirect('CLogin/logout');
		}
	}
}
