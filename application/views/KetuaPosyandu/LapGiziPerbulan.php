<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Laporan Status Gizi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-light">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Per Status Gizi Bulanan</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            echo form_open('KetuaPosyandu/Laporan/lapgiziperbulan') ?>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Status Gizi</label>
                                        <select name="gizi" class="form-control">
                                            <option value="">---Pilih Status Gizi---</option>
                                            <option value="Gizi Buruk">Gizi Buruk</option>
                                            <option value="Gizi Kurang">Gizi Kurang</option>
                                            <option value="Gizi Normal">Gizi Normal</option>
                                            <option value="Gizi Lebih">Gizi Lebih</option>
                                            <option value="Gizi Obesitas">Gizi Obesitas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Bulan</label>
                                        <select name="bulan" class="form-control">
                                            <?php
                                            $mulai = 1;
                                            for ($i = $mulai; $i < $mulai + 12; $i++) {
                                                $sel = $i == date('Y') ? 'selected="selected"' : '';
                                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <select name="tahun" class="form-control">
                                            <?php
                                            $mulai = date('Y') - 1;
                                            for ($i = $mulai; $i < $mulai + 10; $i++) {
                                                $sel = $i == date('Y') ? 'selected="selected"' : '';
                                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> Cetak Laporan</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>