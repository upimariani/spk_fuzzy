<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLaporan extends CI_Model
{
    public function status_gizi_perbulan($gizi, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('lap_status_gizi');
        $this->db->join('balita', 'lap_status_gizi.id_balita = balita.id_balita', 'left');
        $this->db->where('status_gizi', $gizi);
        $this->db->where('MONTH(tgl_periksa)', $bulan);
        $this->db->where('YEAR(tgl_periksa)', $tahun);
        return $this->db->get()->result();
    }
    public function all_status_gizi($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('lap_status_gizi');
        $this->db->join('balita', 'lap_status_gizi.id_balita = balita.id_balita', 'left');
        $this->db->where('MONTH(tgl_periksa)', $bulan);
        $this->db->where('YEAR(tgl_periksa)', $tahun);
        return $this->db->get()->result();
    }
}

/* End of file mLaporan.php */
