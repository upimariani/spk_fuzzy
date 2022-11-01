<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan Hasil Perhitungan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
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
                                        <th>NIK</th>
                                        <th>Nama Balita</th>
                                        <th>Umur</th>
                                        <th>Berat Badan</th>
                                        <th>Tinggi Badan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Hasil</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($status_gizi as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nik ?></td>
                                            <td><?= $value->nama_balita ?></td>
                                            <td><?= $value->umur ?></td>
                                            <td><?= $value->bb ?></td>
                                            <td><?= $value->tb ?></td>
                                            <td><?= $value->jenis_kelamin ?></td>
                                            <td class="text-center"><?php
                                                                    if ($value->status_gizi == 'Gizi Buruk') {
                                                                        echo '<span class="badge badge-warning">Gizi Buruk</span>';
                                                                    } else if ($value->status_gizi == 'Gizi Kurang') {
                                                                        echo '<span class="badge badge-info">Gizi Kurang</span>';
                                                                    } else if ($value->status_gizi == 'Gizi Normal') {
                                                                        echo '<span class="badge badge-success">Gizi Normal</span>';
                                                                    } else if ($value->status_gizi == 'Gizi Lebih') {
                                                                        echo '<span class="badge badge-primary">Gizi Lebih</span>';
                                                                    } else if ($value->status_gizi == 'Gizi Obesitas') {
                                                                        echo '<span class="badge badge-danger">Gizi Obesitas</span>';
                                                                    }
                                                                    ?></td>
                                            <td class="text-center"><a href="<?= base_url('Dashboard/delete_hasil/' . $value->id_lap) ?>"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>NIK</th>
                                        <th>Nama Balita</th>
                                        <th>Umur</th>
                                        <th>Berat Badan</th>
                                        <th>Tinggi Badan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Hasil</th>
                                        <th class="text-center">Action</th>
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