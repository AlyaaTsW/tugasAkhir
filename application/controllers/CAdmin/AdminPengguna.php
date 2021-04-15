<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class AdminPengguna extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('admin_pengguna');
	}

	public function daftar_pegawai()
	{
		if (isset($_SESSION['id_user'])) {
			$data['title'] = "Daftar Pegawai";

			$data['user'] = $this->admin_pengguna->all();
			$this->load->view('admin/header_admin', $data);
			$this->load->view('admin/pengguna/daftar_pegawai', $data);
			$this->load->view('admin/footer_admin', $data);
		} else {
			redirect('Login/logout');
		}
	}

	public function tambah_pegawai()
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = 'Tambah Pegawai';

			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('nip', 'nip', 'required');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');
			$this->form_validation->set_rules('level', 'level', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/pengguna/tambah_pegawai', $data);
				$this->load->view('admin/footer_admin_pengguna', $data);
			} else {
				$this->admin_pengguna->proses_tambah_pengguna();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('CAdmin/AdminPengguna/daftar_pegawai', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function detail_pegawai($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = 'Detail Data Pegawai';
			$data['user'] = $this->admin_pengguna->getPenggunaById($id);
			$this->load->view('admin/header_admin', $data);
			$this->load->view('admin/pengguna/detail_pegawai', $data);
			$this->load->view('admin/footer_admin', $data);
		} else {
			redirect('CLogin/logout');
		}
	}

	public function edit_pegawai($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = 'Edit Pegawai';

			$data['user'] = $this->admin_pengguna->getPenggunaById($id);

			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('nip', 'nip', 'required');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/pengguna/edit_pegawai', $data);
				$this->load->view('admin/footer_admin_pengguna', $data);
			} else {
				$this->admin_pengguna->proses_edit_pengguna();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('CAdmin/AdminPengguna/daftar_pegawai', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function hapus_pegawai($id)
	{
		if (isset($_SESSION['id_user'])) {

			if ($this->admin_pengguna->proses_hapus_pengguna($id)) {
				$this->session->set_flashdata('hapus_pengguna', true);
			} else {
				$this->session->set_flashdata('hapus_pengguna', false);
			}
			echo "<script>alert('Data Berhasil Dihapus :)');</script>";
			redirect('CAdmin/AdminPengguna/daftar_pegawai', 'refresh');
		} else {
			redirect('Login/logout');
		}
	}

	// public function pengaturan_akun()
	// {
	// 	$data['title'] = "Pengaturan Akun Anda";
	// 	$this->load->view('admin/header_admin', $data);
	// 	$this->load->view('admin/pengguna/pengaturan_akun', $data);
	// 	$this->load->view('admin/footer_admin', $data);
	// }

	public function pengaturan_akun($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = 'Pengaturan Akun';
			$data['user'] = $this->admin_pengguna->getPenggunaById($id);

			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('nip', 'nip', 'required');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
			$this->form_validation->set_rules('bagian', 'bagian', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/pengguna/pengaturan_akun', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_pengguna->proses_edit_pengguna();
				echo "<script>alert('Anda berhasil mengedit akun');</script>";
				redirect('CAdmin/AdminPengguna/pengaturan_akun/' . $id, 'refresh');
			}
		} else {
			redirect('CLogin/logout');
		}
	}
}
