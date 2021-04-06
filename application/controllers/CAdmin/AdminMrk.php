<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class AdminMrk extends CI_Controller
{
	public function distribusi()
	{
		$data['title'] = "Tabel MRK";
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/mrk/distribusi/index_distribusi', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function nerwilis()
	{
		$data['title'] = "Tabel MRK";
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/mrk/nerwilis/index_nerwilis', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function sosial()
	{
		$data['title'] = "Tabel MRK";
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/mrk/sosial/index_sosial', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function produksi()
	{
		$data['title'] = "Tabel MRK";
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/mrk/produksi/index_produksi', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function tambah_mrk()
	{
		$data['title'] = "Tambah MRK";
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/mrk/tambah_mrk', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function edit_mrk()
	{
		$data['title'] = "Edit MRK";
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/mrk/edit_mrk', $data);
		$this->load->view('admin/footer_admin', $data);
	}
}
