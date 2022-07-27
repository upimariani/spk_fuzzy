<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPerhitungan extends CI_Model
{
    public function balita()
    {
        $this->db->select('*');
        $this->db->from('balita');
        return $this->db->get()->result();
    }
    public function insert_perhitungan($data)
    {
        $this->db->insert('lap_status_gizi', $data);
    }
    public function cek_peritungan($id, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('lap_status_gizi');
        $this->db->where('id_balita', $id);
        $this->db->where('MONTH(tgl_periksa)', $bulan);
        $this->db->where('YEAR(tgl_periksa)', $tahun);
        return $this->db->get()->row();
    }

    //laporan status gizi
    public function select_status_gizi($id)
    {
        $this->db->select('*');
        $this->db->from('lap_status_gizi');
        $this->db->join('balita', 'balita.id_balita = lap_status_gizi.id_balita', 'left');
        $this->db->where('lap_status_gizi.id_balita', $id);
        return $this->db->get()->result();
    }
}

/* End of file mPerhitungan.php */
