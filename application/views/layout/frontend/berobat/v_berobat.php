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

			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="bg-light rounded h-100 d-flex align-items-center p-5">
					<form action="#" method="POST">
						<div class="row g-3">
							<div class="col-12 col-sm-6">
								<input type="number" class="form-control border-0" readonly placeholder="No Antrian" style="height: 55px;" hidden>
							</div>
							<div class="col-12 col-sm-6">
								<input type="date" class="form-control border-0" placeholder="Tanggal Berobat" style="height: 55px;" hidden>
							</div>
							<div class="col-12">
								<a href="<?= base_url('pasien/berobat_baru') ?>" class="btn btn-primary w-100 py-3">Daftar Berobat Hari Ini</a href="<?= base_url('pasien/berobat_baru') ?>">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Appointment End -->
