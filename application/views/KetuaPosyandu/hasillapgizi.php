<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan Status Gizi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> Note:</h5>
                        Informasi Status Gizi Per Bulan
                    </div>


                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12 mb-5">
                                <h4>
                                    <i class="fas fa-globe"></i> Laporan Status Gizi Per Bulan
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->

                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama Balita</th>
                                            <th>Umur</th>
                                            <th>Berat Badan</th>
                                            <th>Tinggi Badan</th>
                                            <th>Status Gizi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($laporan as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><?= $value->nik ?></td>
                                                <td><?= $value->nama_balita ?></td>
                                                <td><?= $value->umur ?></td>
                                                <td><?= $value->bb ?></td>
                                                <td><?= $value->tb ?></td>
                                                <td><?= $value->status_gizi ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">

                                <button type="button" onclick="window.print()" class="btn btn-primary float-right" style="margin-right: 5px;">
                                    <i class="fas fa-print"></i> Cetak
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>