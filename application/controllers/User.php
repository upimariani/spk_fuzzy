<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mUser');
    }

    public function index()
    {
        $data = array(
            'user' => $this->mUser->select()
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('User/User', $data);
        $this->load->view('Layouts/footer');
    }
    public function tambahUser()
    {
        $this->form_validation->set_rules('nama', 'Nama User', 'required');
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'user' => $this->mUser->select()
            );
            $this->load->view('Layouts/head');
            $this->load->view('Layouts/navbar');
            $this->load->view('Layouts/aside');
            $this->load->view('User/TambahUser', $data);
            $this->load->view('Layouts/footer');
        } else {
            $data = array(
                'nama_user' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level_user' => $this->input->post('level')
            );
            $this->mUser->insert($data);
            $this->session->set_flashdata('success', 'Data User Berhasil Ditambahkan!');
            redirect('User');
        }
    }
    public function delete($id)
    {
        $this->mUser->delete($id);
        $this->session->set_flashdata('success', 'Data User Berhasil Dihapus!');
        redirect('User');
    }
    public function update_user($id)
    {
        $this->form_validation->set_rules('nama', 'Nama User', 'required');
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'user' => $this->mUser->edit($id)
            );
            $this->load->view('Layouts/head');
            $this->load->view('Layouts/navbar');
            $this->load->view('Layouts/aside');
            $this->load->view('User/UpdateUser', $data);
            $this->load->view('Layouts/footer');
        } else {
            $data = array(
                'nama_user' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level_user' => $this->input->post('level')
            );
            $this->mUser->update($id, $data);
            $this->session->set_flashdata('success', 'Data User Berhasil Diperbaharui!');
            redirect('User');
        }
    }
}

/* End of file User.php */
