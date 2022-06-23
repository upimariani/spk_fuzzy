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
        $jk = $this->input->post('jk');
        $umur = $this->input->post('umur');
        $berat = $this->input->post('berat');
        $tinggi = $this->input->post('tinggi');

        $var_umur = array();
        $var_berat = array();
        $var_tinggi = array();

        echo $jk . '<br>';
        echo $umur . '<br>';
        echo $berat . '<br>';
        echo $tinggi . '<br>';

        //variabel umur
        if ($umur >= 12 && $umur <= 24) {
            $var_umur[] = 'fase 1';
        }
        if ($umur >= 12 && $umur <= 36) {
            $var_umur[] = 'fase 2';
        }
        if ($umur >= 24 && $umur <= 48) {
            $var_umur[] = 'fase 3';
        }
        if ($umur >= 36 && $umur <= 60) {
            $var_umur[] = 'fase 4';
        }
        if ($umur >= 48 && $umur <= 60) {
            $var_umur[] = 'fase 5';
        }

        for ($i = 0; $i < sizeof($var_umur); $i++) {
            echo $var_umur[$i];
        }
        echo '<br>';

        if ($jk == 'P') {
            //variabel berat badan perempuan
            if ($berat >= 12 && $berat < 19) {
                $var_berat[] = 'fase ringan';
            }
            if ($berat >= 12 && $berat <= 25) {
                $var_berat[] = 'fase sedang';
            }
            if ($berat > 19 && $berat <= 25) {
                $var_berat[] = 'fase berat';
            }
            for ($i = 0; $i < sizeof($var_berat); $i++) {
                echo $var_berat[$i];
            }
            echo '<br>';
            //tinggi badan perempuan

            if ($tinggi >= 74 && $tinggi < 100) {
                $var_tinggi[] = 'fase rendah';
            }
            if ($tinggi >= 74 && $tinggi <= 123) {
                $var_tinggi[] = 'fase sedang';
            }
            if ($tinggi > 100 && $tinggi <= 123) {
                $var_tinggi[] = 'fase tinggi';
            }
            for ($i = 0; $i < sizeof($var_tinggi); $i++) {
                echo $var_tinggi[$i];
            }
            echo '<br>';
        } else {
            //variabel berat badan laki-laki
            if ($berat >= 13 && $berat < 19) {
                $var_berat[] = 'fase ringan';
            }
            if ($berat >= 13 && $berat <= 25) {
                $var_berat[] = 'fase sedang';
            }
            if ($berat > 19 && $berat <= 25) {
                $var_berat[] = 'fase berat';
            }
            for ($i = 0; $i < sizeof($var_berat); $i++) {
                echo $var_berat[$i];
            }
            echo '<br>';

            //tinggi badan laki laki
            if ($tinggi >= 75 && $tinggi < 101) {
                $var_tinggi[] = 'fase rendah';
            }
            if ($tinggi >= 75 && $tinggi <= 124) {
                $var_tinggi[] = 'fase sedang';
            }
            if ($tinggi > 101 && $tinggi <= 124) {
                $var_tinggi[] = 'fase tinggi';
            }
            for ($i = 0; $i < sizeof($var_tinggi); $i++) {
                echo $var_tinggi[$i];
            }
            echo '<br>';
        }
    }
}

/* End of file Perhitungan.php */
