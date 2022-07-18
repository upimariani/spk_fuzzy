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

        $data_max = $this->input->post('data_max');
        $data_min = array();
        for ($i = 0; $i <= $data_max; $i++) {

            $data_min[] = $this->input->post('min' . $i);
            $data_gizi[] = $this->input->post('gizi' . $i);

            // echo $data_min[$i];
            // echo $data_gizi[$i];
            // echo '<br>';
        }
        // echo '<br>';
        // echo '<br>';
        $buruk_dt = array();
        $kurang_dt = array();
        $normal_dt = array();
        $lebih_dt = array();
        $obesitas_dt = array();

        for ($i = 0; $i < sizeof($data_min); $i++) {
            if ($data_gizi[$i] == 'Buruk') {
                // echo $i;
                // echo 'Buruk';
                // echo $data_min[$i];

                $buruk_dt[] = $data_min[$i];
                $max[] = max($buruk_dt);
                // echo '<br>';
            } else if ($data_gizi[$i] == 'Kurang') {
                // echo $i;
                // echo 'Kurang';
                // echo $data_min[$i];

                $kurang_dt[] = $data_min[$i];
                $max[] = max($kurang_dt);
                // echo '<br>';
            } else if ($data_gizi[$i] == 'Normal') {
                // echo $i;
                // echo 'Normal';
                // echo $data_min[$i];

                $normal_dt[] = $data_min[$i];
                $max[] = max($normal_dt);
                // echo '<br>';
            } else if ($data_gizi[$i] == 'Lebih') {
                // echo $i;
                // echo 'Lebih';
                // echo $data_min[$i];

                $lebih_dt[] = $data_min[$i];
                $max[] = max($lebih_dt);
                // echo '<br>';
            } else if ($data_gizi[$i] == 'Obesitas') {
                // echo $i;
                // echo 'Obesitas';
                // echo $data_min[$i];

                $obesitas_dt[] = $data_min[$i];
                $max[] = max($obesitas_dt);
                // echo '<br>';
            }
        }


        $data_var = array();
        $data_gizi = array();
        for ($i = 0; $i < sizeof($lebih_dt); $i++) {
            $data_gizi[] = 'Lebih';
            $data_var[] = max($lebih_dt);

            // echo '<br>';
        }
        for ($i = 0; $i < sizeof($obesitas_dt); $i++) {
            $data_gizi[] = 'Obesitas';
            $data_var[] = max($obesitas_dt);
            // echo '<br>';
        }
        for ($i = 0; $i < sizeof($normal_dt); $i++) {
            $data_gizi[] = 'Normal';
            $data_var[] = max($normal_dt);
            // echo '<br>';
        }
        for ($i = 0; $i < sizeof($kurang_dt); $i++) {
            $data_gizi[] = 'Kurang';
            $data_var[] = max($kurang_dt);
            // echo '<br>';
        }
        for ($i = 0; $i < sizeof($buruk_dt); $i++) {
            $data_gizi[] = 'Buruk';
            $data_var[] = max($buruk_dt);
            // echo '<br>';
        }


        // echo '<br>';
        // echo '<br>';
        // for ($i = 0; $i < sizeof($data_var); $i++) {
        //     echo $data_var[$i];
        //     echo $data_gizi[$i];
        //     echo $i;
        //     echo '<br>';
        //     // echo '<br>';
        // }
        // $max = max($data_var);
        // $min = min($data_var);
        // echo $max;
        // echo $min;




        $maksimal = PHP_INT_MIN;

        for ($i = 0; $i < sizeof($data_var); $i++) {
            if ($data_var[$i] > $maksimal) {
                $maksimal = $data_var[$i];
                $gizi_maksimal = $data_gizi[$i];
            }
        }

        // echo '<br> Data Pertama: ';
        // echo $maksimal;
        // echo $gizi_maksimal;



        sort($data_var);

        $bottomThree = 1;
        for ($x = 0; $x < $bottomThree; $x++) {
            // echo "<br>";
            $minimal = $data_var[$x];
            $gizi_minimal = $data_gizi[$x];
            // echo "<br>";
        }


        // echo '<br> Data Terakhir: ';
        // echo $minimal;
        // echo $gizi_minimal;







        if ($gizi_minimal == 'Buruk') {
            if ($jk == 'L') {
                $max_gizi = '49';
            } else if ($jk == 'P') {
                $max_gizi = '48';
            }
        } else if ($gizi_minimal == 'Kurang') {
            if ($jk == 'L') {
                $max_gizi = '53';
            } else if ($jk == 'P') {
                $max_gizi = '53';
            }
        } else if ($gizi_minimal == 'Normal') {
            if ($jk == 'L') {
                $max_gizi = '70';
            } else if ($jk == 'P') {
                $max_gizi = '70';
            }
        } else if ($gizi_minimal == 'Lebih') {
            if ($jk == 'L') {
                $max_gizi = '82';
            } else if ($jk == 'P') {
                $max_gizi = '83';
            }
        } else if ($gizi_minimal == 'Obesitas') {
            if ($jk == 'L') {
                $max_gizi = '124';
            } else if ($jk == 'P') {
                $max_gizi = '123';
            }
        }

        echo '<br>Data Status Gizi: ' . $max_gizi;
        echo '<br>';


        //keterangan z = maksimal
        //keterangan k = minimal
        if ($gizi_maksimal == 'Buruk') {
            if ($jk == 'L') {
                $z = round(53 - ($maksimal * (53 - 49)));
                $k = round(53 - ($minimal * (53 - 49)));

                //perhitungan m1 
                $hasil_m1 = $maksimal * ($z * $z);
                // echo $z;



                //perhitungan m2
                $v1 = round(6.625 * ($k * $k));
                // echo '<br>';
                // echo $v1;
                $v2 = round(0.083 * ($k * $k * $k));
                // echo '<br>';
                // echo $v2;
                // echo '<br>';

                $v3 = round(6.625 * ($z * $z));
                echo '<br>';
                // echo $v3;
                $v4 = round(0.083 * ($z * $z * $z));
                // echo '<br>';
                // echo $v4;
                // echo '<br>';

                $v5 = $v1 - $v2;
                $v6 = $v3 - $v4;

                $hasil_m2 = $v5 - $v6;

                //perhitungan m3
                $hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
            } else if ($jk == 'P') {
                $z = round(53 - ($maksimal * (53 - 48)));
                $k = round(53 - ($minimal * (53 - 48)));

                //perhitungan m1 
                $hasil_m1 = $maksimal * ($z * $z);
                echo $z;



                //perhitungan m2
                $v1 = round(6.625 * ($k * $k));
                // echo '<br>';
                // echo $v1;
                $v2 = round(0.083 * ($k * $k * $k));
                // echo '<br>';
                // echo $v2;
                // echo '<br>';

                $v3 = round(6.625 * ($z * $z));
                // echo '<br>';
                // echo $v3;
                $v4 = round(0.083 * ($z * $z * $z));
                // echo '<br>';
                // echo $v4;
                // echo '<br>';

                $v5 = $v1 - $v2;
                $v6 = $v3 - $v4;

                $hasil_m2 = $v5 - $v6;

                //perhitungan m3
                $hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
            }
        } else if ($gizi_maksimal == 'Kurang') {
            if ($jk == 'L') {
                $z = round(49 - ($maksimal * (53 - 49)));
                $k = round(49 - ($minimal * (53 - 49)));

                //perhitungan m1 
                $hasil_m1 = $maksimal * ($z * $z);


                //perhitungan m2
                $v1 = (4.8 * ($k * $k));
                $v2 = (0.067 * ($k * $k * $k));

                $v3 = (4.8 * ($z * $z));
                $v4 = (0.067 * ($z * $z * $z));

                $v5 = $v1 - $v2;
                $v6 = $v3 - $v4;

                $hasil_m2 = $v5 - $v6;

                //perhitungan m3
                $hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
            } else if ($jk == 'P') {
                $z = round(48 - ($maksimal * (53 - 48)));
                $k = round(48 - ($minimal * (53 - 48)));

                //perhitungan m1 
                $hasil_m1 = $maksimal * ($z * $z);


                //perhitungan m2
                $v1 = (4.8 * ($k * $k));
                $v2 = (0.067 * ($k * $k * $k));

                $v3 = (4.8 * ($z * $z));
                $v4 = (0.067 * ($z * $z * $z));

                $v5 = $v1 - $v2;
                $v6 = $v3 - $v4;

                $hasil_m2 = $v5 - $v6;

                //perhitungan m3
                $hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
            }
        } else if ($gizi_maksimal == 'Normal') {
            if ($jk == 'L') {
                $z = round(53 - ($maksimal * (70 - 53)));
                $k = round(53 - ($minimal * (70 - 53)));

                //perhitungan m1 
                $hasil_m1 = $maksimal * ($z * $z);


                //perhitungan m2
                $v1 = (1.558 * ($k * $k));
                $v2 = (0.019 * ($k * $k * $k));

                $v3 = (1.558 * ($z * $z));
                $v4 = (0.019 * ($z * $z * $z));

                $v5 = $v1 - $v2;
                $v6 = $v3 - $v4;

                $hasil_m2 = $v5 - $v6;

                //perhitungan m3
                $hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
            } else if ($jk == 'P') {
                $z = round(53 - ($maksimal * (70 - 53)));
                $k = round(53 - ($minimal * (70 - 53)));

                //perhitungan m1 
                $hasil_m1 = $maksimal * ($z * $z);


                //perhitungan m2
                $v1 = (1.558 * ($k * $k));
                $v2 = (0.019 * ($k * $k * $k));

                $v3 = (1.558 * ($z * $z));
                $v4 = (0.019 * ($z * $z * $z));

                $v5 = $v1 - $v2;
                $v6 = $v3 - $v4;

                $hasil_m2 = $v5 - $v6;

                //perhitungan m3
                $hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
            }
        } else if ($gizi_maksimal == 'Lebih') {
            if ($jk == 'L') {
                $z = round(70 - ($maksimal * (82 - 70)));
                $k = round(70 - ($minimal * (82 - 70)));
                //perhitungan m1 
                $hasil_m1 = $maksimal * ($z * $z);

                //perhitungan m2
                $v1 = (2.69 * ($k * $k));
                $v2 = (0.025 * ($k * $k * $k));

                $v3 = (2.69 * ($z * $z));
                $v4 = (0.025 * ($z * $z * $z));

                $v5 = $v1 - $v2;
                $v6 = $v3 - $v4;

                $hasil_m2 = $v5 - $v6;

                //perhitungan m3
                $hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
            } else if ($jk == 'P') {
                $z = round(70 - ($maksimal * (83 - 70)));
                $k = round(70 - ($minimal * (83 - 70)));
                //perhitungan m1 
                $hasil_m1 = $maksimal * ($z * $z);

                //perhitungan m2
                $v1 = (2.69 * ($k * $k));
                $v2 = (0.025 * ($k * $k * $k));

                $v3 = (2.69 * ($z * $z));
                $v4 = (0.025 * ($z * $z * $z));

                $v5 = $v1 - $v2;
                $v6 = $v3 - $v4;

                $hasil_m2 = $v5 - $v6;

                //perhitungan m3
                $hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
            }
        } else if ($gizi_maksimal == 'Obesitas') {
            if ($jk == 'L') {
                $z = round(82 - ($maksimal * (123 - 82)));
                $k = round(82 - ($minimal * (123 - 82)));

                //perhitungan m1 
                $hasil_m1 = $maksimal * ($z * $z);

                //perhitungan m2
                $v1 = (1.0375 * ($k * $k));
                $v2 = (0.008 * ($k * $k * $k));

                $v3 = (1.0375 * ($z * $z));
                $v4 = (0.008 * ($z * $z * $z));

                $v5 = $v1 - $v2;
                $v6 = $v3 - $v4;

                $hasil_m2 = $v5 - $v6;

                //perhitungan m3
                $hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
            } else if ($jk == 'P') {
                $z = round(83 - ($maksimal * (123 - 83)));
                $k = round(83 - ($minimal * (123 - 83)));

                //perhitungan m1 
                $hasil_m1 = $maksimal * ($z * $z);

                //perhitungan m2
                $v1 = (1.0375 * ($k * $k));
                $v2 = (0.008 * ($k * $k * $k));

                $v3 = (1.0375 * ($z * $z));
                $v4 = (0.008 * ($z * $z * $z));

                $v5 = $v1 - $v2;
                $v6 = $v3 - $v4;

                $hasil_m2 = $v5 - $v6;

                //perhitungan m3
                $hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
            }
        }


        //perhitungan luas
        $a1 = $z * $maksimal;
        $a2 = (($maksimal + $minimal) * ($k - $z)) / 2;
        $a3 = ($max_gizi - $k) * $minimal;
        // echo '<br>';
        // echo 'Nilai Maks ' . $z;
        // echo '<br>';
        // echo 'Nilai Min ' . $k;
        // echo '<br>';
        // echo 'Nilai Maksimal ' . $maksimal;
        // echo '<br>';
        // echo 'Nilai Minimal ' . $minimal;
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
            'nilai_maks' => $maksimal,
            'gizi_maks' => $gizi_maksimal,
            'nilai_min' => $minimal,
            'gizi_min' => $gizi_minimal,
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
}

/* End of file Perhitungan.php */
