<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class OperatorTugas extends CI_Controller
{
	public function tugas()
	{
		$data['title'] = "Daftar Tugas";
		$this->load->view('operator/header_operator', $data);
		$this->load->view('operator/tugas/daftar_tugas', $data);
		$this->load->view('operator/footer_operator', $data);
	}

	public function pengaturan_akun($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = 'Pengaturan Akun';
			$data['user'] = $this->admin_pengguna->getPenggunaById($id);

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
				$this->admin_pengguna->proses_edit_pengguna();
				echo "<script>alert('Anda berhasil mengedit akun');</script>";
				redirect('COperator/OperatorTugas/pengaturan_akun/' . $id, 'refresh');
			}
		} else {
			redirect('CLogin/logout');
		}
	}
}
