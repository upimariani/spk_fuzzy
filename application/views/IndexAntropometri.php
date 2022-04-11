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
            <h3 class="page-title">Data User</h3>
            <?php
            foreach ($range as $key => $value) {
                for ($i = $value->range_awal; $i <= $value->range_akhir; $i++) {
                    if ($i == 35) {
                        $fase = 0.0;
                        if ($value->keterangan == 'fase 1') {
                            if (35 == 6) {
                                $fase = 1;
                            } else if (35 < 12) {
                                $fase = (12 - 35) / 12;
                            } else if (35 == 12) {
                                $fase = 0;
                            }
                        } else if ($value->keterangan == 'fase 2') {
                            if (35 == 6) {
                                $fase = 0;
                            } else if (35 < 12) {
                                $fase = (35 - 6) / 12;
                            } else if (35 <= 24) {
                                $fase = (24 - 35) / 12;
                            }
                        } else if ($value->keterangan == 'fase 3') {
                            if (35 == 12) {
                                $fase = 0;
                            } else if (35 < 24) {
                                $fase = (35 - 12) / 12;
                            } else if (35 <= 36) {
                                $fase = (36 - 35) / 12;
                            }
                        } else if ($value->keterangan == 'fase 4') {
                            if (35 == 24) {
                                $fase = 0;
                            } else if (35 < 36) {
                                $fase = (35 - 24) / 12;
                            } else if (35 <= 48) {
                                $fase = (48 - 35) / 12;
                            }
                        } else if ($value->keterangan == 'fase 5') {
                            if (35 == 36) {
                                $fase = 0;
                            } else if (35 < 48) {
                                $fase = (35 - 36) / 12;
                            } else if (35 == 48) {
                                $fase = 1;
                            }
                        }
            ?>
                        <input type="text" name="<?= $value->id_index ?>umur" data-id="<?= $value->id_index ?>" value="<?= $fase ?>">
                <?php
                    }
                }
                ?>

                <p><?= $value->keterangan ?></p>
            <?php
            }
            ?>


            <?php
            foreach ($berat_badan as $key => $value) {
                for ($i = $value->range_awal; $i <= $value->range_akhir; $i++) {
                    if ($i == 15) {
                        $berat = 0.0;
                        if ($value->keterangan == 'ringan') {
                            if (15 == 7) {
                                $berat = 1;
                            } else if (15 < 13) {
                                $berat = (13 - 15) / 6;
                            } else if (15 == 13) {
                                $berat = 0;
                            }
                        } else if ($value->keterangan == 'sedang') {
                            if (15 == 7) {
                                $berat = 0;
                            } else if (15 < 13) {
                                $berat(15 - 7) / 6;
                            } else if (15 <= 19) {
                                $berat = (19 - 15) / 6;
                            }
                        } else if ($value->keterangan == 'berat') {
                            if (15 == 13) {
                                $berat = 0;
                            } else if (15 < 19) {
                                $berat = (15 - 13) / 6;
                            } else if (15 == 19) {
                                $berat = 1;
                            }
                        }
            ?>
                        <input type="text" value="<?= $berat ?>">
                <?php
                    }
                }
                ?>
                <p><?= $value->nama_index ?> <?= $value->keterangan ?></p>
            <?php
            }
            ?>

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
                                <th scope="col" class="border-0">Nama Index</th>
                                <th scope="col" class="border-0">Range Index</th>
                                <th scope="col" class="border-0">Keterangan</th>
                                <th scope="col" class="border-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($index as $key => $value) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->nama_index ?></td>
                                    <td><?= $value->range_awal ?></td>
                                    <td><?= $value->keterangan ?></td>
                                    <td></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-5 mb-4">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Form Inputs</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-0 px-3 pt-3">
                        <form action="<?= base_url('IndexAntropometri') ?>" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Index</label>
                                        <input type="text" value="<?= set_value('nama') ?>" name="nama" class="form-control" id="inputPassword4" placeholder="Masukkan Nama Index">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Range Index</label>
                                        <input type="text" value="<?= set_value('range') ?>" name="range" class="form-control" id="inputPassword4" placeholder="Masukkan Range Index">
                                        <?= form_error('range', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="keterangan" value="<?= set_value('keterangan') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan keterangan">
                                <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary mb-3">Save</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Default Light Table -->
    <!-- Default Dark Table -->