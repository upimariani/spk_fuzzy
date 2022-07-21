<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Balita extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mBalita');
        $this->load->model('mPerhitungan');
    }

    public function index()
    {
        $data = array(
            'balita' => $this->mBalita->select()
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('Balita/Balita', $data);
        $this->load->view('Layouts/footer');
    }
    public function tambahBalita()
    {
        $this->form_validation->set_rules('nama', 'Nama Balita', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin Balita', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Balita', 'required');
        $this->form_validation->set_rules('ayah', 'Nama Ayah Balita', 'required');
        $this->form_validation->set_rules('ibu', 'Nama Ibu Balita', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir Balita', 'required');
        $this->form_validation->set_rules('nik', 'NIK Balita', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'balita' => $this->mBalita->select()
            );
            $this->load->view('Layouts/head');
            $this->load->view('Layouts/navbar');
            $this->load->view('Layouts/aside');
            $this->load->view('Balita/TambahBalita', $data);
            $this->load->view('Layouts/footer');
        } else {
            $data = array(
                'nama_balita' => $this->input->post('nama'),
                'alamat_balita' => $this->input->post('alamat'),
                'nama_ayah' => $this->input->post('ayah'),
                'nama_ibu' => $this->input->post('ibu'),
                'jenis_kelamin' => $this->input->post('jk'),
                'tgl_lahir' => $this->input->post('tgl'),
                'nik' => $this->input->post('nik')
            );
            $this->mBalita->insert($data);
            $this->session->set_flashdata('success', 'Data Balita Berhasil Ditambahkan!');
            redirect('Balita');
        }
    }
    public function delete($id)
    {
        $this->mBalita->delete($id);
        $this->session->set_flashdata('success', 'Data Balita Berhasil Dihapus!');
        redirect('Balita');
    }
    public function update($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Balita', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin Balita', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Balita', 'required');
        $this->form_validation->set_rules('ayah', 'Nama Ayah Balita', 'required');
        $this->form_validation->set_rules('ibu', 'Nama Ibu Balita', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir Balita', 'required');
        $this->form_validation->set_rules('nik', 'NIK Balita', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'balita' => $this->mBalita->edit($id)
            );
            $this->load->view('Layouts/head');
            $this->load->view('Layouts/navbar');
            $this->load->view('Layouts/aside');
            $this->load->view('Balita/UpdateBalita', $data);
            $this->load->view('Layouts/footer');
        } else {
            $data = array(
                'nama_balita' => $this->input->post('nama'),
                'alamat_balita' => $this->input->post('alamat'),
                'nama_ayah' => $this->input->post('ayah'),
                'nama_ibu' => $this->input->post('ibu'),
                'jenis_kelamin' => $this->input->post('jk'),
                'tgl_lahir' => $this->input->post('tgl'),
                'nik' => $this->input->post('nik')
            );
            $this->mBalita->update($id, $data);
            $this->session->set_flashdata('success', 'Data Balita Berhasil Diperbaharui!');
            redirect('Balita');
        }
    }

    public function detail_pemeriksaan($id)
    {
        $data = array(
            'lap_status_gizi' => $this->mPerhitungan->select_status_gizi($id)
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('Balita/DetailPemeriksaan', $data);
        $this->load->view('Layouts/footer');
    }
}

/* End of file Balita.php */
