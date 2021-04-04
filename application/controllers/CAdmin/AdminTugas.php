<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class AdminTugas extends CI_Controller
{
	public function tugas()
	{
		$data['title'] = "Daftar Tugas";
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/tugas/daftar_tugas', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function tambah_pegawai()
	{
		$data['title'] = "Tambah Pegawai";
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/pengguna/tambah_pegawai', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function pengaturan()
	{
		$data['title'] = "Akun Anda";
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/pengguna/pengaturan_akun', $data);
		$this->load->view('admin/footer_admin', $data);
	}
}
