<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class admin_ckp extends CI_Model
{
	public function selectCkpPegawai()
	{
		$tahun = $this->input->post('tahun', true);
		$pegawai = $this->input->post('pegawai', true);
		$bulan = $this->input->post('bulan', true);
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.id_user', $pegawai);
		$this->db->where('tugas.bulan', $bulan);
		$this->db->where('tugas.laporan', '1');
		$this->db->where('mrk.tahun', $tahun);
		$this->db->order_by("mrk.bag", "asc");
		return $this->db->get()->result_array();
	}

	public function countCkpPegawai($id)
	{
		$tahun = $this->input->post('tahun', true);
		$pegawai = $this->input->post('pegawai', true);
		$bulan = $this->input->post('bulan', true);
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.id_user', $pegawai);
		$this->db->where('tugas.bulan', $bulan);
		$this->db->where('tugas.laporan', '1');
		$this->db->where('mrk.tahun', $tahun);
		$this->db->where('mrk.bag', $id);
		$this->db->order_by("mrk.bag", "asc");
		return $this->db->get()->num_rows();
	}

	public function countAllCkpPegawai()
	{
		$tahun = $this->input->post('tahun', true);
		$pegawai = $this->input->post('pegawai', true);
		$bulan = $this->input->post('bulan', true);
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->join('mrk','mrk.id_mrk=tugas.id_mrk');
		$this->db->join('user','user.id_user=tugas.id_user');
		$this->db->where('tugas.id_user', $pegawai);
		$this->db->where('tugas.bulan', $bulan);
		$this->db->where('tugas.laporan', '1');
		$this->db->where('mrk.tahun', $tahun);
		$this->db->order_by("mrk.bag", "asc");
		return $this->db->get()->num_rows();
	}

	public function prosesTambahRealisasi()
    {
        $post = $this->input->post();
        $this->id_tugas = $post["id_tugas"];
        $this->realisasi = $post["realisasi"];
        $this->db->update('tugas', $this, array('id_tugas' => $post['id_tugas']));
    }
}

?>