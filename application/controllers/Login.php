<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLogin');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $data = $this->mLogin->login($username, $password);
            if ($data) {

                $array = array(
                    'id' => $data->id_user
                );

                $this->session->set_userdata($array);
                redirect('Dashboard', 'refresh');
            } else {
                $this->session->set_flashdata('error', 'Username dan Password Salah!!!');
                redirect('Login');
            }
        }
    }
}

/* End of file Login.php */
