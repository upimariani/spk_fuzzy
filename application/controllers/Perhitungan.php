<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPerhitungan');
	}

	public function index()
	{
		$this->form_validation->set_rules('balita', 'Pilih Balita', 'required');
		$this->form_validation->set_rules('nama', 'Nama Balita', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat Balita', 'required');
		$this->form_validation->set_rules('ayah', 'Ayah Balita', 'required');
		$this->form_validation->set_rules('ibu', 'Ibu Balita', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin Balita', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Lahir Balita', 'required');
		$this->form_validation->set_rules('umur', 'Umur Balita', 'required');
		$this->form_validation->set_rules('berat', 'Berat Badan Balita', 'required');
		$this->form_validation->set_rules('tinggi', 'Tinggi Badan Balita', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'balita' => $this->mPerhitungan->balita()
			);
			$this->load->view('Layouts/head');
			$this->load->view('Layouts/navbar');
			$this->load->view('Layouts/aside');
			$this->load->view('Perhitungan/vPerhitungan', $data);
			$this->load->view('Layouts/footer');
		} else {
			$data = array(
				'jk' => $this->input->post('jk'),
				'umur' => $this->input->post('umur'),
				'berat' => $this->input->post('berat'),
				'tinggi' => $this->input->post('tinggi'),
				'nama_balita' => $this->input->post('nama'),
				'id_balita' => $this->input->post('balita')
			);
			$this->load->view('Layouts/head');
			$this->load->view('Layouts/navbar');
			$this->load->view('Layouts/aside');
			$this->load->view('Perhitungan/DataKeanggotaan', $data);
			$this->load->view('Layouts/footer');
		}
	}
	public function defuzyfikasi()
	{
		$umur = $this->input->post('umur');
		$berat = $this->input->post('berat');
		$tinggi = $this->input->post('tinggi');
		$jk = $this->input->post('jk');
		$nama_balita = $this->input->post('nama');


		$data_max = $this->input->post('data_max');
		$data_min = array();
		for ($i = 0; $i <= $data_max; $i++) {

			$data_min[] = $this->input->post('min' . $i);
			$data_gizi[] = $this->input->post('gizi' . $i);

			// echo $data_min[$i];
			// echo $data_gizi[$i];
			// echo '<br>';
		}
		// echo '<br>';
		// echo '<br>';
		$buruk_dt = array();
		$kurang_dt = array();
		$normal_dt = array();
		$lebih_dt = array();
		$obesitas_dt = array();

		for ($i = 0; $i < sizeof($data_min); $i++) {
			if ($data_gizi[$i] == 'Buruk') {
				// echo $i;
				// echo 'Buruk';
				// echo $data_min[$i];

				$buruk_dt[] = $data_min[$i];
				$max[] = max($buruk_dt);
				// echo '<br>';
			} else if ($data_gizi[$i] == 'Kurang') {
				// echo $i;
				// echo 'Kurang';
				// echo $data_min[$i];

				$kurang_dt[] = $data_min[$i];
				$max[] = max($kurang_dt);
				// echo '<br>';
			} else if ($data_gizi[$i] == 'Normal') {
				// echo $i;
				// echo 'Normal';
				// echo $data_min[$i];

				$normal_dt[] = $data_min[$i];
				$max[] = max($normal_dt);
				// echo '<br>';
			} else if ($data_gizi[$i] == 'Lebih') {
				// echo $i;
				// echo 'Lebih';
				// echo $data_min[$i];

				$lebih_dt[] = $data_min[$i];
				$max[] = max($lebih_dt);
				// echo '<br>';
			} else if ($data_gizi[$i] == 'Obesitas') {
				// echo $i;
				// echo 'Obesitas';
				// echo $data_min[$i];

				$obesitas_dt[] = $data_min[$i];
				$max[] = max($obesitas_dt);
				// echo '<br>';
			}
		}


		$data_var = array();
		$data_gizi = array();
		for ($i = 0; $i < sizeof($lebih_dt); $i++) {
			$data_gizi[] = 'Lebih';
			$data_var[] = max($lebih_dt);
		}
		for ($j = 0; $j < sizeof($obesitas_dt); $j++) {
			$data_gizi[] = 'Obesitas';
			$data_var[] = max($obesitas_dt);
			// echo '<br>';
		}
		for ($k = 0; $k < sizeof($normal_dt); $k++) {
			$data_gizi[] = 'Normal';
			$data_var[] = max($normal_dt);
			// echo '<br>';
		}
		for ($l = 0; $l < sizeof($kurang_dt); $l++) {
			$data_gizi[] = 'Kurang';
			$data_var[] = max($kurang_dt);
			// echo '<br>';
		}
		for ($m = 0; $m < sizeof($buruk_dt); $m++) {
			$data_gizi[] = 'Buruk';
			$data_var[] = max($buruk_dt);
			// echo '<br>';
		}




		// echo '<br>';
		// echo '<br>';
		// for ($i = 0; $i < sizeof($data_var); $i++) {
		// 	echo $i;
		// 	echo $data_var[$i];
		// 	echo $data_gizi[$i];
		// 	echo $i;
		// 	echo '<br>';
		// 	// echo '<br>';
		// }
		// echo '<br>';
		// $max = max($data_var);


		// $min = min($data_var);
		// echo $max;
		// echo '<br>';
		// echo $min;





		$maksimal = PHP_INT_MIN;
		for ($a = 0; $a < sizeof($data_var); $a++) {

			if ($data_var[$a] > $maksimal) {
				$maksimal = $data_var[$a];
				$gizi_maksimal = $data_gizi[$a];
			}
		}

		// echo '<br> Data Pertama Maksimal: ';
		// echo $maksimal;
		// echo $gizi_maksimal;



		// ksort($data_var);
		// $bottomThree = 1;
		// for ($y = 0; $y < $bottomThree; $y++) {
		// 	$b = $y;
		// 	echo "<br>";
		// 	$maksimal = $data_var[$y];
		// 	$gizi_maksimal = $data_gizi[$y];
		// 	// echo "<br>";
		// }


		// echo '<br> Data Terakhir: ';
		// echo $b;
		// echo $maksimal;
		// echo $gizi_maksimal;


		for ($x = 0; $x < sizeof($data_var); $x++) {
			$minimal = min($data_var);
			// $gizi_minimal = $data_gizi[$x];

			if ($minimal == $data_var[$x]) {
				$selected = $x;
				// echo 'selected' . $selected;
				$gizi_minimal = $data_gizi[$selected];
			}
		}






		// echo '<br> Data Terakhir Minimal: ';
		// echo $minimal;
		// echo $gizi_minimal;


		if ($gizi_minimal == 'Buruk') {
			if ($jk == 'L') {
				$max_gizi = '49';
			} else if ($jk == 'P') {
				$max_gizi = '48';
			}
		} else if ($gizi_minimal == 'Kurang') {
			if ($jk == 'L') {
				$max_gizi = '53';
			} else if ($jk == 'P') {
				$max_gizi = '53';
			}
		} else if ($gizi_minimal == 'Normal') {
			if ($jk == 'L') {
				$max_gizi = '70';
			} else if ($jk == 'P') {
				$max_gizi = '70';
			}
		} else if ($gizi_minimal == 'Lebih') {
			if ($jk == 'L') {
				$max_gizi = '82';
			} else if ($jk == 'P') {
				$max_gizi = '83';
			}
		} else if ($gizi_minimal == 'Obesitas') {
			if ($jk == 'L') {
				$max_gizi = '124';
			} else if ($jk == 'P') {
				$max_gizi = '123';
			}
		}

		// echo '<br>Data Status Gizi: ' . $max_gizi;
		// echo '<br>';


		//keterangan z = maksimal
		//keterangan k = minimal
		if ($gizi_maksimal == 'Buruk') {
			if ($jk == 'L') {
				$z = round((53 - (4 * $maksimal)), 3);
				$k = round((53 - (4 * $minimal)), 3);

				//perhitungan m1 
				$hasil_m1 = $maksimal * ($z * $z);
				// echo $z;



				//perhitungan m2
				$v1 = round((13.25 / 2) * ($k * $k));
				// echo '<br>';
				// echo $v1;
				$v2 = round((0.25 / 3) * ($k * $k * $k));
				// echo '<br>';
				// echo $v2;
				// echo '<br>';

				$v3 = round((13.25 / 2) * ($z * $z));
				echo '<br>';
				// echo $v3;
				$v4 = round((0.25 / 3) * ($z * $z * $z));
				// echo '<br>';
				// echo $v4;
				// echo '<br>';

				$v5 = $v1 - $v2;
				$v6 = $v3 - $v4;

				$hasil_m2 = round($v5 - $v6, 2);
				//perhitungan m3
				$hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
			} else if ($jk == 'P') {
				$z = round((53 - (5 * $maksimal)), 3);
				$k = round((53 - (5 * $minimal)), 3);

				//perhitungan m1 
				$hasil_m1 = $maksimal * ($z * $z);
				echo $z;



				//perhitungan m2
				$v1 = round((10.6 / 2) * ($k * $k));
				// echo '<br>';
				// echo $v1;
				$v2 = round((0.2 / 3) * ($k * $k * $k));
				// echo '<br>';
				// echo $v2;
				// echo '<br>';

				$v3 = round((10.6 / 2) * ($z * $z));
				// echo '<br>';
				// echo $v3;
				$v4 = round((0.2 / 3) * ($z * $z * $z));
				// echo '<br>';
				// echo $v4;
				// echo '<br>';

				$v5 = $v1 - $v2;
				$v6 = $v3 - $v4;

				$hasil_m2 = round($v5 - $v6, 2);

				//perhitungan m3
				$hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
			}
		} else if ($gizi_maksimal == 'Kurang') {
			if ($jk == 'L') {
				$z = round(70 - ($maksimal * 17), 3);
				$k = round(70 - ($minimal * 17), 3);

				//perhitungan m1 
				$hasil_m1 = $maksimal * ($z * $z);


				//perhitungan m2
				$v1 = ((4.12 / 2) * ($k * $k));
				$v2 = ((0.06 / 3) * ($k * $k * $k));

				$v3 = ((4.12 / 2) * ($z * $z));
				$v4 = ((0.06 / 3) * ($z * $z * $z));

				$v5 = $v1 - $v2;
				$v6 = $v3 - $v4;

				$hasil_m2 = round($v5 - $v6, 2);

				//perhitungan m3
				$hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
			} else if ($jk == 'P') {
				$z = round(70 - ($maksimal * 17), 3);
				$k = round(70 - ($minimal * 17), 3);

				//perhitungan m1 
				$hasil_m1 = $maksimal * ($z * $z);


				//perhitungan m2
				$v1 = ((4.12 / 2) * ($k * $k));
				$v2 = ((0.06 / 3) * ($k * $k * $k));

				$v3 = ((4.12 / 2) * ($z * $z));
				$v4 = ((0.06 / 3) * ($z * $z * $z));

				$v5 = $v1 - $v2;
				$v6 = $v3 - $v4;

				$hasil_m2 = round($v5 - $v6, 2);

				//perhitungan m3
				$hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
			}
		} else if ($gizi_maksimal == 'Normal') {
			if ($jk == 'L') {
				$z = round(82 - (12 * $maksimal), 3);
				$k = round(82 - (12 * $minimal), 3);

				//perhitungan m1 
				$hasil_m1 = $maksimal * ($z * $z);


				//perhitungan m2
				$v1 = ((6.83 / 2) * ($k * $k));
				$v2 = ((0.08 / 3) * ($k * $k * $k));

				$v3 = ((6.83 / 2) * ($z * $z));
				$v4 = ((0.08 / 3) * ($z * $z * $z));

				$v5 = $v1 - $v2;
				$v6 = $v3 - $v4;

				$hasil_m2 = round($v5 - $v6, 2);

				//perhitungan m3
				$hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
			} else if ($jk == 'P') {
				$z = round(83 - (13 * $maksimal), 3);
				$k = round(83 - (13 * $minimal), 3);

				//perhitungan m1 
				$hasil_m1 = $maksimal * ($z * $z);


				//perhitungan m2
				$v1 = ((6.38 / 2) * ($k * $k));
				$v2 = ((0.08 / 3) * ($k * $k * $k));

				$v3 = ((6.38 / 2) * ($z * $z));
				$v4 = ((0.08 / 3) * ($z * $z * $z));

				$v5 = $v1 - $v2;
				$v6 = $v3 - $v4;

				$hasil_m2 = round($v5 - $v6, 2);

				//perhitungan m3
				$hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
			}
		} else if ($gizi_maksimal == 'Lebih') {
			if ($jk == 'L') {
				$z = round(124 - ($maksimal * 42));
				$k = round(124 - ($minimal * 42));
				//perhitungan m1 
				$hasil_m1 = $maksimal * ($z * $z);

				//perhitungan m2
				$v1 = round((2.95 / 2) * ($k * $k), 3);
				$v2 = round((0.02 / 3), 3) * ($k * $k * $k);
				// $v2 = round(0.02 / 3, 3);

				$v3 = round((2.95 / 2) * ($z * $z), 3);
				$v4 = round((0.02 / 3), 3) * ($z * $z * $z);

				$v5 = $v1 - $v2;
				$v6 = $v3 - $v4;

				$hasil_m2 = round($v5 - $v6, 3);

				//perhitungan m3
				$hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
				// $hasil_m3 = $max_gizi;
			} else if ($jk == 'P') {
				$z = round(123 - ($maksimal * 40));
				$k = round(123 - ($minimal * 40));
				//perhitungan m1 
				$hasil_m1 = $maksimal * ($z * $z);

				//perhitungan m2
				$v1 = ((3.07 / 2) * ($k * $k));
				$v2 = ((0.03 / 3) * ($k * $k * $k));

				$v3 = ((3.07 / 2) * ($z * $z));
				$v4 = ((0.03 / 3) * ($z * $z * $z));

				$v5 = $v1 - $v2;
				$v6 = $v3 - $v4;

				$hasil_m2 = round($v5 - $v6, 2);

				//perhitungan m3
				$hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
			}
		} else if ($gizi_maksimal == 'Obesitas') {
			if ($jk == 'L') {
				$z = round(82 + ($maksimal * 42), 3);
				$k = round(82 + ($minimal * 42), 3);

				//perhitungan m1 
				$hasil_m1 = $maksimal * ($z * $z);

				//perhitungan m2
				$v1 = ((0.02 / 2) * ($k * $k));
				$v2 = ((1.95 / 3) * ($k * $k * $k));

				$v3 = ((0.02 / 2) * ($z * $z));
				$v4 = ((1.95 / 3) * ($z * $z * $z));

				$v5 = $v1 - $v2;
				$v6 = $v3 - $v4;

				$hasil_m2 = $v5 - $v6;

				//perhitungan m3
				$hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
			} else if ($jk == 'P') {
				$z = round(83 + ($maksimal * 40), 3);
				$k = round(83 + ($minimal * 40), 3);

				//perhitungan m1 
				$hasil_m1 = $maksimal * ($z * $z);

				//perhitungan m2
				$v1 = ((0.03 / 2) * ($k * $k));
				$v2 = ((2.08 / 3) * ($k * $k * $k));

				$v3 = ((0.03 / 2) * ($z * $z));
				$v4 = ((2.08 / 3) * ($z * $z * $z));

				$v5 = $v1 - $v2;
				$v6 = $v3 - $v4;

				$hasil_m2 = round($v5 - $v6, 2);

				//perhitungan m3
				$hasil_m3 = ($minimal * ($max_gizi * $max_gizi)) - ($minimal * ($k * $k));
			}
		}


		//perhitungan luas
		$a1 = $z * $maksimal;
		$a2 = (($maksimal + $minimal) * ($k - $z)) / 2;
		$a3 = ($max_gizi - $k) * $minimal;
		// echo '<br>';
		// echo 'Nilai Maks ' . $z;
		// echo '<br>';
		// echo 'Nilai Min ' . $k;
		// echo '<br>';
		// echo 'Nilai Maksimal ' . $maksimal;
		// echo '<br>';
		// echo 'Nilai Minimal ' . $minimal;
		// echo '<br>';
		// echo '<br>';
		// echo '<br>Hasil M1: ' . $hasil_m1;
		// echo '<br> Hasil M2: ' . $hasil_m2;
		// echo '<br> Hasil M3: ' . $hasil_m3;
		// echo '<br>';
		// echo '<br>';
		// echo '<br> Hasil A1: ' . $a1;
		// echo '<br> Hasil A2: ' . $a2;
		// echo '<br> Hasil A3: ' . $a3;


		//titik pusat
		$jml_momen = $hasil_m1 + $hasil_m2 + $hasil_m3;
		$jml_luas = $a1 + $a2 + $a3;
		$titik_pusat = round($jml_momen / $jml_luas);
		// echo '<h1>Hasil : ' . $titik_pusat . '</h1>';

		if ($jk == 'P') {
			if ($titik_pusat <= 48) {
				$status_gizi = 'Gizi Buruk';
			} else if ($titik_pusat >= 49 && $titik_pusat <= 53) {
				$status_gizi = 'Gizi Kurang';
			} else if ($titik_pusat >= 54 && $titik_pusat <= 70) {
				$status_gizi = 'Gizi Normal';
			} else if ($titik_pusat >= 71 && $titik_pusat <= 83) {
				$status_gizi = 'Gizi Lebih';
			} else if ($titik_pusat >= 83 && $titik_pusat <= 123) {
				$status_gizi = 'Gizi Obesitas';
			} else {
				$status_gizi = 'Gizi Buruk';
			}
		} else if ($jk == 'L') {
			if ($titik_pusat <= 49) {
				$status_gizi = 'Gizi Buruk';
			} else if ($titik_pusat >= 50 && $titik_pusat <= 53) {
				$status_gizi = 'Gizi Kurang';
			} else if ($titik_pusat >= 54 && $titik_pusat <= 70) {
				$status_gizi = 'Gizi Normal';
			} else if ($titik_pusat >= 71 && $titik_pusat <= 82) {
				$status_gizi = 'Gizi Lebih';
			} else if ($titik_pusat >= 83 && $titik_pusat <= 124) {
				$status_gizi = 'Gizi Obesitas';
			} else {
				$status_gizi = 'Gizi Buruk';
			}
		}
		// echo '<h1>Hasil Status Gizi: ' . $status_gizi . '</h1>';

		$data = array(
			'z' => $z,
			'k' => $k,
			'v1' => $v5,
			'v2' => $v6,
			// 'v3' => $v3,
			// 'v4' => $v4,
			'nilai_maks' => $maksimal,
			'gizi_maks' => $gizi_maksimal,
			'nilai_min' => $minimal,
			'gizi_min' => $gizi_minimal,
			'm1' => $hasil_m1,
			'm2' => $hasil_m2,
			'm3' => $hasil_m3,
			'a1' => $a1,
			'a2' => $a2,
			'a3' => $a3,
			'jml_momen' => $jml_momen,
			'jml_luas' => $jml_luas,
			'titik_pusat' => $titik_pusat,
			'status_gizi' => $status_gizi,
			'umur' => $umur,
			'berat' => $berat,
			'tinggi' => $tinggi,
			'jk' => $jk,
			'nama' => $nama_balita,
			'id_balita' => $this->input->post('id_balita')
		);
		$this->load->view('Layouts/head');
		$this->load->view('Layouts/navbar');
		$this->load->view('Layouts/aside');
		$this->load->view('Perhitungan/HasilMamdani', $data);
		$this->load->view('Layouts/footer');
	}
	public function addperhitungan()
	{
		$id = $this->input->post('id_balita');
		$date = date('Y-m-d');
		$pecah_tgl = explode("-", $date);
		$thn = $pecah_tgl[0];
		$bln = $pecah_tgl[1];
		$cek = $this->mPerhitungan->cek_peritungan($id, $bln, $thn);
		if ($cek) {
			$this->session->set_flashdata('error', 'Perhitungan Data Balita Sudah Terlampir!');
			$data = array(
				'balita' => $this->mPerhitungan->balita(),
				'id_balita' => $this->input->post('id_balita'),
				'tgl_periksa' => $this->input->post('tgl'),
				'umur' => $this->input->post('umur'),
				'bb' => $this->input->post('bb'),
				'tb' => $this->input->post('tb'),
				'm1' => $this->input->post('m1'),
				'm2' => $this->input->post('m2'),
				'm3' => $this->input->post('m3'),
				'a1' => $this->input->post('a1'),
				'a2' => $this->input->post('a2'),
				'a3' => $this->input->post('a3'),
				'titik_pusat' => $this->input->post('titik_pusat'),
				'status_gizi' => $this->input->post('status_gizi')
			);
			$this->load->view('Layouts/head');
			$this->load->view('Layouts/navbar');
			$this->load->view('Layouts/aside');
			$this->load->view('Perhitungan/vPerhitungan', $data);
			$this->load->view('Layouts/footer');
		} else {
			$data = array(
				'id_balita' => $this->input->post('id_balita'),
				'tgl_periksa' => $this->input->post('tgl'),
				'umur' => $this->input->post('umur'),
				'bb' => $this->input->post('bb'),
				'tb' => $this->input->post('tb'),
				'm1' => $this->input->post('m1'),
				'm2' => $this->input->post('m2'),
				'm3' => $this->input->post('m3'),
				'a1' => $this->input->post('a1'),
				'a2' => $this->input->post('a2'),
				'a3' => $this->input->post('a3'),
				'titik_pusat' => $this->input->post('titik_pusat'),
				'status_gizi' => $this->input->post('status_gizi')
			);
			$this->mPerhitungan->insert_perhitungan($data);
			$this->session->set_flashdata('success', 'Data Hasil Perhitungan Berhasil Disimpan!');
			redirect('Balita/detail_pemeriksaan/' . $data['id_balita']);
		}
	}
	public function update_hasil()
	{
		$cek_tgl = $this->input->post('cek_tgl_periksa');
		$data = array(
			'id_balita' => $this->input->post('id_balita'),
			'tgl_periksa' => $this->input->post('tgl_periksa'),
			'umur' => $this->input->post('umur'),
			'bb' => $this->input->post('bb'),
			'tb' => $this->input->post('tb'),
			'm1' => $this->input->post('m1'),
			'm2' => $this->input->post('m2'),
			'm3' => $this->input->post('m3'),
			'a1' => $this->input->post('a1'),
			'a2' => $this->input->post('a2'),
			'a3' => $this->input->post('a3'),
			'titik_pusat' => $this->input->post('titik_pusat'),
			'status_gizi' => $this->input->post('status_gizi')
		);
		$this->mPerhitungan->update_hasil($data['id_balita'], $cek_tgl, $data);
		$this->session->set_flashdata('success', 'Data Hasil Perhitungan Berhasil Diupdate!');
		redirect('Balita/detail_pemeriksaan/' . $data['id_balita']);
	}
}

/* End of file Perhitungan.php */
