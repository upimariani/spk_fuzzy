<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IndexAntropometri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mAntropometri');
    }
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama Index', 'required');
        $this->form_validation->set_rules('range', 'Nama Index', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'index' => $this->mAntropometri->select(),
                'range' => $this->mAntropometri->select_umur(),
                'berat_badan' => $this->mAntropometri->select_berat()
            );
            $this->load->view('Layouts/head');
            $this->load->view('Layouts/navbar');
            $this->load->view('IndexAntropometri', $data);
            $this->load->view('Layouts/footer');
        } else {
            $data = array(
                'nama_index' => $this->input->post('nama'),
                'index' => $this->input->post('range'),
                'keterangan' => $this->input->post('keterangan')
            );
            $this->mAntropometri->insert($data);
            $this->session->set_flashdata('success', 'Data Index Antropometri Berhasil Ditambahkan!');
            redirect('IndexAntropometri');
        }
    }
}

/* End of file Index.php */
