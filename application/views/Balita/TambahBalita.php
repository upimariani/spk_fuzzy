<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Balita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Data Balita</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('Balita/tambahBalita') ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIK</label>
                                    <input type="number" value="<?= set_value('nik') ?>" name="nik" class="form-control" id="exampleInputEmail1" placeholder="Masukkan NIK Balita">
                                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Balita</label>
                                    <input type="text" value="<?= set_value('nama') ?>" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Balita">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
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
                                <div class="form-group">
                                    <label>Alamat Balita</label>
                                    <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Alamat Balita">
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input type="text" name="ayah" value="<?= set_value('ayah') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Nama Ayah">
                                            <?= form_error('ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input type="text" name="ibu" value="<?= set_value('ibu') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Nama Ibu">
                                            <?= form_error('ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input name="tgl" value="<?= set_value('bts') ?>" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <?= form_error('tgl', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>