<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Hasil Perhitungan Metode Mamdani</h1>
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
													<button onclick="window.print()" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
													<form action="<?= base_url('perhitungan/addperhitungan') ?>" method="POST">
														<input type="hidden" name="m1" value="<?= $m1 ?>">
														<input type="hidden" name="m2" value="<?= $m2 ?>">
														<input type="hidden" name="m3" value="<?= $m3 ?>">
														<input type="hidden" name="a1" value="<?= $a1 ?>">
														<input type="hidden" name="a2" value="<?= $a2 ?>">
														<input type="hidden" name="a3" value="<?= $a3 ?>">
														<input type="hidden" name="titik_pusat" value="<?= $titik_pusat ?>">
														<input type="hidden" name="status_gizi" value="<?= $status_gizi ?>">
														<input type="hidden" name="tgl" value="<?= date('Y-m-d') ?>">
														<input type="hidden" name="id_balita" value="<?= $id_balita ?>">
														<input type="hidden" name="umur" value="<?= $umur ?>">
														<input type="hidden" name="bb" value="<?= $berat ?>">
														<input type="hidden" name="tb" value="<?= $tinggi ?>">
														<a href="<?= base_url('Perhitungan') ?>" class="btn btn-danger float-right"><i class="fas fa-backspace"></i>
															Kembali
														</a>
														<button type="submit" class="btn btn-success float-right"><i class="far fa-save"></i>
															Simpan Data
														</button>
													</form>

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
	</section>
</div>