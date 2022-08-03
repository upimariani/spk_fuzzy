<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Data User</h1>
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

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Form Inputs</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-0 px-3 pt-3">
                                <form action="<?= base_url('User/update_user/' . $user->id_user) ?>" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama User</label>
                                                <input type="text" value="<?= $user->nama_user ?>" name="nama" class="form-control" id="inputPassword4" placeholder="Masukkan Nama User">
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>No Telepon</label>
                                                <input type="text" value="<?= $user->no_hp ?>" name="no_hp" class="form-control" id="inputPassword4" placeholder="Masukkan No Telepon">
                                                <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" value="<?= $user->alamat ?>" name="alamat" class="form-control" id="inputPassword4" placeholder="Masukkan Alamat">
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" value="<?= $user->username ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Username">
                                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" name="password" value="<?= $user->password ?>" class="form-control" id="inputPassword4" placeholder="Masukkan Password">
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Level User</label>
                                        <select class="form-control" name="level">
                                            <option value="">--Pilih Level User--</option>
                                            <option value="1" <?php if ($user->level_user == '1') {
                                                                    echo 'selected';
                                                                } ?>>Admin Puskesmas</option>
                                            <option value="2" <?php if ($user->level_user == '2') {
                                                                    echo 'selected';
                                                                } ?>>Ketua Puskesmas</option>
                                        </select>
                                        <?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-3">Save</button>
                                    <a class="btn btn-danger mb-3" href="<?= base_url('user') ?>">Kembali</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Default Light Table -->
            <!-- Default Dark Table -->
        </div>
    </section>
</div>