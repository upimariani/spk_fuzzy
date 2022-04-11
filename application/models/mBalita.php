<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mBalita extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('balita', $data);
    }
    public function select()
    {
        $this->db->select('*');
        $this->db->from('balita');
        return $this->db->get()->result();
    }
    public function delete($id)
    {
        $this->db->where('id_balita', $id);
        $this->db->delete('balita');
    }
    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('balita');
        $this->db->where('id_balita', $id);
        return $this->db->get()->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id_balita', $id);
        $this->db->update('balita', $data);
    }
}

/* End of file mBalita.php */
