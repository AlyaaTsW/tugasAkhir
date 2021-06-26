<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class admin_mrk extends CI_Model
{

    //TABEL MRK
    public function tabel($bagian)
    {
        $this->db->select('*');
        $this->db->from('mrk');
        $this->db->where('bag', $bagian);
        $this->db->order_by('id_mrk', 'desc');
        $query = $this->db->get();
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
            "bag" => $this->input->post('bagian', true),
            "tahun" => $this->input->post('tahun', true),
            "ckp_level" => $this->input->post('ckp_level', true),
        ];
        $this->db->insert('mrk', $data);
    }

    public function getMrkById($id)
    {
        $query = $this->db->get_where('mrk', array('id_mrk' => $id));
        return $query->row_array();
    }

    public function proses_edit_mrk()
    {
        $post = $this->input->post();
        $komponen = strtoupper($this->input->post('komponen', true));
        $data = [
            "id_mrk" => $this->input->post('id_mrk', true),
            "komponen" => $komponen,
            "kegiatan" => $this->input->post('kegiatan', true),
            "volume" => $this->input->post('volume', true),
            "satuan" => $this->input->post('satuan', true),
            "bag" => $this->input->post('bagian', true),
            "tahun" => $this->input->post('tahun', true),
            "ckp_level" => $this->input->post('ckp_level', true),
        ];

        $this->db->update('mrk', $data, array('id_mrk' => $post['id_mrk']));
    }

    public function proses_hapus_mrk($id)
    {
        return $this->db->delete('mrk', array("id_mrk" => $id));
    }

    function proses_tambah_tugas()
    {
        $this->id_tugas = uniqid();
        $data = [
            "id_mrk" => $this->input->post('id_mrk', true),
            "id_user" => $this->input->post('id_user', true),
            "bulan" => $this->input->post('bulan', true),
        ];
        $this->db->insert('tugas', $data);
    }

    public function proses_edit_status()
    {
        $post = $this->input->post();
        $komponen = strtoupper($this->input->post('komponen', true));
        $status = "1";
        $data = [
            "id_mrk" => $this->input->post('id_mrk', true),
            "komponen" => $komponen,
            "kegiatan" => $this->input->post('kegiatan', true),
            "volume" => $this->input->post('volume', true),
            "satuan" => $this->input->post('satuan', true),
            "bag" => $this->input->post('bagian', true),
            "status" => $status,
        ];

        $this->db->update('mrk', $data, array('id_mrk' => $post['id_mrk']));
    }

    public function getTugasByMrk($id)
    {
        $query = $this->db->get_where('tugas', array('id_mrk' => $id));
        return $query->row_array();
    }

    public function proses_edit_tugas()
    {
        $post = $this->input->post();
        $data = [
            "id_mrk" => $this->input->post('id_mrk', true),
            "id_tugas" => $this->input->post('id_tugas', true),
            "id_user" => $this->input->post('id_user', true),
            "bulan" => $this->input->post('bulan', true),
        ];

        $this->db->update('tugas', $data, array('id_tugas' => $post['id_tugas']));
    }

    public function countMrk()
    {
        $thn = date('Y');
        $this->db->select('*');
        $this->db->from('mrk');
        $this->db->where('tahun', $thn);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countMrkBag($bag)
    {
        $thn = date('Y');
        $this->db->select('*');
        $this->db->from('mrk');
        $this->db->where('tahun', $thn);
        $this->db->where('bag', $bag);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countMrkDitugaskan()
    {
        $thn = date('Y');
        $this->db->select('*');
        $this->db->from('mrk');
        $this->db->where('tahun', $thn);
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query->num_rows();
    }
}
