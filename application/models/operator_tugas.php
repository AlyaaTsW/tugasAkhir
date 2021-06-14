<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class operator_tugas extends CI_Model
{
	public function allTugas()
	{
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk', 'mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user', 'user.id_user=tugas.id_user');
		$query = $this->db->get();
		$data = $query->result();
		return $data;
	}

	public function selectTugasByUser($id)
	{
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk', 'mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user', 'user.id_user=tugas.id_user');
		$this->db->where('user.id_user', $id);
		$this->db->order_by("tugas.bulan", "asc");
		$query = $this->db->get();
		$data = $query->result();
		return $data;
	}

	public function selectTugasUserByBulan($id)
	{
		$bln=date('m');
		$thn=date('Y');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk', 'mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user', 'user.id_user=tugas.id_user');
		$this->db->where('user.id_user', $id);
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('mrk.tahun', $thn);
		$this->db->order_by("tugas.bulan", "asc");
		$query = $this->db->get();
		$data = $query->result();
		return $data;
	}

	public function selectTugasById($id)
	{
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk', 'mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user', 'user.id_user=tugas.id_user');
		$this->db->where('tugas.id_tugas', $id);
		$query = $this->db->get();
		$data = $query->row_array();
		return $data;
	}

	public function prosesTambahLaporan()
	{
		$post = $this->input->post();
		$this->id_tugas = $post["id_tugas"];
		$this->tgl_ubah = $post["tgl_ubah"];
		$this->laporan = 1;
		$this->notif = 1;
		$this->file = $this->uploadfile();
		$this->db->update('tugas', $this, array('id_tugas' => $post['id_tugas']));
	}

	public function uploadfile()
	{
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'zip|rar|doc|docx|xls|xlsx|pdf';
		$config['overwrite'] = true;
		// $config['max_size'] = 1024;
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')) {
			return $this->upload->data("file_name");
		}
	}

	public function countTugas($bag)
	{
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk', 'mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user', 'user.id_user=tugas.id_user');
		$this->db->where('mrk.bag', $bag);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function SelectTugasByBag($bag)
	{
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk', 'mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user', 'user.id_user=tugas.id_user');
		$this->db->where('mrk.bag', $bag);
		$query = $this->db->get();
		$data = $query->result();
		return $data;
	}

	public function countTugasBulanMain($id)
	{
		$bln=date('m');
		$thn=date('Y');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('tugas.id_user', $id);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function countLaporanTugasBulan($id)
	{
		$bln=date('m');
		$thn=date('Y');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('tugas.laporan', '1');
		$this->db->where('tugas.id_user', $id);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function countTugasDone1($user)
	{
		$thn=date('Y');
		$bln=date('m');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('mrk.bag', 1);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('tugas.laporan', 1);
		$this->db->where('tugas.id_user', $user);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function countTugasDone2($user)
	{
		$thn=date('Y');
		$bln=date('m');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('mrk.bag', 2);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('tugas.laporan', 1);
		$this->db->where('tugas.id_user', $user);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function countTugasDone3($user)
	{
		$thn=date('Y');
		$bln=date('m');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('mrk.bag', 3);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('tugas.laporan', 1);
		$this->db->where('tugas.id_user', $user);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function countTugasDone4($user)
	{
		$thn=date('Y');
		$bln=date('m');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('mrk.bag', 4);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('tugas.laporan', 1);
		$this->db->where('tugas.id_user', $user);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function countTugasDone5($user)
	{
		$thn=date('Y');
		$bln=date('m');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('mrk.bag', 5);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('tugas.laporan', 1);
		$this->db->where('tugas.id_user', $user);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function countTugasBag1($user)
	{
		$bln=date('m');
		$thn=date('Y');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('mrk.bag', 1);
		$this->db->where('tugas.id_user', $user);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function countTugasBag2($user)
	{
		$bln=date('m');
		$thn=date('Y');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('mrk.bag', 2);
		$this->db->where('tugas.id_user', $user);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function countTugasBag3($user)
	{
		$bln=date('m');
		$thn=date('Y');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('mrk.bag', 3);
		$this->db->where('tugas.id_user', $user);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function countTugasBag4($user)
	{
		$bln=date('m');
		$thn=date('Y');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('mrk.bag', 4);
		$this->db->where('tugas.id_user', $user);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function countTugasBag5($user)
	{
		$bln=date('m');
		$thn=date('Y');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('mrk.bag', 5);
		$this->db->where('tugas.id_user', $user);
		$query=$this->db->get();
		return $query->num_rows();
	}
}
