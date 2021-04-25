<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class supervisor_mrk extends CI_Model
{
	
	//TABEL MRK
	public function tabel($bagian)
	{
		$query = $this->db->get_where('mrk', array('bagian' => $bagian));
        return $query->result();
	}

	function proses_tambah_mrk()
    {
        $this->id_mrk = uniqid();
        $komponen = strtoupper($this->input->post('komponen', true));
        $data = [
            "komponen" => $komponen,
            "kegiatan" => $this->input->post('kegiatan', true),
            "volume" => $this->input->post('volume', true),
            "satuan" => $this->input->post('satuan', true),
            "bagian" => $this->input->post('bagian', true),
            "tahun" => $this->input->post('tahun', true),
        ];
        $this->db->insert('mrk', $data);
    }

}
?>