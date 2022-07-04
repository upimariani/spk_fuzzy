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
            <h3 class="page-title">Hasil Defuzifikasi</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Informasi Hasil Status Gizi Balita</h6>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">

                                <!-- Main content -->
                                <div class="invoice p-3 mb-3">
                                    <!-- title row -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                <i class="fas fa-globe"></i> Puskesmas Desa Pamijahan
                                                <small class="float-right">Date: <?= date('Y-m-d') ?></small>
                                            </h4>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- info row -->
                                    <div class="row invoice-info">
                                        <div class="col-sm-4 invoice-col">
                                            Data Balita
                                            <address>
                                                <h5> <strong><?= $nama ?></strong></h5>
                                                Umur : <?= $umur ?><br>
                                                Berat : <?= $berat ?><br>
                                                Tinggi Badan : <?= $tinggi ?><br>
                                                Jenis Kelamin : <?= $jk ?>
                                            </address>
                                        </div>
                                        <!-- /.col -->

                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nilai Maksimal</th>
                                                        <th>Data Gizi Nilai Maksimal</th>
                                                        <th>Nilai Minimal</th>
                                                        <th>Data Gizi Nilai Minimal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $nilai_maks ?></td>
                                                        <td><?= $gizi_maks ?></td>
                                                        <td><?= $nilai_min ?></td>
                                                        <td><?= $gizi_min ?></td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Data M1</th>
                                                        <th>Data M2</th>
                                                        <th>Data M3</th>
                                                        <th>Data A1</th>
                                                        <th>Data A2</th>
                                                        <th>Data A3</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $m1 ?></td>
                                                        <td><?= $m2 ?></td>
                                                        <td><?= $m3 ?></td>
                                                        <td><?= $a1 ?></td>
                                                        <td><?= $a2 ?></td>
                                                        <td><?= $a3 ?></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <!-- accepted payments column -->
                                        <div class="col-6">
                                            <p class="lead">Informasi Status Gizi Balita</p>
                                            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                                <?= $status_gizi ?> </p>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <th style="width:50%">Jumlah Momen</th>
                                                        <td><?= $jml_momen ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jumlah Luas</th>
                                                        <td><?= $jml_luas ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Hasil Titik Pusat</th>
                                                        <td><?= $titik_pusat ?></td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- this row will not appear when printing -->
                                    <div class="row no-print">
                                        <div class="col-12">
                                            <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                            <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                                                Payment
                                            </button>
                                            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                                <i class="fas fa-download"></i> Generate PDF
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.invoice -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            </div>
        </div>
    </div>
</div>