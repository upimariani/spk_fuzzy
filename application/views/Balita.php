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
            <button id="create" class="btn btn-primary">Create New Balita</button>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Default Light Table -->
    <div class="create-balita row" style="display: none;">
        <div class="col-lg-5 mb-4">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Form Inputs</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-0 px-3 pt-3">
                        <form action="<?= base_url('Balita') ?>" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Balita</label>
                                        <input type="text" value="<?= set_value('nama') ?>" name="nama" class="form-control" id="inputPassword4" placeholder="Masukkan Nama User">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jk" class="form-control">
                                            <option value="">---Pilih Jenis Kelamin---</option>
                                            <option value="P" <?php if (set_value('jk') == 'P') {
                                                                    echo 'selected';
                                                                } ?>>Perempuan</option>
                                            <option value="L" <?php if (set_value('jk') == 'L') {
                                                                    echo 'selected';
                                                                } ?>>Laki-Laki</option>
                                        </select>
                                        <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat Balita</label>
                                <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input type="text" name="ayah" value="<?= set_value('ayah') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Username">
                                        <?= form_error('ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input type="text" name="ibu" value="<?= set_value('ibu') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Password">
                                        <?= form_error('ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" id="datepicker" name="tgl" value="<?= set_value('tgl') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Tanggal Lahir">
                                        <?= form_error('tgl', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mb-3">Save</button>
                            <button id="hide" class="btn btn-danger mb-3">Kembali</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">#</th>
                                <th scope="col" class="border-0">Nama Balita</th>
                                <th scope="col" class="border-0">Jenis Kelamin</th>
                                <th scope="col" class="border-0">Tanggal Lahir</th>
                                <th scope="col" class="border-0">Alamat Balita</th>
                                <th scope="col" class="border-0">Ayah</th>
                                <th scope="col" class="border-0">Ibu</th>
                                <th scope="col" class="border-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($balita as $key => $value) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->nama_balita ?></td>
                                    <td><?= $value->tgl_lahir ?></td>
                                    <td><?= $value->jenis_kelamin ?></td>
                                    <td><?= $value->alamat_balita ?></td>
                                    <td><?= $value->nama_ayah ?></td>
                                    <td><?= $value->nama_ibu ?></td>
                                    <td> <a href="<?= base_url('balita/delete/' . $value->id_balita) ?>" type="button" class="mb-2 btn btn-sm btn-danger mr-1"><i class="fas fa-eraser"></i></a>
                                        <a href="<?= base_url('balita/update/' . $value->id_balita) ?>" type="button" class="mb-2 btn btn-sm btn-info mr-1"><i class="fas fa-edit"></i></a>
                                    </td>

                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Default Light Table -->
</div>