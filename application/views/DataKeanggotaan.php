<?php
if ($this->session->userdata('success')) {
?>
    <div class="alert alert-accent alert-dismissible fade show mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-info mx-2"></i>
        <?=
        $this->session->userdata('success')
        ?>
    </div>
<?php
}
?>

<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Overview</span>
            <h3 class="page-title">Data Hasil Rules</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Default Light Table -->
    <div class="row">
        <div class="col-lg-7">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                </div>
                <div class="card-body p-0 pb-3">
                    <table class="table mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">#</th>
                                <th scope="col" class="border-0">Variabel Umur</th>
                                <th scope="col" class="border-0">Variabel Berat Badan</th>
                                <th scope="col" class="border-0">Variabel Tinggi Badan</th>
                                <th scope="col" class="border-0">Gizi</th>
                                <th scope="col" class="border-0">Nilai Min</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $var_umur = array();
                            $var_berat = array();
                            $var_tinggi = array();

                            $angg_umur = array();
                            $angg_berat = array();
                            $angg_tinggi = array();

                            // echo $jk . '<br>';
                            // echo $umur . '<br>';
                            // echo $berat . '<br>';
                            // echo $tinggi . '<br>';

                            //variabel umur
                            if ($umur >= 12 && $umur <= 24) {
                                $var_umur[] = 'fase 1';
                                if ($umur <= 12) {
                                    $angg_umur[] = 1;
                                } else if ($umur <= 24 && $umur > 12) {
                                    $angg_umur[] = (24 - $umur) / (24 - 12);
                                } else if ($umur >= 24) {
                                    $angg_umur[] = 0;
                                }
                            }
                            if ($umur >= 12 && $umur <= 36) {
                                $var_umur[] = 'fase 2';
                                if ($umur < 12 || $umur > 36) {
                                    $angg_umur[] = 0;
                                } else if ($umur >= 12 && $umur <= 24) {
                                    $angg_umur[] = ($umur - 12) / (24 - 12);
                                } else if (24 < $umur && $umur <= 36) {
                                    $angg_umur[] = (36 - $umur) / (36 - 24);
                                }
                            }
                            if ($umur >= 24 && $umur <= 48) {
                                $var_umur[] = 'fase 3';
                                if ($umur < 24 || $umur > 48) {
                                    $angg_umur[] = 0;
                                } else if (24 <= $umur && $umur <= 36) {
                                    $angg_umur[] = ($umur - 24) / (36 - 24);
                                } else if (36 < $umur && $umur <= 48) {
                                    $angg_umur[] = (48 - $umur) / (48 - 36);
                                }
                            }
                            if ($umur >= 36 && $umur <= 60) {
                                $var_umur[] = 'fase 4';
                                if ($umur < 36 || $umur > 60) {
                                    $angg_umur[] = 0;
                                } else if ($umur >= 36 && $umur < 48) {
                                    $angg_umur[] = ($umur - 36) / (48 - 36);
                                } else if (48 <= $umur && $umur <= 60) {
                                    $angg_umur[] = (60 - $umur) / (60 - 48);
                                }
                            }
                            if ($umur >= 48 && $umur <= 60) {
                                $var_umur[] = 'fase 5';
                                if ($umur < 48) {
                                    $angg_umur[] = 0;
                                } else if (48 <= $umur && $umur <= 60) {
                                    $angg_umur[] = ($umur - 48) / (60 - 48);
                                } else if ($umur > 60) {
                                    $angg_umur[] = 1;
                                }
                            }

                            // for ($i = 0; $i < sizeof($var_umur); $i++) {
                            //     echo $var_umur[$i];
                            //     echo '<br>';
                            //     echo $angg_umur[$i];
                            //     echo '<br>';
                            // }
                            // echo '<br>';

                            if ($jk == 'P') {
                                //variabel berat badan perempuan
                                if ($berat >= 12 && $berat < 19) {
                                    $var_berat[] = 'ringan';
                                    if ($berat <= 12) {
                                        $angg_berat[] = 1;
                                    } else if (12 < $berat && $berat <= 19) {
                                        $angg_berat[] = (19 - $berat) / (19 - 12);
                                    } else if ($berat > 19) {
                                        $angg_berat[] = 0;
                                    }
                                }
                                if ($berat >= 12 && $berat <= 25) {
                                    $var_berat[] = 'sedang';
                                    if ($berat < 12 || $berat > 25) {
                                        $angg_berat[] = 0;
                                    } else if ($berat >= 12 && $berat <= 19) {
                                        $angg_berat[] = ($berat - 12) / (19 - 12);
                                    } else if (19 <= $berat && $berat <= 25) {
                                        $angg_berat[] = (25 - $berat) / (25 - 19);
                                    }
                                }
                                if ($berat > 19 && $berat <= 25) {
                                    $var_berat[] = 'berat';
                                    if ($berat < 19) {
                                        $angg_berat[] = 0;
                                    } else if (19 <= $berat && $berat <= 25) {
                                        $angg_berat[] = ($berat - 19) / (25 - 19);
                                    } else if ($berat > 25) {
                                        $angg_berat[] = 1;
                                    }
                                }
                                // for ($i = 0; $i < sizeof($var_berat); $i++) {
                                //     echo $var_berat[$i];
                                //     echo '<br>';
                                //     echo $angg_berat[$i];
                                //     echo '<br>';
                                // }
                                // echo '<br>';
                                //tinggi badan perempuan

                                if ($tinggi >= 74 && $tinggi < 100) {
                                    $var_tinggi[] = 'rendah';
                                    if ($tinggi < 74) {
                                        $angg_tinggi[] = 1;
                                    } else if (74 <= $tinggi && $tinggi <= 100) {
                                        $angg_tinggi[] = (100 - $tinggi) / (100 - 74);
                                    } else if ($tinggi > 100) {
                                        $angg_tinggi[] = 0;
                                    }
                                }
                                if ($tinggi >= 74 && $tinggi <= 123) {
                                    $var_tinggi[] = 'sedang';
                                    if ($tinggi < 74 || $tinggi > 123) {
                                        $angg_tinggi[] = 0;
                                    } else if ($tinggi >= 74 && $tinggi <= 100) {
                                        $angg_tinggi[] = ($tinggi - 74) / (100 - 74);
                                    } else if (100 < $tinggi && $tinggi <= 123) {
                                        $angg_tinggi[] = (123 - $tinggi) / (123 - 100);
                                    }
                                }
                                if ($tinggi > 100 && $tinggi <= 123) {
                                    $var_tinggi[] = 'tinggi';
                                    if ($tinggi < 100) {
                                        $angg_tinggi[] = 0;
                                    } else if (100 <= $tinggi && $tinggi <= 123) {
                                        $angg_tinggi[] = ($tinggi - 100) / (123 - 100);
                                    } else if ($tinggi > 123) {
                                        $angg_tinggi[] = 1;
                                    }
                                }
                                // for ($i = 0; $i < sizeof($var_tinggi); $i++) {
                                //     echo $var_tinggi[$i];
                                //     echo '<br>';
                                //     echo $angg_tinggi[$i];
                                //     echo '<br>';
                                // }
                                // echo '<br>';
                            } else {
                                //variabel berat badan laki-laki
                                if ($berat >= 13 && $berat < 19) {
                                    $var_berat[] = 'ringan';
                                    if ($berat < 13) {
                                        $angg_berat[] = 1;
                                    } elseif (13 <= $berat && $berat <= 19) {
                                        $angg_berat[] = (19 - $berat) / (19 - 13);
                                    } elseif ($berat > 19) {
                                        $angg_berat[] = 0;
                                    }
                                }
                                if ($berat >= 13 && $berat <= 25) {
                                    $var_berat[] = 'sedang';
                                    if ($berat < 13 || $berat > 25) {
                                        $angg_berat[] = 0;
                                    } elseif (13 <= $berat && $berat <= 19) {
                                        $angg_berat[] = ($berat - 13) / (19 - 13);
                                    } elseif (19 < $berat && $berat <= 25) {
                                        $angg_berat[] = (25 - $berat) / (25 - 19);
                                    }
                                }
                                if ($berat > 19 && $berat <= 25) {
                                    $var_berat[] = 'berat';
                                    if ($berat < 19) {
                                        $angg_berat[] = 0;
                                    } else if (19 <= $berat && $berat <= 25) {
                                        $angg_berat[] = ($berat - 19) / (25 - 19);
                                    } else if ($berat > 25) {
                                        $angg_berat[] = 1;
                                    }
                                }
                                // for ($i = 0; $i < sizeof($var_berat); $i++) {
                                //     echo $var_berat[$i];
                                //     echo '<br>';
                                //     echo $angg_berat[$i];
                                //     echo '<br>';
                                // }
                                // echo '<br>';

                                //tinggi badan laki laki
                                if ($tinggi >= 75 && $tinggi < 101) {
                                    $var_tinggi[] = 'rendah';
                                    if ($tinggi < 75) {
                                        $angg_tinggi[] = 1;
                                    } else if (75 <= $tinggi && $tinggi <= 101) {
                                        $angg_tinggi[] = (101 - $tinggi) / (101 - 75);
                                    } else if ($tinggi > 101) {
                                        $angg_tinggi[] = 0;
                                    }
                                }
                                if ($tinggi > 75 && $tinggi <= 124) {
                                    $var_tinggi[] = 'sedang';
                                    if ($tinggi < 75 || $tinggi > 124) {
                                        $angg_tinggi[] = 0;
                                    } else if (75 <= $tinggi && $tinggi <= 101) {
                                        $angg_tinggi[] = ($tinggi - 75) / (101 - 75);
                                    } else if (101 < $tinggi && $tinggi <= 124) {
                                        $angg_tinggi[] = (124 - $tinggi) / (124 - 101);
                                    }
                                }
                                if ($tinggi > 101 && $tinggi <= 124) {
                                    $var_tinggi[] = 'tinggi';
                                    if ($tinggi < 101) {
                                        $angg_tinggi[] = 0;
                                    } else if (101 <= $tinggi && $tinggi <= 124) {
                                        $angg_tinggi[] = ($tinggi - 101) / (124 - 101);
                                    } else if ($tinggi > 124) {
                                        $angg_tinggi[] = 1;
                                    }
                                }
                                // for ($i = 0; $i < sizeof($var_tinggi); $i++) {
                                //     echo $var_tinggi[$i];
                                //     echo '<br>';
                                //     echo $angg_tinggi[$i];
                                //     echo '<br>';
                                // }
                                // echo '<br>';
                            }
                            $no = 1;
                            $dt_min = 1;
                            $dt_gizi = 1;
                            $max = 1;
                            ?>
                            <form action="<?= base_url() ?>Perhitungan/defuzyfikasi" method="POST">
                                <?php
                                for ($i = 0; $i < sizeof($var_umur); $i++) {
                                    for ($j = 0; $j < sizeof($var_berat); $j++) {
                                        for ($k = 0; $k < sizeof($var_tinggi); $k++) {

                                            if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Lebih';
                                            } else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Lebih';
                                            } else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Normal';
                                            } else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Normal';
                                            } else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Normal';
                                            } else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Normal';
                                            } else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Lebih';
                                            } else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Lebih';
                                            } else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Lebih';
                                            } else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Kurang';
                                            } else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Kurang';
                                            } else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Kurang';
                                            } else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Lebih';
                                            } else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Lebih';
                                            } else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Lebih';
                                            } else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Kurang';
                                            } else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Kurang';
                                            } else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Kurang';
                                            } else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Normal';
                                            } else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Normal';
                                            } else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Lebih';
                                            } else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Lebih';
                                            } else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Buruk';
                                            } else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Buruk';
                                            } else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Buruk';
                                            } else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Kurang';
                                            } else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Kurang';
                                            } else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Kurang';
                                            } else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'rendah') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'sedang') {
                                                $gizi = 'Obesitas';
                                            } else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'tinggi') {
                                                $gizi = 'Lebih';
                                            }

                                            // echo $var_umur[$i] . '/' . $var_berat[$j] . '/' . $var_tinggi[$k] . '/' . $gizi . '<br>';
                                            // echo round($angg_umur[$i], 2) . '/' . round($angg_berat[$j], 2) . '/' . round($angg_tinggi[$k], 2);

                                            $min = min(round($angg_umur[$i], 2), round($angg_berat[$j], 2), round($angg_tinggi[$k], 2));
                                            // echo '<br>min' . $min . '<br><br>';

                                            // $array_min = array();
                                            // $array_min = min(round($angg_umur[$i], 2), round($angg_berat[$j], 2), round($angg_tinggi[$k], 2));

                                ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $var_umur[$i] ?> (<?= round($angg_umur[$i], 2) ?>)</td>
                                                <td><?= $var_berat[$j] ?> (<?= round($angg_berat[$j], 2) ?>)</td>
                                                <td><?= $var_tinggi[$k] ?> (<?= round($angg_tinggi[$k], 2) ?>)</td>
                                                <td><?= $gizi ?> <input type="hidden" name="<?= 'gizi' . $dt_gizi++ ?>" value="<?= $gizi ?>"></td>
                                                <td><?= $min ?> <input type="hidden" name="<?= 'min' . $dt_min++ ?>" value="<?= $min ?>"></td>
                                                <?php $max_min = $max++ ?>
                                            </tr>
                                <?php
                                        }
                                    }
                                }
                                ?>
                        </tbody>
                    </table>
                    <input type="hidden" name="jk" value="<?= $jk ?>">
                    <input type="hidden" name="data_max" value="<?= $max_min ?>">
                    <input type="hidden" name="umur" value="<?= $umur ?>">
                    <input type="hidden" name="berat" value="<?= $berat ?>">
                    <input type="hidden" name="tinggi" value="<?= $tinggi ?>">
                    <input type="hidden" name="jk" value="<?= $jk ?>">
                    <input type="hidden" name="nama" value="<?= $nama_balita ?>">
                </div>
                <button type="submit" class="btn btn-warning">Defuzyfikasi</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Default Light Table -->
    <!-- Default Dark Table -->