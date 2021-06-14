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
		$this->load->library('form_validation');
		$this->load->model('admin_mrk');
		$this->load->model('admin_pengguna');
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
				$this->admin_mrk->proses_edit_mrk();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('CAdmin/AdminMrk/distribusi', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function edit_mrk_ipds($id)
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
				$this->load->view('admin/mrk/ipds/edit_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_edit_mrk();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('CAdmin/AdminMrk/ipds', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function edit_mrk_nrw($id)
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
				$this->load->view('admin/mrk/nerwilis/edit_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_edit_mrk();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('CAdmin/AdminMrk/nerwilis', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function edit_mrk_prod($id)
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
				$this->load->view('admin/mrk/produksi/edit_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_edit_mrk();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('CAdmin/AdminMrk/produksi', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function edit_mrk_sos($id)
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
				$this->load->view('admin/mrk/sosial/edit_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_edit_mrk();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('CAdmin/AdminMrk/sosial', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	//HAPUS MRK
	public function hapus_mrk_dis($id)
	{
		if (isset($_SESSION['id_user'])) {

			if ($this->admin_mrk->proses_hapus_mrk($id)) {
				$this->session->set_flashdata('hapus_mrk', true);
			} else {
				$this->session->set_flashdata('hapus_mrk', false);
			}
			echo "<script>alert('Data Berhasil Dihapus :)');</script>";
			redirect('CAdmin/AdminMrk/distribusi', 'refresh');
		} else {
			redirect('Login/logout');
		}
	}

	public function hapus_mrk_ipds($id)
	{
		if (isset($_SESSION['id_user'])) {

			if ($this->admin_mrk->proses_hapus_mrk($id)) {
				$this->session->set_flashdata('hapus_mrk', true);
			} else {
				$this->session->set_flashdata('hapus_mrk', false);
			}
			echo "<script>alert('Data Berhasil Dihapus :)');</script>";
			redirect('CAdmin/AdminMrk/ipds', 'refresh');
		} else {
			redirect('Login/logout');
		}
	}

	public function hapus_mrk_nrw($id)
	{
		if (isset($_SESSION['id_user'])) {

			if ($this->admin_mrk->proses_hapus_mrk($id)) {
				$this->session->set_flashdata('hapus_mrk', true);
			} else {
				$this->session->set_flashdata('hapus_mrk', false);
			}
			echo "<script>alert('Data Berhasil Dihapus :)');</script>";
			redirect('CAdmin/AdminMrk/nerwilis', 'refresh');
		} else {
			redirect('Login/logout');
		}
	}

	public function hapus_mrk_prod($id)
	{
		if (isset($_SESSION['id_user'])) {

			if ($this->admin_mrk->proses_hapus_mrk($id)) {
				$this->session->set_flashdata('hapus_mrk', true);
			} else {
				$this->session->set_flashdata('hapus_mrk', false);
			}
			echo "<script>alert('Data Berhasil Dihapus :)');</script>";
			redirect('CAdmin/AdminMrk/produksi', 'refresh');
		} else {
			redirect('Login/logout');
		}
	}

	public function hapus_mrk_sos($id)
	{
		if (isset($_SESSION['id_user'])) {

			if ($this->admin_mrk->proses_hapus_mrk($id)) {
				$this->session->set_flashdata('hapus_mrk', true);
			} else {
				$this->session->set_flashdata('hapus_mrk', false);
			}
			echo "<script>alert('Data Berhasil Dihapus :)');</script>";
			redirect('CAdmin/AdminMrk/sosial', 'refresh');
		} else {
			redirect('Login/logout');
		}
	}

	//PENUGASAN MRK
	public function penugasan_mrk_dis($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Penugasan MRK";
			$data['user'] = $this->admin_pengguna->all();
			$data['mrk'] = $this->admin_mrk->getMrkById($id);

			$this->form_validation->set_rules('id_user', 'id_user', 'required');
			// $this->form_validation->set_rules('bulan', 'bulan', 'required');
			// $this->form_validation->set_rules('pegawai', 'pegawai', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/distribusi/tugas_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_tambah_tugas();
				$this->admin_mrk->proses_edit_status();
				echo "<script>alert('Anda berhasil menugaskan MRK');</script>";
				redirect('CAdmin/AdminMrk/distribusi', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	function check_default($post_string)
	{
		echo "<script>alert('Mohon diisi');</script>";
		return $post_string == '0' ? FALSE : TRUE;
	}

	public function penugasan_mrk_ipds($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Penugasan MRK";
			$data['user'] = $this->admin_pengguna->all();
			$data['mrk'] = $this->admin_mrk->getMrkById($id);

			$this->form_validation->set_rules('id_user', 'id_user', 'required');
			// $this->form_validation->set_rules('bulan', 'bulan', 'required');
			// $this->form_validation->set_rules('pegawai', 'pegawai', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/ipds/tugas_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_tambah_tugas();
				$this->admin_mrk->proses_edit_status();
				echo "<script>alert('Anda berhasil menugaskan MRK');</script>";
				redirect('CAdmin/AdminMrk/ipds', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function penugasan_mrk_nrw($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Penugasan MRK";
			$data['user'] = $this->admin_pengguna->all();
			$data['mrk'] = $this->admin_mrk->getMrkById($id);

			$this->form_validation->set_rules('id_user', 'id_user', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/nerwilis/tugas_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_tambah_tugas();
				$this->admin_mrk->proses_edit_status();
				echo "<script>alert('Anda berhasil menugaskan MRK');</script>";
				redirect('CAdmin/AdminMrk/nerwilis', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function penugasan_mrk_prod($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Penugasan MRK";
			$data['user'] = $this->admin_pengguna->all();
			$data['mrk'] = $this->admin_mrk->getMrkById($id);

			$this->form_validation->set_rules('id_user', 'id_user', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/produksi/tugas_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_tambah_tugas();
				$this->admin_mrk->proses_edit_status();
				echo "<script>alert('Anda berhasil menugaskan MRK');</script>";
				redirect('CAdmin/AdminMrk/produksi', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function penugasan_mrk_sos($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Penugasan MRK";
			$data['user'] = $this->admin_pengguna->all();
			$data['mrk'] = $this->admin_mrk->getMrkById($id);

			$this->form_validation->set_rules('id_user', 'id_user', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/sosial/tugas_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_tambah_tugas();
				$this->admin_mrk->proses_edit_status();
				echo "<script>alert('Anda berhasil menugaskan MRK');</script>";
				redirect('CAdmin/AdminMrk/sosial', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	//EDIT PENUGASAN
	public function edit_penugasan_mrk_dis($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Penugasan MRK";
			$data['user'] = $this->admin_pengguna->all();
			$data['mrk'] = $this->admin_mrk->getMrkById($id);
			$data['tugas'] = $this->admin_mrk->getTugasByMrk($id);

			$this->form_validation->set_rules('id_user', 'id_user', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/distribusi/edit_tugas_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_edit_tugas();
				echo "<script>alert('Anda berhasil mengedit penugasan MRK');</script>";
				redirect('CAdmin/AdminMrk/distribusi', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function edit_penugasan_mrk_ipds($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Penugasan MRK";
			$data['user'] = $this->admin_pengguna->all();
			$data['mrk'] = $this->admin_mrk->getMrkById($id);
			$data['tugas'] = $this->admin_mrk->getTugasByMrk($id);

			$this->form_validation->set_rules('id_user', 'id_user', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/ipds/edit_tugas_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_edit_tugas();
				echo "<script>alert('Anda berhasil mengedit penugasan MRK');</script>";
				redirect('CAdmin/AdminMrk/ipds', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function edit_penugasan_mrk_nrw($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Penugasan MRK";
			$data['user'] = $this->admin_pengguna->all();
			$data['mrk'] = $this->admin_mrk->getMrkById($id);
			$data['tugas'] = $this->admin_mrk->getTugasByMrk($id);

			$this->form_validation->set_rules('id_user', 'id_user', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/nerwilis/edit_tugas_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_edit_tugas();
				echo "<script>alert('Anda berhasil mengedit penugasan MRK');</script>";
				redirect('CAdmin/AdminMrk/nerwilis', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function edit_penugasan_mrk_prod($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Penugasan MRK";
			$data['user'] = $this->admin_pengguna->all();
			$data['mrk'] = $this->admin_mrk->getMrkById($id);
			$data['tugas'] = $this->admin_mrk->getTugasByMrk($id);

			$this->form_validation->set_rules('id_user', 'id_user', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/produksi/edit_tugas_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_edit_tugas();
				echo "<script>alert('Anda berhasil mengedit penugasan MRK');</script>";
				redirect('CAdmin/AdminMrk/produksi', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}

	public function edit_penugasan_mrk_sos($id)
	{
		if (isset($_SESSION['id_user'])) {

			$data['title'] = "Penugasan MRK";
			$data['user'] = $this->admin_pengguna->all();
			$data['mrk'] = $this->admin_mrk->getMrkById($id);
			$data['tugas'] = $this->admin_mrk->getTugasByMrk($id);

			$this->form_validation->set_rules('id_user', 'id_user', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header_admin', $data);
				$this->load->view('admin/mrk/sosial/edit_tugas_mrk', $data);
				$this->load->view('admin/footer_admin', $data);
			} else {
				$this->admin_mrk->proses_edit_tugas();
				echo "<script>alert('Anda berhasil mengedit penugasan MRK');</script>";
				redirect('CAdmin/AdminMrk/sosial', 'refresh');
			}
		} else {
			redirect('Login/logout');
		}
	}
}
