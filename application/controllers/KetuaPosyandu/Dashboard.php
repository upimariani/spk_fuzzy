<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('KetuaPosyandu/Layouts/head');
		$this->load->view('KetuaPosyandu/Layouts/navbar');
		$this->load->view('KetuaPosyandu/Layouts/aside');
		$this->load->view('KetuaPosyandu/Dashboard');
		$this->load->view('KetuaPosyandu/Layouts/footer');
	}
}

/* End of file Dashboard.php */
