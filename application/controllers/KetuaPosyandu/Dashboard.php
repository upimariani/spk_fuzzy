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
			'grafik_perempuan' => $this->mDashboard->grafik_perempuan($bln),
			'grafik_laki' => $this->mDashboard->grafik_laki($bln),
			'grafik_all' => $this->mDashboard->grafik_status_gizi($bln, $thn),
		);
		$this->load->view('KetuaPosyandu/Layouts/head');
		$this->load->view('KetuaPosyandu/Layouts/navbar');
		$this->load->view('KetuaPosyandu/Layouts/aside');
		$this->load->view('KetuaPosyandu/Dashboard', $data);
		$this->load->view('KetuaPosyandu/Layouts/footer');
	}
}

/* End of file Dashboard.php */
