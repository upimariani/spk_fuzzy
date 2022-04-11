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
            <h3 class="page-title">Data Balita</h3><br>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Default Light Table -->
    <div class="create-balita row">
        <div class="col-lg-5 mb-4">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Form Inputs</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-0 px-3 pt-3">
                        <form action="<?= base_url('Balita/Update/' . $balita->id_balita) ?>" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Balita</label>
                                        <input type="text" value="<?= $balita->nama_balita ?>" name="nama" class="form-control" id="inputPassword4" placeholder="Masukkan Nama User">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jk" class="form-control">
                                            <option value="">---Pilih Jenis Kelamin---</option>
                                            <option value="P" <?php if ($balita->jenis_kelamin == 'P') {
                                                                    echo 'selected';
                                                                } ?>>Perempuan</option>
                                            <option value="L" <?php if ($balita->jenis_kelamin == 'L') {
                                                                    echo 'selected';
                                                                } ?>>Laki-Laki</option>
                                        </select>
                                        <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat Balita</label>
                                <input type="text" name="alamat" value="<?= $balita->alamat_balita ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input type="text" name="ayah" value="<?= $balita->nama_ayah ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Username">
                                        <?= form_error('ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input type="text" name="ibu" value="<?= $balita->nama_ibu ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Password">
                                        <?= form_error('ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" id="datepicker" name="tgl" value="<?= $balita->tgl_lahir ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Tanggal Lahir">
                                        <?= form_error('tgl', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mb-3">Save</button>
                            <a href="<?= base_url('Balita') ?>" class="btn btn-danger mb-3">Kembali</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>