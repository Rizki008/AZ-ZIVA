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
				<p class="d-inline-block border rounded-pill py-1 px-4">Az-Ziva</p>
				<div class="bg-light rounded d-flex align-items-center p-5 mb-4">
					<div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
						<i class="fa fa-phone-alt text-primary"></i>
					</div>
					<div class="ms-4">
						<p class="mb-2">Kontak Darurat</p>
						<h5 class="mb-0">023 2889 2653</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
				<?php
				echo validation_errors('<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h5><i class="icon fa fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

				if ($this->session->flashdata('error')) {
					echo '<div class="alert alert-danger alert-dismissible">
						<h5><i class="icon fa fa-ban"></i> Gagal</h5>';
					echo $this->session->flashdata('error');
					echo '</div>';
				}

				if ($this->session->flashdata('pesan')) {
					echo '<div class="alert alert-success alert-dismissible">
						<h5><i class="icon fa fa-check"></i> Sukses</h5>';
					echo $this->session->flashdata('pesan');
					echo '</div>';
				}
				echo form_open('pasien/login') ?>
				<div class="bg-light rounded h-100 d-flex align-items-center p-5">

					<div class="row g-3">
						<div class="col-12 col-sm-6">
							<input type="text" name="username" value="<?= set_value('username') ?>" class="form-control border-0" placeholder="Your Name" style="height: 55px;" required>
						</div>
						<div class="col-12 col-sm-6">
							<input type="password" name="password" value="<?= set_value('password') ?>" class="form-control border-0" placeholder="Your Password" style="height: 55px;" required>
						</div>
						<div class="col-12">
							<button class="btn btn-warning w-100 py-3" type="submit">Login</button>
						</div>
						<div class="col-12">
							<a href="<?= base_url('pasien/register') ?>" class="btn btn-primary w-100 py-3">Register</a>
						</div>
					</div>

				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</div>
<!-- Appointment End -->
