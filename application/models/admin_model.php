<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
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
}
