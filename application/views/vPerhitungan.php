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