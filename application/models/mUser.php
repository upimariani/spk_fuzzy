<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mUser extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('user', $data);
    }
    public function select()
    {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get()->result();
    }
    public function delete($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $id);
        return $this->db->get()->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }
}

/* End of file mUser.php */
