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
				<p class="d-inline-block border rounded-pill py-1 px-4">Daftar Berobat</p>
				<h1 class="mb-4">Buat Janji untuk Mengunjungi Dokter Kami</h1>
				<p class="mb-4">batas maksimal berobat 20 orang untuk jam operasional <br>
					pagi : 10:00 <br>
					sore : 15:00-19:00</p>
			</div>
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="bg-light rounded h-100 d-flex align-items-center p-5">
					<?php
					$date = date('Y-m-d');
					$waktu = 1;
					$antrian = $this->m_pasien->cek_antrian($date, $waktu);
					if ($antrian) {
						$no = $antrian->no_antrian + 1;
					} else {
						$no = 1;
					}
					?>
					<form action="<?= base_url('pasien/berobat_baru') ?>" method="POST">
						<div class="row g-3">
							<div class="col-12 col-sm-6">
								<label for="">No Berobat</label>
								<input type="text" name="no_berobat" value="<?= $this->session->userdata('no_berobat') ?>" class="form-control border-0" readonly style="height: 55px;">
							</div>
							<div class="col-12 col-sm-6">
								<label for="">Nama</label>
								<input type="text" name="no_antrian" value="<?= $this->session->userdata('nama_pasien') ?>" class="form-control border-0" readonly style="height: 55px;">
							</div>
							<div class="col-12 col-sm-6">
								<label for="">No Antrian</label>
								<input type="number" name="no_antrian" value="<?= $no ?>" class="form-control border-0" readonly style="height: 55px;">
							</div>
							<div class="col-12 col-sm-6">
								<label for="">Keluhan</label>
								<input type="text" name="keluhan" value="<?= set_value('keluhan') ?>" class="form-control border-0" style="height: 55px;">
							</div>
							<div class="col-12 col-sm-6">
								<input type="date" name="tgl_berobat" value="<?= $date ?>" class="form-control border-0" placeholder="Tanggal Berobat" readonly style="height: 55px;">
							</div>
							<div class="col-12 col-sm-6">
								<select name="waktu" id="waktu" class="form-control border-0" style="height: 55px;">
									<option value="1">PAGI</option>
									<option value="2">SORE</option>
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
