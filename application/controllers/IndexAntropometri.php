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

    function multiplication_matrix($matrix_a, $matrix_b)
    {
        $result = array();
        for ($i = 0; $i < sizeof($matrix_a); $i++) {
            for ($j = 0; $j < sizeof($matrix_b[0]); $j++) {
                $temp = 0;
                for ($k = 0; $k < sizeof($matrix_b); $k++) {
                    $temp += $matrix_a[$i][$k] * $matrix_b[$k][$j];
                }
                $result[$i][$j] = $temp;
            }
        }
        return $result;
    }
    public function mamdani()
    {
        $umur = $this->input->post('umur');
        $berat = $this->input->post('berat');
        $i_umur = array();
        $umur_fase = array();
        //menghitung index umur
        if ($umur >= 6 && $umur <= 12) {
            $umur_fase[] = 'fase 1';
            if ($umur == 6) {
                $i_umur[] = 11;
            } else if ($umur < 12) {
                $i_umur[] = 12;
            } else if ($umur == 12) {
                $i_umur[] = 13;
            }
        }
        if ($umur >= 6 && $umur <= 24) {
            $umur_fase[] = 'fase 2';
            if ($umur == 6) {
                $i_umur[] = 21;
            } else if ($umur < 12) {
                $i_umur[] = 22;
            } else if ($umur <= 24) {
                $i_umur[] = 23;
            }
        }
        if ($umur >= 12 && $umur <= 36) {
            $umur_fase[] = 'fase 3';
            if ($umur == 12) {
                $i_umur[] = 31;
            } else if ($umur < 24) {
                $i_umur[] = 32;
            } else if ($umur <= 36) {
                $i_umur[] = 33;
            }
        }
        if ($umur >= 24 && $umur <= 48) {
            $umur_fase[] = 'fase 4';
            if ($umur == 24) {
                $i_umur[] = 41;
            } else if ($umur < 36) {
                $i_umur[] = 42;
            } else if ($umur <= 48) {
                $i_umur[] = 43;
            }
        }
        if ($umur >= 36 && $umur <= 60) {
            $umur_fase[] = 'fase 5';
            if ($umur == 36) {
                $i_umur[] = 51;
            } else if ($umur < 48) {
                $i_umur[] = 52;
            } else if ($umur == 48) {
                $i_umur[] = 53;
            }
        }


        //menghitung berat badan
        $i_berat = array();
        $berat_fase = array();
        if ($berat >= 7 && $berat <= 13) {
            $berat_fase[] = 'ringan';
            if ($berat == 7) {
                $i_berat[] = 11;
            } else if ($berat < 13) {
                $i_berat[] = 12;
            } else if ($berat == 13) {
                $i_berat[] = 13;
            }
        }
        if ($berat >= 7 && $berat <= 19) {
            $berat_fase[] = 'sedang';
            if ($berat == 7) {
                $i_berat[] = 21;
            } else if ($berat < 13) {
                $i_berat[] = 22;
            } else if ($berat <= 19) {
                $i_berat[] = 23;
            }
        }
        if ($berat >= 13 && $berat <= 19) {
            $berat_fase[] = 'berat';
            if ($berat == 13) {
                $i_berat[] = 31;
            } else if ($berat < 19) {
                $i_berat[] = 32;
            } else if ($berat == 19) {
                $i_berat[] = 33;
            }
        }



        $max = array();
        $min = array();
        // for ($i = 0; $i < sizeof($i_umur); $i++) {
        //     var_dump($i_umur[$i]);
        //     $umur = $i_umur[$i];
        //     echo '<br>';
        //     echo $umur_fase[$i];
        //     $min[] = min($i_umur);
        //     $max[] = max($i_umur);
        // }
        echo $i_umur[0] . '<br>';
        echo $i_umur[1] . '<br>';
        // var_dump(sizeof($i_umur));

        echo '<br>----------------<br>';
        // for ($a = 0; $a < sizeof($i_berat); $a++) {
        //     echo '<br>';
        //     var_dump($i_berat[$a]);
        //     $berat = $i_berat[$a];
        //     $min[] = min($i_berat);
        //     $max[] = max($i_berat);
        // }
        echo $i_berat[0] . '<br>';
        echo $i_berat[1] . '<br>';
        echo '<br>';
        // var_dump(sizeof($i_berat));

        echo '<br><br>';
        $all = array(array($umur_fase[0], $umur_fase[1]), array($berat_fase[0], $berat_fase[1]));

        $umur1 = $all[0][0];
        $umur2 = $all[0][1];

        $berat1 = $all[1][0];
        $berat2 = $all[1][1];

        echo '<br>' . $umur1 . ' / ' . $umur2 . ' / ' . $berat1 . ' / ' . $berat2;

        if ($umur1 == 'fase 2' and $berat1 == 'ringan') {
            $rules = 'rule 1';
        }
        if ($umur1 == 'fase 3' and $berat1 == 'sedang') {
            $rules = 'rule 2';
        }

        echo $rules;


        // echo 'Nilai Min ' . min($min);
        // echo '<br>';
        // echo 'Nilai Max ' . max($max);
    }
}

/* End of file Index.php */
