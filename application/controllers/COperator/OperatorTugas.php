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

	public function pengaturan()
	{
		$data['title'] = "Akun Anda";
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/pengguna/pengaturan_akun', $data);
		$this->load->view('admin/footer_admin', $data);
	}
}
