<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAntropometri extends CI_Model
{
    public function select()
    {
        $this->db->select('*');
        $this->db->from('index');
        return $this->db->get()->result();
    }
    public function insert($data)
    {
        $this->db->insert('index', $data);
    }
    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('index');
        $this->db->where('id_index', $id);
        return $this->db->get()->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id_index', $id);
        $this->db->update('index', $data);
    }
    //index umur
    public function select_umur()
    {
        $nama = 'Umur';
        $this->db->select('*');
        $this->db->from('index');
        $this->db->where('nama_index', $nama);
        return $this->db->get()->result();
    }

    //index berat badan
    public function select_berat()
    {
        $berat = "Berat Badan Laki-Laki";
        $this->db->select('*');
        $this->db->from('index');
        $this->db->where('nama_index', $berat);
        return $this->db->get()->result();
    }
}

/* End of file mAntropometri.php */
