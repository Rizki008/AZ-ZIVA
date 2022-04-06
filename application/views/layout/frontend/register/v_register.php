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
				<p class="d-inline-block border rounded-pill py-1 px-4">Klinik Az-Ziva</p>
				<h1 class="mb-4">Tentang Kami</h1>
				<p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
				<div class="bg-light rounded d-flex align-items-center p-5 mb-4">
					<div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
						<i class="fa fa-phone-alt text-primary"></i>
					</div>
					<div class="ms-4">
						<p class="mb-2">Kontak Darurat</p>
						<h5 class="mb-0">+012 345 6789</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="bg-light rounded h-100 d-flex align-items-center p-5">
					<?php
					echo validation_errors('<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

					if ($this->session->flashdata('pesan')) {
						echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Sukses</h5>';
						echo $this->session->flashdata('pesan');
						echo '</div>';
					}
					echo form_open('pasien/register');
					$no_berobat = date('Ymd') . strtoupper(random_string('alnum', 5)); ?>
					<div class="row g-3">
						<div class="col-12 col-sm-6">
							<input type="text" name="nama_pasien" value="<?= set_value('nama_pasien') ?>" class="form-control border-0" placeholder="Nama Lengkap" style="height: 55px;" required>
						</div>
						<div class="col-12 col-sm-6">
							<input type="text" name="username" value="<?= set_value('username') ?>" class="form-control border-0" placeholder="Username" style="height: 55px;" required>
						</div>
						<div class="col-12 col-sm-6">
							<input type="password" name="password" value="<?= set_value('password') ?>" class="form-control border-0" placeholder="Password" style="height: 55px;" required>
						</div>

						<div class="col-12 col-sm-6">
							<select class="form-select border-0" style="height: 55px;" name="jenis_kl">
								<option selected>Jenis Kelamin</option>
								<option value="1">Laki-laki</option>
								<option value="2">Perempuan</option>
							</select>
						</div>
						<div class="col-12 col-sm-6">
							<input type="number" name="usia" value="<?= set_value('usia') ?>" class="form-control border-0" placeholder="Usia" style="height: 55px;" required>
						</div>
						<div class="col-12 col-sm-6">
							<select class="form-select border-0" style="height: 55px;" name="bpjs">
								<option selected>---BPJS---</option>
								<option value="1">BPJS</option>
								<option value="2">Non BPJS</option>
							</select>
						</div>
						<div class="col-12 col-sm-6">
							<input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control border-0" placeholder="Alamat" style="height: 55px;" required>
						</div>
						<input name="no_berobat" value="<?= $no_berobat ?>" hidden>
						<div class="col-12">
							<button class="btn btn-primary w-100 py-3" type="submit">Registrasi</button>
						</div>
						<div class="col-12">
							<a href="<?= base_url('pasien/login') ?>" class="btn btn-primary w-100 py-3">Login</a>
						</div>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Appointment End -->
