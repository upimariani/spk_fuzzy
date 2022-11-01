<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
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
            'status_gizi' => $this->mDashboard->status_gizi($bln, $thn)
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('Perhitungan/LaporanHasil', $data);
        $this->load->view('Layouts/footer');
    }
}

/* End of file Hasil.php */
