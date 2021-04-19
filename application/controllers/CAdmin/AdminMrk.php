<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class AdminMrk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('admin_mrk');
	}

	//TABEL
	public function distribusi()
	{
		$data['title'] = "Tabel MRK";
		$data['mrk'] = $this->admin_mrk->tabel(1);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/mrk/distribusi/index_distribusi', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function nerwilis()
	{
		$data['title'] = "Tabel MRK";
		$data['mrk'] = $this->admin_mrk->tabel(2);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/mrk/nerwilis/index_nerwilis', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function sosial()
	{
		$data['title'] = "Tabel MRK";
		$data['mrk'] = $this->admin_mrk->tabel(4);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/mrk/sosial/index_sosial', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function produksi()
	{
		$data['title'] = "Tabel MRK";
		$data['mrk'] = $this->admin_mrk->tabel(3);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/mrk/produksi/index_produksi', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function ipds()
	{
		$data['title'] = "Tabel MRK";
		$data['mrk'] = $this->admin_mrk->tabel(5);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/mrk/ipds/index_ipds', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	//TAMBAH MRK
	public function tambah_mrk_dis()
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Tambah MRK";

			$this->form_validation->set_rules('komponen', 'komponen', 'required');
			$this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
			$this->form_validation->set_rules('volume', 'volume', 'required');
			$this->form_validation->set_rules('satuan', 'satuan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/distribusi/tambah_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_tambah_mrk();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('CAdmin/AdminMrk/distribusi', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function tambah_mrk_nerw()
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Tambah MRK";

			$this->form_validation->set_rules('komponen', 'komponen', 'required');
			$this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
			$this->form_validation->set_rules('volume', 'volume', 'required');
			$this->form_validation->set_rules('satuan', 'satuan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/nerwilis/tambah_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_tambah_mrk();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('CAdmin/AdminMrk/nerwilis', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function tambah_mrk_prod()
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Tambah MRK";

			$this->form_validation->set_rules('komponen', 'komponen', 'required');
			$this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
			$this->form_validation->set_rules('volume', 'volume', 'required');
			$this->form_validation->set_rules('satuan', 'satuan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/produksi/tambah_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_tambah_mrk();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('CAdmin/AdminMrk/produksi', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function tambah_mrk_sos()
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Tambah MRK";

			$this->form_validation->set_rules('komponen', 'komponen', 'required');
			$this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
			$this->form_validation->set_rules('volume', 'volume', 'required');
			$this->form_validation->set_rules('satuan', 'satuan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/sosial/tambah_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_tambah_mrk();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('CAdmin/AdminMrk/sosial', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function tambah_mrk_ipds()
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Tambah MRK";

			$this->form_validation->set_rules('komponen', 'komponen', 'required');
			$this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
			$this->form_validation->set_rules('volume', 'volume', 'required');
			$this->form_validation->set_rules('satuan', 'satuan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/ipds/tambah_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_tambah_mrk();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('CAdmin/AdminMrk/ipds', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	//EDIT MRK
	public function edit_mrk_dis($id)
	{


		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Edit MRK";

			$data['mrk'] = $this->admin_mrk->getMrkById($id);

			$this->form_validation->set_rules('komponen', 'komponen', 'required');
			$this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
			$this->form_validation->set_rules('volume', 'volume', 'required');
			$this->form_validation->set_rules('satuan', 'satuan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/distribusi/edit_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_pengguna->proses_edit_pengguna();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('CAdmin/AdminMrk/distribusi', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}
}
