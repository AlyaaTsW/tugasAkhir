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

	public function allTugas()
	{
		$data['title'] = "Daftar Tugas";
		$data['tugas'] = $this->admin_tugas->allTugas();
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/tugas/daftar_tugas_pegawai', $data);
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

	public function actionLaporan($id)
	{
        $this->admin_tugas->prosesTambahLaporan();
        echo "<script>alert('Anda berhasil menambah data');</script>";
        redirect('CAdmin/AdminTugas/detailTugas/' . $id, 'refresh');
	}
}
