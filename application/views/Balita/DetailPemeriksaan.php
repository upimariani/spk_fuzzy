<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Detail Pemeriksaan Balita</h1>
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
							<h3 class="card-title">Informasi Pemeriksaan Status Gizi</h3>
						</div>
						<!-- /.card-header -->

						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Tanggal Pemeriksaan</th>
										<th>Variabel M1</th>
										<th>Variabel M2</th>
										<th>Variabel M3</th>
										<th>Variabel A1</th>
										<th>Variabel A2</th>
										<th>Variabel A3</th>
										<th>Titik Pusat</th>
										<th>Status Gizi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($lap_status_gizi as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->tgl_periksa ?></td>
											<td><?= $value->m1 ?></td>
											<td><?= $value->m2 ?></td>
											<td><?= $value->m3 ?></td>
											<td><?= $value->a1 ?></td>
											<td><?= $value->a2 ?></td>
											<td><?= $value->a3 ?></td>
											<td><?= $value->titik_pusat ?></td>
											<td><?= $value->status_gizi ?></td>
										</tr>
									<?php
									}
									?>

								</tbody>
								<tfoot>
									<tr>
										<th>#</th>
										<th>Tanggal Pemeriksaan</th>
										<th>Variabel M1</th>
										<th>Variabel M2</th>
										<th>Variabel M3</th>
										<th>Variabel A1</th>
										<th>Variabel A2</th>
										<th>Variabel A3</th>
										<th>Titik Pusat</th>
										<th>Status Gizi</th>
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
