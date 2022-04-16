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
				<p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
			</div>
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="bg-light rounded h-100 d-flex align-items-center p-5">
					<?php $antrian = $this->m_pasien->boking(); ?>
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
								<input type="number" name="no_antrian" value="<?php echo $antrian->antrian ?>" class="form-control border-0" readonly style="height: 55px;">
							</div>
							<!-- <div class="col-12 col-sm-6">
								<input type="date" name="tgl_berobat" value="<?= set_value('tgl_berobat') ?>" class="form-control border-0" placeholder="Tanggal Berobat" style="height: 55px;">
							</div> -->
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
