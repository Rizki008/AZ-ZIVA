<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container py-5">
		<h1 class="display-3 text-white mb-3 animated slideInDown">Appointment</h1>
		<nav aria-label="breadcrumb animated slideInDown">
			<ol class="breadcrumb text-uppercase mb-0">
				<li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
				<li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
				<li class="breadcrumb-item text-primary active" aria-current="page">Appointment</li>
			</ol>
		</nav>
	</div>
</div>
<!-- Page Header End -->


<!-- Appointment Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="row g-5">
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
				<p class="d-inline-block border rounded-pill py-1 px-4">Form Daftar Berobat</p>
				<h1 class="mb-4">Silahkan Buat Janji untuk Mengunjungi Dokter Kami</h1>
				<p class="mb-4">
					<center><b>INFORMASI </b></center><br>
					Batas Maksimal Berobat 20 Antrian setiap Jam Operasional. <br>
					Berikut Merupkan Jam Operasional Pelayanan Klinik Az-Ziva : <br>
					PAGI : 07:00 - 10:00 <br>
					SORE : 15:30 - 19:00 <br>
					Jika Sudah mencapai Kapasitas antrian, silahkan Lakukan Daftar Ulang di Jam Operasional Selanjutnya!! Terimakasih
				</p>
				<p>Antrian : <strong class="waktu"></strong> <span class="alert text-danger"></span></p>
				<!-- <p>No Antrian <?php if ($total_daftar == 20) { ?>
				<p style="color: blue;">Antrian Sudah penuh Silahkan Kembali Nanti Sore </p>
			<?php } else { ?>
				<span style="color:blue"><?= $total_daftar ?></span></p>
			<?php } ?> -->
				<?php
				if ($this->session->userdata('error')) {
				?>
					<div class="alert alert-danger alert-dismissible">
						<h5><i class="icon fas fa-ban"></i> Alert!</h5>
						<?= $this->session->userdata('error') ?>
					</div>
				<?php
				}
				?>

			</div>

			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="bg-light rounded h-100 d-flex align-items-center p-5">
					<!-- <?php
							$date = date('Y-m-d');
							$waktu = 1;
							$antrian = $this->m_pasien->cek_antrian($date, $waktu);
							if ($antrian) {
								$no = $antrian->no_antrian + 1;
							} else {
								$no = 1;
							}
							?> -->
					<form action="<?= base_url('pasien/berobat_baru') ?>" method="POST">
						<div class="row g-3">
							<div class="col-12 col-sm-6">
								<label for="">Tanggal Berobat</label>
								<input type="date" name="tgl_berobat" value="<?= $date ?>" class="form-control border-0" placeholder="Tanggal Berobat" readonly style="height: 55px;">
							</div>
							<div class="col-12 col-sm-6">
								<label for="">ID Berobat</label>
								<input type="text" name="no_berobat" value="<?= $this->session->userdata('no_berobat') ?>" class="form-control border-0" readonly style="height: 55px;">
							</div>
							<div class="col-12 col-sm-6">
								<label for="">Nama</label>
								<input type="text" name="no_antrian" value="<?= $this->session->userdata('nama_pasien') ?>" class="form-control border-0" readonly style="height: 55px;">
							</div>
							<div class="col-12 col-sm-6">
								<label for="">No Antrian</label>
								<!-- value="<?= $no ?>" -->
								<input type="number" name="no_antrian" class="antrian_sel form-control border-0" readonly style="height: 55px;">
							</div>
							<div class="col-12 col-sm-6">
								<label for="">Keluhan</label>
								<input type="text" name="keluhan" value="<?= set_value('keluhan') ?>" class="form-control border-0" style="height: 55px;">
							</div>

							<div class="col-12 col-sm-6">
								<label for="">Waktu Berobat</label>
								<?php
								$waktu = 0;
								$waktu2 = 0;
								$alert = '';
								$alert2 = '';
								$antrian_pagi = 0;
								$antrian_sore = 0;
								foreach ($waktu_cek as $key => $value) {
									if ($value->waktu == '1') {
										$waktu = $value->jml;
										$antrian_pagi = $waktu + 1;
										if ($waktu >= 20) {
											$alert = "Antrian Sudah Penuh! Silahkan Lakukan Pendaftaran kembali pada jam operasional selanjutnya";
										}
									} else {
										$waktu2 = $value->jml;
										$antrian_sore = 1 + $waktu2;
										if ($waktu2 >= 20) {
											$alert2 = "Antrian Sudah Penuh! Silahkan Lakukan Pendaftaran kembali pada jam operasional selanjutnya";
										}
									}
								}
								?>
								<select name="waktu_cek" id="waktu" class="form-control border-0" style="height: 55px;">
									<option>---Pilih Waktu Berobat---</option>
									<option value="1" data-sel="<?= $antrian_pagi ?>" data-alert="<?= $alert ?>" data-waktu="<?= $waktu ?>">Pagi</option>
									<option value="2" data-sel="<?= $antrian_sore ?>" data-alert="<?= $alert2 ?>" data-waktu="<?= $waktu2 ?>">Sore</option>
								</select>
							</div>
							<div class="col-12">
								<button class="btn btn-primary w-100 py-3" type="submit">Daftar Berobat</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Appointment End -->