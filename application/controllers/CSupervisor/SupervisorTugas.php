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
		$this->load->model('supervisor_pengaturanAkun');
	}

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
