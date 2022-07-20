<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Admin</h1>
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
                            <h3 class="card-title">Add Data Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('User/tambahUser') ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama User</label>
                                    <input type="text" value="<?= set_value('nama') ?>" name="nama" class="form-control" id="inputPassword4" placeholder="Masukkan Nama User">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <input type="text" value="<?= set_value('no_hp') ?>" name="no_hp" class="form-control" id="inputPassword4" placeholder="Masukkan No Telepon">
                                    <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Alamat">
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>Username</label>
                                        <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Username">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Password</label>
                                        <input type="text" name="password" value="<?= set_value('password') ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
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