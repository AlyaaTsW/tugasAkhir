<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class OperatorTugas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper('download');
		$this->load->model('operator_tugas');
		$this->load->model('operator_pengaturanAkun');
	}

	public function tugas($id)
	{
		$data['title'] = "Daftar Tugas Saya";
		$data['tugas'] = $this->operator_tugas->selectTugasByUser($id);
		$this->load->view('operator/header_operator', $data);
		$this->load->view('operator/tugas/daftar_tugas', $data);
		$this->load->view('operator/footer_operator', $data);
	}

	public function detailTugas($id)
	{
		$data['title'] = "Daftar Tugas";
		$data['tugas'] = $this->operator_tugas->selectTugasById($id);
		$this->load->view('operator/header_operator', $data);
		$this->load->view('operator/tugas/detail_tugas', $data);
		$this->load->view('operator/footer_operator', $data);
	}

	public function actionLaporan($id)
	{
		$this->operator_tugas->prosesTambahLaporan();
		echo "<script>alert('Laporan Berhasil Dikumpulkan');</script>";
		redirect('COperator/OperatorTugas/detailTugas/' . $id, 'refresh');
	}

	public function downloadFile($file)
	{
		force_download('upload/' . $file, NULL);
	}

	public function pengaturan_akun($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = 'Pengaturan Akun';
			$data['user'] = $this->operator_pengaturanAkun->getPenggunaById($id);

			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('nip', 'nip', 'required');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('operator/header_operator', $data);
				$this->load->view('operator/pengaturan_akun', $data);
				$this->load->view('operator/footer_operator', $data);
			} else {
				$this->operator_pengaturanAkun->proses_edit_pengguna();
				echo "<script>alert('Anda berhasil mengedit akun');</script>";
				redirect('COperator/OperatorTugas/pengaturan_akun/' . $id, 'refresh');
			}
		} else {
			redirect('CLogin/logout');
		}
	}
}
