<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Balita extends CI_Controller
{

    public function index()
    {
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Balita');
        $this->load->view('Layouts/footer');
    }
}

/* End of file Balita.php */
