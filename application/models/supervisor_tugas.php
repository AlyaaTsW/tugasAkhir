<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class supervisor_tugas extends CI_Model
{
	//TABEL TUGAS
	// public function tabel($bagian)
	// {
	// 	$query = $this->db->get_where('tugas', array('bag' => $bagian));
	// 	return $query->result();
	// }

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

	public function countNotif($bag)
	{
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->where('mrk.bag', $bag);
		$this->db->where('notif', '1');
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function notifTugasLaporan($bag)
	{
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('mrk.bag', $bag);
		$this->db->where('notif', '1');
		$this->db->order_by("tugas.tgl_ubah", "desc");
		$query=$this->db->get();
		$data= $query->result();
		return $data;
	}

	public function bacaNotif($id)
    {
        $this->notif = 0;
        $this->db->update('tugas', $this, array('id_tugas' => $id));
    }

    public function countTugasBulanMain($bag)
	{
		$bln=date('m');
		$thn=date('Y');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('mrk.bag', $bag);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function countLaporanTugasBulan($bag)
	{
		$bln=date('m');
		$thn=date('Y');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('mrk.tahun', $thn);
		$this->db->where('mrk.bag', $bag);
		$this->db->where('tugas.laporan', '1');
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function selectTugasBulanIni($bag)
	{
		$bln=date('m');
		$thn=date('Y');
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.bulan', $bln);
		$this->db->where('mrk.bag', $bag);
		$this->db->where('mrk.tahun', $thn);
		$this->db->order_by("mrk.bag", "asc");
		$query=$this->db->get();
		$data= $query->result();
		return $data;
	}
}
