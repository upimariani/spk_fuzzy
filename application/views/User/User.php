<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Data Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
            <?php
            if ($this->session->userdata('success')) {
            ?>
                <div class="alert alert-success alert-dismissible mt-3">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                    <?=
                    $this->session->userdata('success')
                    ?>
                </div>
            <?php
            }
            ?>
            <a href="<?= base_url('User/tambahUser') ?>" class="btn btn-warning">Tambah Data Admin</a>
            <!-- C
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi User</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="bg-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Admin</th>
                                        <th>Alamat</th>
                                        <th>Akun</th>
                                        <th>Level User</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($user as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nama_user ?><br><?= $value->no_hp ?></td>
                                            <td><?= $value->alamat ?></td>
                                            <td><span class="badge badge-success"><?= $value->username ?></span><span class="badge badge-warning"> <?= $value->password ?></span></td>
                                            <td><?php if ($value->level_user == '1') {
                                                    echo 'Admin Puskesmas';
                                                } else {
                                                    echo 'Ketua Puskesmas';
                                                } ?></td>
                                            <td> <a href="<?= base_url('user/delete/' . $value->id_user) ?>" type="button" class="mb-2 btn btn-sm btn-danger mr-1"><i class="fas fa-eraser"></i></a><a href="<?= base_url('user/update_user/' . $value->id_user) ?>" type="button" class="mb-2 btn btn-sm btn-info mr-1"><i class="fas fa-edit"></i></a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.row -->
            </div>
        </div>

        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>