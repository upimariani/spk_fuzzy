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
            <h3 class="page-title">Perhitungan</h3>

            <?php
            // $umur = 23;
            // $i_umur = array();
            // //menghitung index umur
            // if ($umur <= 12) {
            //     if ($umur == 6) {
            //         $i_umur[] = '11';
            //     } else if ($umur < 12) {
            //         $i_umur[] = '12';
            //     } else if ($umur == 12) {
            //         $i_umur[] = '13';
            //     }
            // } else if ($umur <= 24) {
            //     if ($umur == 6) {
            //         $i_umur[] = '21';
            //     } else if ($umur < 12) {
            //         $i_umur[] = '22';
            //     } else if ($umur <= 24) {
            //         $i_umur[] = '23';
            //     }
            // } else if ($umur <= 36) {
            //     if ($umur == 12) {
            //         $i_umur[] = '31';
            //     } else if ($umur < 24) {
            //         $i_umur[] = '32';
            //     } else if ($umur <= 36) {
            //         $i_umur[] = '33';
            //     }
            // }
            // else if (($umur >= 24) && ($umur <= 48)) {
            //     if ($umur == 24) {
            //         $i_umur[] = '41';
            //     } else if ($umur < 36) {
            //         $i_umur[] = '42';
            //     } else if ($umur <= 48) {
            //         $i_umur[] = '43';
            //     }
            // } else if (($umur >= 36) && ($umur <= 60)) {
            //     if ($umur == 36) {
            //         $i_umur[] = '51';
            //     } else if ($umur < 48) {
            //         $i_umur[] = '52';
            //     } else if ($umur == 48) {
            //         $i_umur[] = '53';
            //     }
            // }
            // for ($i = 0; $i < sizeof($i_umur); $i++) {
            //     echo '' . $i_umur[$i];
            // }


            ?>

            <?php
            // foreach ($range as $key => $value) {
            //     for ($i = $value->range_awal; $i <= $value->range_akhir; $i++) {
            //         $umur = 35;
            //         if ($i == $umur) {
            //             $fase = array();

            //             if ($value->keterangan == 'fase 1') {
            //                 $umur = $value->keterangan;
            //                 if ($umur == 6) {
            //                     $fase[] = 1;
            //                 } else if ($umur < 12) {
            //                     $fase[] = (12 - $umur) / 12;
            //                 } else if ($umur == 12) {
            //                     $fase[] = 0;
            //                 }
            //             } else if ($value->keterangan == 'fase 2') {
            //                 if ($umur == 6) {
            //                     $fase[] = 0;
            //                 } else if ($umur < 12) {
            //                     $fase[] = ($umur - 6) / 12;
            //                 } else if ($umur <= 24) {
            //                     $fase[] = (24 - $umur) / 12;
            //                 }
            //                 $umur = $value->keterangan;
            //             } else if ($value->keterangan == 'fase 3') {
            //                 if ($umur == 12) {
            //                     $fase[] = 0;
            //                 } else if ($umur < 24) {
            //                     $fase[] = ($umur - 12) / 12;
            //                 } else if ($umur <= 36) {
            //                     $fase[] = (36 - $umur) / 12;
            //                 }
            //                 $umur = $value->keterangan;
            //             } else if ($value->keterangan == 'fase 4') {
            //                 if ($umur == 24) {
            //                     $fase[] = 0;
            //                 } else if ($umur < 36) {
            //                     $fase[] = ($umur - 24) / 12;
            //                 } else if ($umur <= 48) {
            //                     $fase[] = (48 - $umur) / 12;
            //                 }
            //                 $umur = $value->keterangan;
            //             } else if ($value->keterangan == 'fase 5') {
            //                 if ($umur == 36) {
            //                     $fase[] = 0;
            //                 } else if ($umur < 48) {
            //                     $fase[] = ($umur - 36) / 12;
            //                 } else if ($umur == 48) {
            //                     $fase[] = 1;
            //                 }
            //                 $umur = $value->keterangan;
            //             }
            //             echo '<br>' . $umur;
            ?>
            <?php
            //     }
            // }
            ?>
            <?php
            // for ($i = 0; $i < sizeof($fase); $i++) {
            ?>
            <!-- <input type="text" name="<?= $value->id_index ?>umur" data-id="<?= $value->id_index ?>" value="<?= $fase[$i] ?>"> -->
            <?php
            // } 
            ?>
            <?php
            // }
            ?>
            <?php
            // foreach ($berat_badan as $key => $value) {
            //     for ($i = $value->range_awal; $i <= $value->range_akhir; $i++) {
            //         $brt = 15;
            //         if ($i == $brt) {
            //             $berat = 0.0;
            //             if ($value->keterangan == 'ringan') {
            //                 $berat_badan = $value->keterangan;
            //                 if ($brt == 7) {
            //                     $berat = 1;
            //                 } else if ($brt < 13) {
            //                     $berat = (13 - $brt) / 6;
            //                 } else if ($brt == 13) {
            //                     $berat = 0;
            //                 }
            //             } else if ($value->keterangan == 'sedang') {
            //                 $berat_badan = $value->keterangan;
            //                 if ($brt == 7) {
            //                     $berat = 0;
            //                 } else if ($brt < 13) {
            //                     $berat($brt - 7) / 6;
            //                 } else if ($brt <= 19) {
            //                     $berat = (19 - $brt) / 6;
            //                 }
            //             } else if ($value->keterangan == 'berat') {
            //                 $berat_badan = $value->keterangan;
            //                 if ($brt == 13) {
            //                     $berat = 0;
            //                 } else if ($brt < 19) {
            //                     $berat = ($brt - 13) / 6;
            //                 } else if ($brt == 19) {
            //                     $berat = 1;
            //                 }
            //             }
            //             echo '<br>' . $berat_badan;
            ?>
            <!-- <input type="text" value="<?= $berat ?>"> -->
            <?php
            //         }
            //     }
            // }
            ?>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Default Light Table -->
    <form action="<?= base_url('Perhitungan/variabel_anggota') ?>" method="POST">
        <div class="row">
            <div class="col-lg-5 mb-4">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Data Balita</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-0 px-3 pt-3">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Nama Balita</label>
                                        <select class="form-control" name="balita" id="balita">
                                            <option value="">--Pilih Balita---</option>
                                            <?php
                                            foreach ($balita as $key => $value) {
                                            ?>
                                                <option data-nama="<?= $value->nama_balita ?>" data-alamat="<?= $value->alamat_balita ?>" data-ayah="<?= $value->nama_ayah ?>" data-ibu="<?= $value->nama_ibu ?>" data-jk="<?= $value->jenis_kelamin ?>" data-tgl="<?= $value->tgl_lahir ?>" value="<?= $value->id_balita ?>"><?= $value->nama_balita ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <?= form_error('balita', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Balita</label>
                                        <input type="text" value="<?= set_value('range') ?>" name="range" class="nama form-control" id="inputPassword4" placeholder="Masukkan Range Index">
                                        <?= form_error('range', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Alamat Balita</label>
                                        <input type="text" value="<?= set_value('range') ?>" name="range" class="alamat form-control" id="inputPassword4" placeholder="Masukkan Range Index">
                                        <?= form_error('range', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input type="text" value="<?= set_value('range') ?>" name="range" class="ayah form-control" id="inputPassword4" placeholder="Masukkan Range Index">
                                        <?= form_error('range', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input type="text" value="<?= set_value('range') ?>" name="range" class="ibu form-control" id="inputPassword4" placeholder="Masukkan Range Index">
                                        <?= form_error('range', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" value="<?= set_value('range') ?>" name="jk" class="jk form-control" id="inputPassword4" placeholder="Masukkan Range Index">
                                        <?= form_error('range', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" value="<?= set_value('range') ?>" name="range" class="tgl form-control" id="inputPassword4" placeholder="Masukkan Range Index">
                                        <?= form_error('range', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 mb-4">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Data Variabel Perhitungan</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-0 px-3 pt-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Umur Balita</label>
                                        <input type="number" value="<?= set_value('range') ?>" name="umur" class="form-control" id="inputPassword4" placeholder="Masukkan Range Index">
                                        <?= form_error('range', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Berat Badan</label>
                                        <input type="number" value="<?= set_value('range') ?>" name="berat" class="form-control" id="inputPassword4" placeholder="Masukkan Range Index">
                                        <?= form_error('range', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tinggi Badan</label>
                                        <input type="number" value="<?= set_value('range') ?>" name="tinggi" class="form-control" id="inputPassword4" placeholder="Masukkan Range Index">
                                        <?= form_error('range', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mb-3">Anggota Fuzifikasi</button>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
    <!-- End Default Light Table -->
    <!-- Default Dark Table -->