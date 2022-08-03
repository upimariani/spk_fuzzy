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
		$data = array(
			'grafik_perempuan' => $this->mDashboard->grafik_perempuan(),
			'grafik_laki' => $this->mDashboard->grafik_laki(),
			'grafik_all' => $this->mDashboard->grafik_all()
		);
		$this->load->view('KetuaPosyandu/Layouts/head');
		$this->load->view('KetuaPosyandu/Layouts/navbar');
		$this->load->view('KetuaPosyandu/Layouts/aside');
		$this->load->view('KetuaPosyandu/Dashboard', $data);
		$this->load->view('KetuaPosyandu/Layouts/footer');
	}
}

/* End of file Dashboard.php */
