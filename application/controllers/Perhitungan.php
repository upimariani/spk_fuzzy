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
        $this->form_validation->set_rules('balita', 'Pilih Balita', 'required');
        $this->form_validation->set_rules('nama', 'Nama Balita', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Balita', 'required');
        $this->form_validation->set_rules('ayah', 'Ayah Balita', 'required');
        $this->form_validation->set_rules('ibu', 'Ibu Balita', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin Balita', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir Balita', 'required');
        $this->form_validation->set_rules('umur', 'Umur Balita', 'required');
        $this->form_validation->set_rules('berat', 'Berat Badan Balita', 'required');
        $this->form_validation->set_rules('tinggi', 'Tinggi Badan Balita', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'balita' => $this->mPerhitungan->balita()
            );
            $this->load->view('Layouts/head');
            $this->load->view('Layouts/navbar');
            $this->load->view('vPerhitungan', $data);
            $this->load->view('Layouts/footer');
        } else {
            $data = array(
                'jk' => $this->input->post('jk'),
                'umur' => $this->input->post('umur'),
                'berat' => $this->input->post('berat'),
                'tinggi' => $this->input->post('tinggi'),
                'nama_balita' => $this->input->post('nama')
            );
            $this->load->view('Layouts/head');
            $this->load->view('Layouts/navbar');
            $this->load->view('DataKeanggotaan', $data);
            $this->load->view('Layouts/footer');
        }
    }
    public function defuzyfikasi()
    {
        $umur = $this->input->post('umur');
        $berat = $this->input->post('berat');
        $tinggi = $this->input->post('tinggi');
        $jk = $this->input->post('jk');
        $nama_balita = $this->input->post('nama');
        $data_min = array();
        $data_max = $this->input->post('data_max');
        for ($i = 0; $i <= $data_max; $i++) {
            $data_min[] = $this->input->post('min' . $i);
            $data_gizi[] = $this->input->post('gizi' . $i);
        }

        $first = PHP_INT_MIN;
        $second = PHP_INT_MIN;
        $third = PHP_INT_MIN;

        for ($i = 0; $i <= $data_max; $i++) {
            $data_min[] = $this->input->post('min' . $i);
            $data_gizi[] = $this->input->post('gizi' . $i);
            // echo $data_min[$i];
            // echo $i;
            // echo $data_gizi[$i];
            // echo $i;
            // echo '<br>';
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

        // echo '<br> Data Pertama: ';
        // echo $first;
        // // echo $gizi_pertama;

        // echo '<br> Data Kedua: ';
        // echo $second;
        // // echo $gizi_kedua;


        // echo '<br> Data Ketiga: ';
        // echo $third;
        // // echo $gizi_ketiga;
        // echo '<br>';

        $nilai_gizi_max = array();
        $nilai_gizi_max = max($first, $second, $third);
        $nilai_gizi_min = min($first, $second, $third);
        // echo '<br> Data Maksimal: ' . $nilai_gizi_max;
        // echo '<br> Data Minimal: ' . $nilai_gizi_min;


        //mencari status gizi maximal
        if ($nilai_gizi_max == $first) {
            $var_gizi_max = $gizi_pertama;
        } else if ($nilai_gizi_max == $second) {
            $var_gizi_max = $gizi_kedua;
        } else if ($nilai_gizi_max == $third) {
            $var_gizi_max = $gizi_ketiga;
        }


        //mencari status gizi minimal
        if ($nilai_gizi_min == $first) {
            $var_gizi_min = $gizi_pertama;
        } else if ($nilai_gizi_min == $second) {
            $var_gizi_min = $gizi_kedua;
        } else if ($nilai_gizi_min == $third) {
            $var_gizi_min = $gizi_ketiga;
        }
        // echo '<br>';
        // echo '<br>Data Gizi Maksimal: ';
        // echo $var_gizi_max;
        // echo '<br>Data Gizi Minimal: ';
        // echo $var_gizi_max;

        if ($var_gizi_max == 'Buruk') {
            if ($jk == 'L') {
                $max_gizi = '49';
            } else if ($jk == 'P') {
                $max_gizi = '48';
            }
        } else if ($var_gizi_max == 'Kurang') {
            if ($jk == 'L') {
                $max_gizi = '53';
            } else if ($jk == 'P') {
                $max_gizi = '53';
            }
        } else if ($var_gizi_max == 'Normal') {
            if ($jk == 'L') {
                $max_gizi = '70';
            } else if ($jk == 'P') {
                $max_gizi = '70';
            }
        } else if ($var_gizi_max == 'Lebih') {
            if ($jk == 'L') {
                $max_gizi = '82';
            } else if ($jk == 'P') {
                $max_gizi = '83';
            }
        } else if ($var_gizi_max == 'Obesitas') {
            if ($jk == 'L') {
                $max_gizi = '124';
            } else if ($jk == 'P') {
                $max_gizi = '123';
            }
        }

        // echo '<br>Data Status Gizi: ' . $max_gizi;
        // echo '<br>';


        if ($var_gizi_max == 'Buruk') {
            $z = round(53 - ($nilai_gizi_max * (53 - 48)));
            $k = round(53 - ($nilai_gizi_min * (53 - 48)));

            //perhitungan m1 
            $hasil_m1 = $nilai_gizi_max * ($z * $z);



            //perhitungan m2
            $v1 = (6.625 * ($k * $k));
            $v2 = (0.083 * ($k * $k * $k));

            $v3 = (6.625 * ($z * $z));
            $v4 = (0.083 * ($z * $z * $z));

            $v5 = $v1 - $v2;
            $v6 = $v3 - $v4;

            $hasil_m2 = $v5 - $v6;

            //perhitungan m3
            $hasil_m3 = ($nilai_gizi_min * ($max_gizi * $max_gizi)) - ($nilai_gizi_min * ($k * $k));
        } else if ($var_gizi_max == 'Kurang') {
            $z = round(48 - ($nilai_gizi_max * (53 - 48)));
            $k = round(48 - ($nilai_gizi_min * (53 - 48)));

            //perhitungan m1 
            $hasil_m1 = $nilai_gizi_max * ($z * $z);


            //perhitungan m2
            $v1 = (4.8 * ($k * $k));
            $v2 = (0.067 * ($k * $k * $k));

            $v3 = (4.8 * ($z * $z));
            $v4 = (0.067 * ($z * $z * $z));

            $v5 = $v1 - $v2;
            $v6 = $v3 - $v4;

            $hasil_m2 = $v5 - $v6;

            //perhitungan m3
            $hasil_m3 = ($nilai_gizi_min * ($max_gizi * $max_gizi)) - ($nilai_gizi_min * ($k * $k));
        } else if ($var_gizi_max == 'Normal') {
            $z = round(53 - ($nilai_gizi_max * (70 - 53)));
            $k = round(53 - ($nilai_gizi_min * (70 - 53)));

            //perhitungan m1 
            $hasil_m1 = $nilai_gizi_max * ($z * $z);


            //perhitungan m2
            $v1 = (1.558 * ($k * $k));
            $v2 = (0.019 * ($k * $k * $k));

            $v3 = (1.558 * ($z * $z));
            $v4 = (0.019 * ($z * $z * $z));

            $v5 = $v1 - $v2;
            $v6 = $v3 - $v4;

            $hasil_m2 = $v5 - $v6;

            //perhitungan m3
            $hasil_m3 = ($nilai_gizi_min * ($max_gizi * $max_gizi)) - ($nilai_gizi_min * ($k * $k));
        } else if ($var_gizi_max == 'Lebih') {
            $z = round(70 - ($nilai_gizi_max * (83 - 70)));
            $k = round(70 - ($nilai_gizi_min * (83 - 70)));
            //perhitungan m1 
            $hasil_m1 = $nilai_gizi_max * ($z * $z);

            //perhitungan m2
            $v1 = (2.69 * ($k * $k));
            $v2 = (0.025 * ($k * $k * $k));

            $v3 = (2.69 * ($z * $z));
            $v4 = (0.025 * ($z * $z * $z));

            $v5 = $v1 - $v2;
            $v6 = $v3 - $v4;

            $hasil_m2 = $v5 - $v6;

            //perhitungan m3
            $hasil_m3 = ($nilai_gizi_min * ($max_gizi * $max_gizi)) - ($nilai_gizi_min * ($k * $k));
        } else if ($var_gizi_max == 'Obesitas') {
            $z = round(83 - ($nilai_gizi_max * (123 - 83)));
            $k = round(83 - ($nilai_gizi_min * (123 - 83)));

            //perhitungan m1 
            $hasil_m1 = $nilai_gizi_max * ($z * $z);

            //perhitungan m2
            $v1 = (1.0375 * ($k * $k));
            $v2 = (0.008 * ($k * $k * $k));

            $v3 = (1.0375 * ($z * $z));
            $v4 = (0.008 * ($z * $z * $z));

            $v5 = $v1 - $v2;
            $v6 = $v3 - $v4;

            $hasil_m2 = $v5 - $v6;

            //perhitungan m3
            $hasil_m3 = ($nilai_gizi_min * ($max_gizi * $max_gizi)) - ($nilai_gizi_min * ($k * $k));
        }


        //perhitungan luas
        $a1 = $z * $nilai_gizi_max;
        $a2 = (($nilai_gizi_max + $nilai_gizi_min) * ($k - $z)) / 2;
        $a3 = ($max_gizi - $k) * $nilai_gizi_min;
        // echo '<br>';
        // echo 'Nilai Maks ' . $z;
        // echo '<br>';
        // echo 'Nilai Min ' . $k;
        // echo '<br>';
        // echo '<br>';
        // echo '<br>Hasil M1: ' . $hasil_m1;
        // echo '<br> Hasil M2: ' . $hasil_m2;
        // echo '<br> Hasil M3: ' . $hasil_m3;
        // echo '<br>';
        // echo '<br>';
        // echo '<br> Hasil A1: ' . $a1;
        // echo '<br> Hasil A2: ' . $a2;
        // echo '<br> Hasil A3: ' . $a3;


        //titik pusat
        $jml_momen = $hasil_m1 + $hasil_m2 + $hasil_m3;
        $jml_luas = $a1 + $a2 + $a3;
        $titik_pusat = round($jml_momen / $jml_luas);
        // echo '<h1>Hasil : ' . $titik_pusat . '</h1>';

        if ($jk == 'P') {
            if ($titik_pusat <= 48) {
                $status_gizi = 'Gizi Buruk';
            } else if ($titik_pusat >= 49 && $titik_pusat <= 53) {
                $status_gizi = 'Gizi Kurang';
            } else if ($titik_pusat >= 54 && $titik_pusat <= 70) {
                $status_gizi = 'Gizi Normal';
            } else if ($titik_pusat >= 71 && $titik_pusat <= 83) {
                $status_gizi = 'Gizi Lebih';
            } else if ($titik_pusat >= 83 && $titik_pusat <= 123) {
                $status_gizi = 'Gizi Obesitas';
            } else {
                $status_gizi = 'Gizi Buruk';
            }
        } else if ($jk == 'L') {
            if ($titik_pusat <= 49) {
                $status_gizi = 'Gizi Buruk';
            } else if ($titik_pusat >= 50 && $titik_pusat <= 53) {
                $status_gizi = 'Gizi Kurang';
            } else if ($titik_pusat >= 54 && $titik_pusat <= 70) {
                $status_gizi = 'Gizi Normal';
            } else if ($titik_pusat >= 71 && $titik_pusat <= 82) {
                $status_gizi = 'Gizi Lebih';
            } else if ($titik_pusat >= 83 && $titik_pusat <= 124) {
                $status_gizi = 'Gizi Obesitas';
            } else {
                $status_gizi = 'Gizi Buruk';
            }
        }
        // echo '<h1>Hasil Status Gizi: ' . $status_gizi . '</h1>';

        $data = array(
            'nilai_maks' => $nilai_gizi_max,
            'gizi_maks' => $var_gizi_max,
            'nilai_min' => $nilai_gizi_min,
            'gizi_min' => $var_gizi_min,
            'm1' => $hasil_m1,
            'm2' => $hasil_m2,
            'm3' => $hasil_m3,
            'a1' => $a1,
            'a2' => $a2,
            'a3' => $a3,
            'jml_momen' => $jml_momen,
            'jml_luas' => $jml_luas,
            'titik_pusat' => $titik_pusat,
            'status_gizi' => $status_gizi,
            'umur' => $umur,
            'berat' => $berat,
            'tinggi' => $tinggi,
            'jk' => $jk,
            'nama' => $nama_balita
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('HasilMamdani', $data);
        $this->load->view('Layouts/footer');
    }

    public function halaman()
    {
    }
}

/* End of file Perhitungan.php */
