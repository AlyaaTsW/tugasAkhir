<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_pengguna extends CI_Model
{
    //PENGGUNA
    function all()
    {
        $data = $this->db->query("SELECT * from user");
        return $data->result();
    }

    public function getPenggunaById($id)
    {
        $query = $this->db->get_where('user', array('id_user' => $id));
        return $query->row_array();
    }

    function proses_tambah_pengguna()
    {
        $this->id_user = uniqid();
        $data = [
            "nama" => $this->input->post('nama', true),
            "nip" => $this->input->post('nip', true),
            "jabatan" => $this->input->post('jabatan', true),
            "bagian" => $this->input->post('bagian', true),
            "email" =>  $this->input->post('email', true),
            "password" => $this->input->post('password', true),
            "pendidikan" => $this->input->post('pendidikan', true),
            "level" => $this->input->post('level', true),
        ];
        $this->db->insert('user', $data);
    }


    public function proses_edit_pengguna()
    {
        $post = $this->input->post();
        $this->id_user = $post["id_user"];
        $this->nama = $post["nama"];
        $this->nip = $post["nip"];
        $this->jabatan = $post["jabatan"];
        $this->bagian = $post["bagian"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->pendidikan = $post["pendidikan"];
        $this->level = $post["level"];

        $this->db->update('user', $this, array('id_user' => $post['id_user']));
    }

    public function proses_hapus_pengguna($id)
    {
        return $this->db->delete('user', array("id_user" => $id));
    }
}
