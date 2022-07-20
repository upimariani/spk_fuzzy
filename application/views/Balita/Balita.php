<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Data Balita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
            <a href="<?= base_url('Balita/tambahBalita') ?>" class="btn btn-warning">Tambah Data Balita</a>
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
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Balita Desa Pamijahan</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Balita</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat Balita</th>
                                        <th>Ayah</th>
                                        <th>Ibu</th>
                                        <th>Action</th>
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
                                            <td><?= $value->jenis_kelamin ?></td>
                                            <td><?= $value->tgl_lahir ?></td>
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
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Balita</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat Balita</th>
                                        <th>Ayah</th>
                                        <th>Ibu</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
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