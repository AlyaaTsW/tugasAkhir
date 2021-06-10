<?php
defined('BASEPATH') or exit('No direct script access allowed');

class operator_pengaturanAkun extends CI_Model
{

    public function getPenggunaById($id)
    {
        $query = $this->db->get_where('user', array('id_user' => $id));
        return $query->row_array();
    }
    
    public function proses_edit_pengguna()
    {
        $post = $this->input->post();
        $this->id_user = $post["id_user"];
        $this->nama = $post["nama"];
        $this->nip = $post["nip"];
        $this->jabatan = $post["jabatan"];
        // $this->bagian = $post["bagian"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->pendidikan = $post["pendidikan"];
        $this->level = $post["level"];

        $this->db->update('user', $this, array('id_user' => $post['id_user']));
    }
}
