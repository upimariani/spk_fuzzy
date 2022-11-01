<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Tambah Data Balita</h1>
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
	<!-- End Page Header -->
	<!-- Default Light Table -->
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<?php
			if ($this->session->userdata('error')) {
			?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h5><i class="icon fas fa-ban"></i> Alert!</h5>
					<form action="<?= base_url('Perhitungan/update_hasil/' . $id_balita) ?>" method="POST">
						<?php
						$date = $tgl_periksa;
						$pecah_tgl = explode("-", $date);
						$thn = $pecah_tgl[0];
						$bln = $pecah_tgl[1];
						?>
						<input type="hidden" name="id_balita" value="<?= $id_balita ?>">
						<input type="hidden" name="cek_tgl_periksa" value="<?= $bln ?>">
						<input type="hidden" name="tgl_periksa" value="<?= $tgl_periksa ?>">
						<input type="hidden" name="umur" value="<?= $umur ?>">
						<input type="hidden" name="bb" value="<?= $bb ?>">
						<input type="hidden" name="tb" value="<?= $tb ?>">
						<input type="hidden" name="m1" value="<?= $m1 ?>">
						<input type="hidden" name="m2" value="<?= $m2 ?>">
						<input type="hidden" name="m3" value="<?= $m3 ?>">
						<input type="hidden" name="a1" value="<?= $a1 ?>">
						<input type="hidden" name="a2" value="<?= $a2 ?>">
						<input type="hidden" name="a3" value="<?= $a3 ?>">
						<input type="hidden" name="titik_pusat" value="<?= $titik_pusat ?>">
						<input type="hidden" name="status_gizi" value="<?= $status_gizi ?>">
						<p><?= $this->session->userdata('error') ?></p>
						<button type="submit" class="btn btn-default">Update Hasil</button>
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					</form>
				</div>

			<?php
			}
			?>

			<form action="<?= base_url('Perhitungan') ?>" method="POST">
				<div class="row">
					<div class="col-lg-5 mb-4">
						<div class="card card-small mb-4">
							<div class="card-header border-bottom">
								<h6 class="m-0">Data Balita</h6>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item p-0 px-3 pt-3">

									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<label>Nama Balita</label>
												<select class="form-control" name="balita" id="balita">
													<?php

													?>
													<option value="">--Pilih Balita---</option>
													<?php
													foreach ($balita as $key => $value) {
													?>
														<option data-nama="<?= $value->nama_balita ?>" data-alamat="<?= $value->alamat_balita ?>" data-ayah="<?= $value->nama_ayah ?>" data-ibu="<?= $value->nama_ibu ?>" data-jk="<?= $value->jenis_kelamin ?>" data-tgl="<?= $value->tgl_lahir ?>" value="<?= $value->id_balita ?>"><?= $value->nama_balita ?></option>
													<?php
													}
													?>
												</select>
												<?= form_error('balita', '<small class="text-danger pl-3">', '</small>'); ?>
												<hr>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Nama Balita</label>
												<input type="text" value="<?= set_value('nama') ?>" name="nama" class="nama form-control" id="inputPassword4" placeholder="---Pilih Nama Balita---" readonly>
												<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Alamat Balita</label>
												<input type="text" value="<?= set_value('alamat') ?>" name="alamat" class="alamat form-control" id="inputPassword4" placeholder="---Pilih Nama Balita---" readonly>
												<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Nama Ayah</label>
												<input type="text" value="<?= set_value('ayah') ?>" name="ayah" class="ayah form-control" id="inputPassword4" placeholder="---Pilih Nama Balita---" readonly>
												<?= form_error('ayah', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Nama Ibu</label>
												<input type="text" value="<?= set_value('ibu') ?>" name="ibu" class="ibu form-control" id="inputPassword4" placeholder="---Pilih Nama Balita---" readonly>
												<?= form_error('ibu', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Jenis Kelamin</label>
												<input type="text" value="<?= set_value('jk') ?>" name="jk" class="jk form-control" id="inputPassword4" placeholder="---Pilih Nama Balita---" readonly>
												<?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Tanggal Lahir</label>
												<input type="text" value="<?= set_value('tgl') ?>" name="tgl" class="tgl form-control" id="inputPassword4" placeholder="---Pilih Nama Balita---" readonly>
												<?= form_error('tgl', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
										</div>
									</div>

								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7 mb-4">
						<div class="card card-small mb-4">
							<div class="card-header border-bottom">
								<h6 class="m-0">Data Variabel Perhitungan</h6>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item p-0 px-3 pt-3">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<label>Umur Balita</label>
												<input type="number" value="<?= set_value('umur') ?>" name="umur" class="form-control" id="inputPassword4" placeholder="Masukkan Umur Balita">
												<?= form_error('umur', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<label>Berat Badan</label>
												<input type="number" value="<?= set_value('berat') ?>" name="berat" class="form-control" id="inputPassword4" placeholder="Masukkan berat Badan Balita">
												<?= form_error('berat', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<label>Tinggi Badan</label>
												<input type="number" value="<?= set_value('tinggi') ?>" name="tinggi" class="form-control" id="inputPassword4" placeholder="Masukkan Tinggi Badan Balita">
												<?= form_error('tinggi', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
										</div>

									</div>
									<button type="submit" class="btn btn-primary mb-3">Anggota Fuzifikasi</button>

								</li>
							</ul>
						</div>
					</div>
				</div>
			</form>
			<!-- End Default Light Table -->
			<!-- Default Dark Table -->
		</div>
	</section>
</div>