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

	<section class="content">
		<div class="container-fluid">
			<!-- Default Light Table -->
			<div class="row">
				<div class="col-lg-7">
					<div class="card card-small mb-4">
						<div class="card-header border-bottom">
							<h6 class="m-0">Active Users</h6>
						</div>
						<div class="card-body p-0 pb-3">
							<table class="table mb-0">
								<thead class="bg-light">
									<tr>
										<th scope="col" class="border-0">#</th>
										<th scope="col" class="border-0">Variabel Umur</th>
										<th scope="col" class="border-0">Variabel Berat Badan</th>
										<th scope="col" class="border-0">Variabel Tinggi Badan</th>
										<th scope="col" class="border-0">Gizi</th>
										<th scope="col" class="border-0">Nilai Min</th>
									</tr>
								</thead>
								<tbody>
									<?php

									$var_umur = array();
									$var_berat = array();
									$var_tinggi = array();

									$angg_umur = array();
									$angg_berat = array();
									$angg_tinggi = array();

									// echo $jk . '<br>';
									// echo $umur . '<br>';
									// echo $berat . '<br>';
									// echo $tinggi . '<br>';

									//variabel umur
									if ($umur >= 0 && $umur <= 24) {
										$var_umur[] = 'fase 1';
										if ($umur <= 12) {
											$angg_umur[] = 1;
										} else if ($umur <= 24 && $umur > 12) {
											$angg_umur[] = (24 - $umur) / (24 - 12);
										} else if ($umur >= 24) {
											$angg_umur[] = 0;
										}
									}
									if ($umur >= 12 && $umur <= 36) {
										$var_umur[] = 'fase 2';
										if ($umur < 12 || $umur > 36) {
											$angg_umur[] = 0;
										} else if ($umur >= 12 && $umur <= 24) {
											$angg_umur[] = ($umur - 12) / (24 - 12);
										} else if (24 < $umur && $umur <= 36) {
											$angg_umur[] = (36 - $umur) / (36 - 24);
										}
									}
									if ($umur >= 24 && $umur <= 48) {
										$var_umur[] = 'fase 3';
										if ($umur < 24 || $umur > 48) {
											$angg_umur[] = 0;
										} else if (24 <= $umur && $umur <= 36) {
											$angg_umur[] = ($umur - 24) / (36 - 24);
										} else if (36 < $umur && $umur <= 48) {
											$angg_umur[] = (48 - $umur) / (48 - 36);
										}
									}
									if ($umur >= 36 && $umur <= 60) {
										$var_umur[] = 'fase 4';
										if ($umur < 36 || $umur > 48) {
											$angg_umur[] = 0;
										} else if ($umur >= 36 && $umur < 48) {
											$angg_umur[] = ($umur - 36) / (48 - 36);
										} else if (48 <= $umur && $umur <= 60) {
											$angg_umur[] = (60 - $umur) / (60 - 48);
										}
									}
									if ($umur >= 48 && $umur <= 60) {
										$var_umur[] = 'fase 5';
										if ($umur < 48) {
											$angg_umur[] = 0;
										} else if (48 <= $umur && $umur <= 60) {
											$angg_umur[] = ($umur - 48) / (60 - 48);
										} else if ($umur > 60) {
											$angg_umur[] = 1;
										}
									}

									// for ($i = 0; $i < sizeof($var_umur); $i++) {
									//     echo $var_umur[$i];
									//     echo '<br>';
									//     echo $angg_umur[$i];
									//     echo '<br>';
									// }
									// echo '<br>';

									if ($jk == 'P') {
										//variabel berat badan perempuan
										if ($berat >= 0 && $berat < 21) {
											$var_berat[] = 'ringan';
											if ($berat <= 10) {
												$angg_berat[] = 1;
											} else if (10 < $berat && $berat <= 21) {
												$angg_berat[] = (21 - $berat) / (21 - 10);
											} else if ($berat > 21) {
												$angg_berat[] = 0;
											}
										}
										if ($berat >= 10 && $berat <= 31) {
											$var_berat[] = 'sedang';
											if ($berat < 10 || $berat > 21) {
												$angg_berat[] = 0;
											} else if ($berat >= 10 && $berat <= 21) {
												$angg_berat[] = ($berat - 10) / (21 - 10);
											} else if (10 <= $berat && $berat <= 21) {
												$angg_berat[] = (31 - $berat) / (31 - 21);
											}
										}
										if ($berat > 21 && $berat <= 31) {
											$var_berat[] = 'berat';
											if ($berat < 21) {
												$angg_berat[] = 0;
											} else if (21 <= $berat && $berat <= 31) {
												$angg_berat[] = ($berat - 21) / (31 - 21);
											} else if ($berat > 31) {
												$angg_berat[] = 1;
											}
										}
										// for ($i = 0; $i < sizeof($var_berat); $i++) {
										//     echo $var_berat[$i];
										//     echo '<br>';
										//     echo $angg_berat[$i];
										//     echo '<br>';
										// }
										// echo '<br>';
										//tinggi badan perempuan

										if ($tinggi >= 0 && $tinggi < 83) {
											$var_tinggi[] = 'rendah';
											if ($tinggi < 45) {
												$angg_tinggi[] = 1;
											} else if (45 <= $tinggi && $tinggi <= 83) {
												$angg_tinggi[] = (83 - $tinggi) / (83 - 45);
											} else if ($tinggi > 83) {
												$angg_tinggi[] = 0;
											}
										}
										if ($tinggi >= 45 && $tinggi <= 120) {
											$var_tinggi[] = 'sedang';
											if ($tinggi < 45 || $tinggi > 120) {
												$angg_tinggi[] = 0;
											} else if ($tinggi >= 45 && $tinggi <= 83) {
												$angg_tinggi[] = ($tinggi - 45) / (83 - 45);
											} else if (83 < $tinggi && $tinggi <= 120) {
												$angg_tinggi[] = (120 - $tinggi) / (120 - 83);
											}
										}
										if ($tinggi > 83 && $tinggi <= 120) {
											$var_tinggi[] = 'tinggi';
											if ($tinggi < 83) {
												$angg_tinggi[] = 0;
											} else if (83 <= $tinggi && $tinggi <= 120) {
												$angg_tinggi[] = ($tinggi - 83) / (120 - 83);
											} else if ($tinggi > 120) {
												$angg_tinggi[] = 1;
											}
										}
										// for ($i = 0; $i < sizeof($var_tinggi); $i++) {
										//     echo $var_tinggi[$i];
										//     echo '<br>';
										//     echo $angg_tinggi[$i];
										//     echo '<br>';
										// }
										// echo '<br>';
									} else {
										//variabel berat badan laki-laki
										if ($berat >= 0 && $berat < 20) {
											$var_berat[] = 'ringan';
											if ($berat <= 10) {
												$angg_berat[] = 1;
											} elseif (10 < $berat && $berat <= 20) {
												$angg_berat[] = (20 - $berat) / (20 - 10);
											} elseif ($berat > 20) {
												$angg_berat[] = 0;
											}
										}
										if ($berat >= 10 && $berat <= 30) {
											$var_berat[] = 'sedang';
											if ($berat < 10 || $berat > 30) {
												$angg_berat[] = 0;
											} elseif (10 <= $berat && $berat <= 20) {
												$angg_berat[] = ($berat - 10) / (20 - 10);
											} elseif (20 < $berat && $berat <= 30) {
												$angg_berat[] = (30 - $berat) / (30 - 20);
											}
										}
										if ($berat > 20 && $berat <= 30) {
											$var_berat[] = 'berat';
											if ($berat < 20) {
												$angg_berat[] = 0;
											} else if (20 <= $berat && $berat <= 30) {
												$angg_berat[] = ($berat - 20) / (30 - 20);
											} else if ($berat > 30) {
												$angg_berat[] = 1;
											}
										}
										// for ($i = 0; $i < sizeof($var_berat); $i++) {
										//     echo $var_berat[$i];
										//     echo '<br>';
										//     echo $angg_berat[$i];
										//     echo '<br>';
										// }
										// echo '<br>';

										//tinggi badan laki laki
										if ($tinggi >= 0 && $tinggi < 83) {
											$var_tinggi[] = 'rendah';
											if ($tinggi < 45) {
												$angg_tinggi[] = 1;
											} else if (45 <= $tinggi && $tinggi <= 83) {
												$angg_tinggi[] = (83 - $tinggi) / (83 - 45);
											} else if ($tinggi > 83) {
												$angg_tinggi[] = 0;
											}
										}
										if ($tinggi >= 45 && $tinggi <= 120) {
											$var_tinggi[] = 'sedang';
											if ($tinggi < 45 || $tinggi > 120) {
												$angg_tinggi[] = 0;
											} else if (45 <= $tinggi && $tinggi <= 83) {
												$angg_tinggi[] = ($tinggi - 45) / (83 - 45);
											} else if (83 < $tinggi && $tinggi <= 120) {
												$angg_tinggi[] = (120 - $tinggi) / (120 - 83);
											}
										}
										if ($tinggi > 83 && $tinggi <= 120) {
											$var_tinggi[] = 'tinggi';
											if ($tinggi < 83) {
												$angg_tinggi[] = 0;
											} else if (83 <= $tinggi && $tinggi <= 120) {
												$angg_tinggi[] = ($tinggi - 83) / (120 - 83);
											} else if ($tinggi > 120) {
												$angg_tinggi[] = 1;
											}
										}
										// for ($i = 0; $i < sizeof($var_tinggi); $i++) {
										//     echo $var_tinggi[$i];
										//     echo '<br>';
										//     echo $angg_tinggi[$i];
										//     echo '<br>';
										// }
										// echo '<br>';
									}
									$no = 1;
									$dt_min = 1;
									$dt_gizi = 1;
									$max = 1;
									?>
									<form action="<?= base_url() ?>Perhitungan/defuzyfikasi" method="POST">
										<?php
										for ($i = 0; $i < sizeof($var_umur); $i++) {
											for ($j = 0; $j < sizeof($var_berat); $j++) {
												for ($k = 0; $k < sizeof($var_tinggi); $k++) {

													if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Lebih';
													} else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Lebih';
													} else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Normal';
													} else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 1' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Normal';
													} else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Normal';
													} else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Normal';
													} else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Lebih';
													} else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Lebih';
													} else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Lebih';
													} else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 2' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Kurang';
													} else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Kurang';
													} else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Kurang';
													} else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Lebih';
													} else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Lebih';
													} else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Lebih';
													} else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 3' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Kurang';
													} else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Kurang';
													} else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Kurang';
													} else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Normal';
													} else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Normal';
													} else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Lebih';
													} else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 4' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Lebih';
													} else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Buruk';
													} else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Buruk';
													} else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'ringan' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Buruk';
													} else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Kurang';
													} else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Kurang';
													} else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'sedang' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Kurang';
													} else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'rendah') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'sedang') {
														$gizi = 'Obesitas';
													} else if ($var_umur[$i] == 'fase 5' && $var_berat[$j] == 'berat' && $var_tinggi[$k] == 'tinggi') {
														$gizi = 'Lebih';
													}

													// echo $var_umur[$i] . '/' . $var_berat[$j] . '/' . $var_tinggi[$k] . '/' . $gizi . '<br>';
													// echo round($angg_umur[$i], 2) . '/' . round($angg_berat[$j], 2) . '/' . round($angg_tinggi[$k], 2);

													$min = min(round($angg_umur[$i], 2), round($angg_berat[$j], 2), round($angg_tinggi[$k], 2));
													// echo '<br>min' . $min . '<br><br>';

													// $array_min = array();
													// $array_min = min(round($angg_umur[$i], 2), round($angg_berat[$j], 2), round($angg_tinggi[$k], 2));

										?>
													<tr>
														<td><?= $no++ ?></td>
														<td><?= $var_umur[$i] ?> (<?= round($angg_umur[$i], 2) ?>)</td>
														<td><?= $var_berat[$j] ?> (<?= round($angg_berat[$j], 2) ?>)</td>
														<td><?= $var_tinggi[$k] ?> (<?= round($angg_tinggi[$k], 2) ?>)</td>
														<td><?= $gizi ?> <input type="hidden" name="<?= 'gizi' . $dt_gizi++ ?>" value="<?= $gizi ?>"></td>
														<td><?= $min ?> <input type="hidden" name="<?= 'min' . $dt_min++ ?>" value="<?= $min ?>"></td>
														<?php $max_min = $max++ ?>
													</tr>
										<?php
												}
											}
										}
										?>
								</tbody>
							</table>
							<input type="hidden" name="jk" value="<?= $jk ?>">
							<input type="hidden" name="data_max" value="<?= $max_min ?>">
							<input type="hidden" name="umur" value="<?= $umur ?>">
							<input type="hidden" name="berat" value="<?= $berat ?>">
							<input type="hidden" name="tinggi" value="<?= $tinggi ?>">
							<input type="hidden" name="jk" value="<?= $jk ?>">
							<input type="hidden" name="nama" value="<?= $nama_balita ?>">
							<input type="hidden" name="id_balita" value="<?= $id_balita ?>">
						</div>
						<button type="submit" class="btn btn-warning">Defuzyfikasi</button>
						</form>
					</div>
				</div>
			</div>
			<!-- End Default Light Table -->
			<!-- Default Dark Table -->
		</div>
	</section>
</div>
