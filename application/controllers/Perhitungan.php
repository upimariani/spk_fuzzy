<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPerhitungan');
    }

    public function index()
    {
        $data = array(
            'balita' => $this->mPerhitungan->balita()
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('vPerhitungan', $data);
        $this->load->view('Layouts/footer');
    }
    public function variabel_anggota()
    {
        $data = array(
            'jk' => $this->input->post('jk'),
            'umur' => $this->input->post('umur'),
            'berat' => $this->input->post('berat'),
            'tinggi' => $this->input->post('tinggi')
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('DataKeanggotaan', $data);
        $this->load->view('Layouts/footer');
    }
    public function defuzyfikasi()
    {
        $data_min = array();
        $data_max = $this->input->post('data_max');
        for ($i = 1; $i <= $data_max; $i++) {
            $data_min[] = $this->input->post('min' . $i);
        }
        $i++;

        // for ($a = 0; $a < sizeof($data_min); $a++) {
        //     echo $data_min[$a] . '<br>';
        // }
        // $a++;
        // $nilai_max = krsort($data_min);
        // echo 'hasil';
        // echo $nilai_max;

        $first = PHP_INT_MIN;
        $second = PHP_INT_MIN;
        $third = PHP_INT_MIN;
        for ($i = 0; $i < $data_max; $i++) {
            $data_min[] = $this->input->post('min' . $i);
            $data_gizi[] = $this->input->post('gizi' . $i);
            if ($data_min[$i] > $first) {
                $third = $second;
                $second = $first;
                $first = $data_min[$i];
                $gizi_pertama = $data_gizi[$i];
            }

            // Jika data_minay[i] berada di antara $fist dan $second
            // lalu perbarui $second
            else if ($data_min[$i] > $second) {
                $third = $second;
                $second = $data_min[$i];
                $gizi_kedua = $data_gizi[$i];
            } else if ($data_min[$i] > $third)
                $third = $data_min[$i];
            $gizi_ketiga = $data_gizi[$i];
        }
        echo $first;
        echo $gizi_pertama;
        echo $second;
        echo $gizi_kedua;
        echo $third;
        echo $gizi_ketiga;
    }
}

/* End of file Perhitungan.php */
