<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class AdminTugas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('admin_tugas');
		$this->load->model('admin_pengguna');
	}

	// public function allTugas()
	// {
	// 	$data['title'] = "Daftar Tugas";
	// 	$data['tugas'] = $this->admin_tugas->allTugas();
	// 	$this->load->view('admin/header_admin', $data);
	// 	$this->load->view('admin/tugas/daftar_tugas_pegawai', $data);
	// 	$this->load->view('admin/footer_admin', $data);
	// }

	public function tugas_pegawai()
	{
		$data['title'] = "Daftar Tugas Pegawai";
		$data['distribusi'] = $this->admin_tugas->countTugas(1);
		$data['nerwilis'] = $this->admin_tugas->countTugas(2);
		$data['produksi'] = $this->admin_tugas->countTugas(3);
		$data['sosial'] = $this->admin_tugas->countTugas(4);
		$data['ipds'] = $this->admin_tugas->countTugas(5);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/tugas/index_tugas_pegawai', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function tgs_distribusi()
	{
		$data['title'] = "Daftar Tugas Seksi Distribusi";
		$data['tugas'] = $this->admin_tugas->SelectTugasByBag(1);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/tugas/tugas_seksi_distribusi', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function tgs_ipds()
	{
		$data['title'] = "Daftar Tugas Seksi IPDS";
		$data['tugas'] = $this->admin_tugas->SelectTugasByBag(5);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/tugas/tugas_seksi_ipds', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function tgs_nerwilis()
	{
		$data['title'] = "Daftar Tugas Seksi Nerwilis";
		$data['tugas'] = $this->admin_tugas->SelectTugasByBag(2);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/tugas/tugas_seksi_nerwilis', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function tgs_produksi()
	{
		$data['title'] = "Daftar Tugas Seksi Produksi";
		$data['tugas'] = $this->admin_tugas->SelectTugasByBag(3);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/tugas/tugas_seksi_produksi', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function tgs_sosial()
	{
		$data['title'] = "Daftar Tugas Seksi Sosial";
		$data['tugas'] = $this->admin_tugas->SelectTugasByBag(4);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/tugas/tugas_seksi_sosial', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function tugas($id)
	{
		$data['title'] = "Daftar Tugas";
		$data['tugas'] = $this->admin_tugas->selectTugasByUser($id);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/tugas/daftar_tugas', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function detailTugas($id)
	{
		$data['title'] = "Daftar Tugas";
		$data['tugas'] = $this->admin_tugas->selectTugasById($id);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/tugas/detail_tugas', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function detailTugas2($id)
	{
		$data['title'] = "Daftar Tugas";
		$data['tugas'] = $this->admin_tugas->selectTugasById($id);
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/tugas/detail_tugas2', $data);
		$this->load->view('admin/footer_admin', $data);
	}

	public function actionLaporan($id)
	{
		$this->admin_tugas->prosesTambahLaporan();
		echo "<script>alert('Laporan Berhasil Dikumpulkan');</script>";
		redirect('CAdmin/AdminTugas/detailTugas/' . $id, 'refresh');
	}
}
