<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard v2</h1>
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
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-check"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">User</span>
                            <span class="info-box-number">
                                <?= $jumlah['user']->jml_user ?>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="far fa-smile"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Balita</span>
                            <span class="info-box-number"><?= $jumlah['balita']->jml_balita ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>


                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i><strong>
                                    Grafik Jumlah Status Gizi PerBulan</strong>
                                <p><?= date('Y-m-d') ?></p>
                            </h3>
                        </div>
                        <div class="col-12 table-responsive">
                            <canvas id="grafik" height="100"></canvas>


                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i><strong>
                                    INFORMASI ABOUT POSYANDU</strong>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body clearfix">
                            <blockquote class="quote-info">
                                <p>POSYANDU MELATI III PAMIJAHAN</p>
                                <img style="width: 150px;" src="<?= base_url('asset/logo_posyandu.jpeg') ?>">
                                <small>Sistem Pendukung Keputusan Untuk Menentukan Status Gizi Balita<br>

                                    Aplikasi ini merupakan Sistem Pendukung Keputusan untuk menentukan status gizi balita di Posyandu Melati III Pamijahan. Sistem ini menggunakan metode perhitungan Fuzzy Mamdani dengan data input menurut Standar Antropometri Anak yaitu Umur, Berat Badan dan Tinggi Badan.
                                </small>
                            </blockquote>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>

            <!-- Main row -->
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i><strong>
                                    Grafik Anggota Variabel</strong><br>
                                <small>Salah satu tahapan dalam perhitungan metode Fuzzy Mamdani, Fuzzifikasi adalah tahap pemetaan nilai masukan dan keluaran kedalam bentuk
                                    himpunan fuzzy. Data masukan berupa himpunan crisp yang akan diubah menjadi
                                    himpunan fuzzy berdasarkan range untuk setiap variabel masukannya. Pada proses
                                    fuzzifikasi ini terdapat dua hal yang harus diperhatikan yaitu nilai masukan dan keluaran serta fungsi keanggotaan (membership function) yang akan digunakan untuk menentukan nilai fuzzy dari data nilai crisp masukan dan keluaran.
                                </small>
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <!-- Info Boxes Style 2 -->
                            <div class="info-box mb-3 bg-warning">
                                <span class="info-box-icon"><i class="fas fa-wave-square"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Umur</span>
                                    <span class="info-box-number">Fase 1 -> 0-12<br>Fase 2 -> 12-24<br>Fase 3 -> 24-36<br>Fase 4 -> 36-48<br>Fase 5 -> 48-60</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box mb-3 bg-success">
                                <span class="info-box-icon"><i class="fas fa-pager"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Berat Badan</span>
                                    <div class="row">
                                        <div class="col-lg-6"> <span class="info-box-number">Laki - Laki</span><br>Ringan -> 0-13<br>Sedang -> 13-19<br>Berat -> 19-25</div>
                                        <div class="col-lg-6"> <span class="info-box-number">Perempuan</span><br>Ringan -> 0-12<br>Sedang -> 13-19<br>Berat -> 19-25</div>
                                    </div>

                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box mb-3 bg-danger">
                                <span class="info-box-icon"><i class="fas fa-ruler"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Tinggi Badan</span>
                                    <div class="row">
                                        <div class="col-lg-6"> <span class="info-box-number">Laki - Laki</span><br>Rendah -> 0-75<br>Sedang -> 75-101<br>Tinggi -> 101-124</div>
                                        <div class="col-lg-6"> <span class="info-box-number">Laki - Laki</span><br>Rendah -> 0-74<br>Sedang -> 75-100<br>Tinggi -> 100-123</div>
                                    </div>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->

                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i><strong>
                                    Istilah Metode Mamdani</strong>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body clearfix">
                            <blockquote class="quote-warning">
                                <p><strong>1. Fuzzy Mamdani</strong> </p>
                                <small>Merupakan metode yang digunakan dalam Sistem Pendukung Keputusan untuk menentukan Status Gizi Balita.</small>
                            </blockquote>
                            <blockquote class="quote-danger">
                                <p><strong>2. Defuzifikasi </strong></p>
                                <small>Tahapan ini adalah suatu proses yang menggabungkan seluruh fuzzy output
                                    menjadi sebuah hasil spesifik yang dapat digunakan untuk masing–masing sistem
                                    output. Tahapan ini menentukan hasil akhir dari suatu sistem.
                                </small>
                            </blockquote>
                            <blockquote class="quote-info">
                                <p><strong>3. Prosedur defuzzifikasi</strong> </p>
                                <small>Dengan menggunakan Metode Centroid, yaitu
                                    menentukan moment (integral dari masing-masing fungsi keanggotaan dari
                                    komposisi aturan), menentukan luas, dan menentukan titik pusat.

                                </small>
                            </blockquote>
                            <blockquote class="quote-success">
                                <p><strong>4. M1, M2, dan M3 </strong></p>
                                <small>Menentukan moment (integral dari masing-masing fungsi keanggotaan dari
                                    komposisi aturan)


                                </small>
                            </blockquote>
                            <blockquote class="quote-primary">
                                <p><strong>5. A1, A2 dan A3</strong> </p>
                                <small>Menentukan luas
                                </small>
                            </blockquote>
                            <blockquote class="quote-warning">
                                <p><strong>6. Titik Pusat</strong> </p>
                                <small>Hasil akhir perhitungan fuzzy mamdani dengan cara Membagi nilai Moment (M1, M2 dan M3) dengan nilai Luas (A1, A2 dan A3)
                                </small>
                            </blockquote>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->