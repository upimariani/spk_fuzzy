<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Balita extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mBalita');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama Balita', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin Balita', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Balita', 'required');
        $this->form_validation->set_rules('ayah', 'Nama Ayah Balita', 'required');
        $this->form_validation->set_rules('ibu', 'Nama Ibu Balita', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir Balita', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'balita' => $this->mBalita->select()
            );
            $this->load->view('Layouts/head');
            $this->load->view('Layouts/navbar');
            $this->load->view('Balita', $data);
            $this->load->view('Layouts/footer');
        } else {
            $data = array(
                'nama_balita' => $this->input->post('nama'),
                'alamat_balita' => $this->input->post('alamat'),
                'nama_ayah' => $this->input->post('ayah'),
                'nama_ibu' => $this->input->post('ibu'),
                'jenis_kelamin' => $this->input->post('jk'),
                'tgl_lahir' => $this->input->post('tgl')
            );
            $this->mBalita->insert($data);
            $this->session->set_flashdata('success', 'Data Balita Berhasil Ditambahkan!');
            redirect('balita');
        }
    }
    public function delete($id)
    {
        $this->mBalita->delete($id);
        $this->session->set_flashdata('success', 'Data Balita Berhasil Dihapus!');
        redirect('balita');
    }
    public function update($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Balita', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin Balita', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Balita', 'required');
        $this->form_validation->set_rules('ayah', 'Nama Ayah Balita', 'required');
        $this->form_validation->set_rules('ibu', 'Nama Ibu Balita', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir Balita', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'balita' => $this->mBalita->edit($id)
            );
            $this->load->view('Layouts/head');
            $this->load->view('Layouts/navbar');
            $this->load->view('UpdateBalita', $data);
            $this->load->view('Layouts/footer');
        } else {
            $data = array(
                'nama_balita' => $this->input->post('nama'),
                'alamat_balita' => $this->input->post('alamat'),
                'nama_ayah' => $this->input->post('ayah'),
                'nama_ibu' => $this->input->post('ibu'),
                'jenis_kelamin' => $this->input->post('jk'),
                'tgl_lahir' => $this->input->post('tgl')
            );
            $this->mBalita->update($id, $data);
            $this->session->set_flashdata('success', 'Data Balita Berhasil Diperbaharui!');
            redirect('balita');
        }
    }
}

/* End of file Balita.php */
