<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
    //grafik status gizi perbulan
    public function grafik_status_gizi($bulan, $tahun)
    {
        $this->db->select('COUNT(status_gizi) as jml, status_gizi');
        $this->db->from('lap_status_gizi');
        $this->db->join('balita', 'lap_status_gizi.id_balita = balita.id_balita', 'left');

        $this->db->group_by('status_gizi');
        $this->db->where('MONTH(tgl_periksa)', $bulan);
        $this->db->where('YEAR(tgl_periksa)', $tahun);
        return $this->db->get()->result();
    }
    public function data_jml()
    {
        $data['user'] = $this->db->query("SELECT COUNT(nama_user) as jml_user FROM user")->row();
        $data['balita'] = $this->db->query("SELECT COUNT(nama_balita) as jml_balita FROM balita")->row();
        return $data;
    }

    //dashboard laki-laki
    public function grafik_perempuan()
    {
        return $this->db->query("SELECT COUNT(status_gizi) as jml, status_gizi, jenis_kelamin FROM balita JOIN lap_status_gizi ON balita.id_balita=lap_status_gizi.id_balita WHERE jenis_kelamin='P' GROUP BY status_gizi ORDER BY jml DESC")->result();
    }
    public function grafik_laki()
    {
        return $this->db->query("SELECT COUNT(status_gizi) as jml, status_gizi, jenis_kelamin FROM balita JOIN lap_status_gizi ON balita.id_balita=lap_status_gizi.id_balita WHERE jenis_kelamin='L' GROUP BY status_gizi ORDER BY jml DESC")->result();
    }
    public function grafik_all()
    {
        return $this->db->query("SELECT COUNT(status_gizi) as jml, status_gizi, jenis_kelamin FROM balita JOIN lap_status_gizi ON balita.id_balita=lap_status_gizi.id_balita GROUP BY status_gizi ORDER BY jml DESC")->result();
    }
}

/* End of file mDashboard.php */
