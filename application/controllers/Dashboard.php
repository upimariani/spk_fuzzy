<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mDashboard');
    }


    public function index()
    {
        $tanggal = date('Y-m-d');
        $pecah_tgl = explode("-", $tanggal);
        $thn = $pecah_tgl[0];
        $bln = $pecah_tgl[1];

        $data = array(
            'grafik_status_gizi' => $this->mDashboard->grafik_status_gizi($bln, $thn),
            'jumlah' => $this->mDashboard->data_jml(),
            'status_gizi' => $this->mDashboard->status_gizi($bln, $thn),
            'grafik_all' => $this->mDashboard->grafik_all()
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('Dashboard', $data);
        $this->load->view('Layouts/footer');
    }
    public function delete_hasil($id)
    {
        $this->db->where('id_lap', $id);
        $this->db->delete('lap_status_gizi');
        $this->session->set_flashdata('success', 'Data Hasil Perhitungan Berhasil Dihapus!');
        redirect('Dashboard', 'refresh');
    }
}

/* End of file Dashboard.php */
