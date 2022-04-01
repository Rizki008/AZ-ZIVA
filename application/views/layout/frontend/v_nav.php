<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
	<a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
		<h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik</h1>
	</a>
	<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<div class="navbar-nav ms-auto p-4 p-lg-0">
			<a href="index.html" class="nav-item nav-link active">Home</a>
			<a href="about.html" class="nav-item nav-link">Our Doctor</a>
			<div class="nav-item dropdown">
				<?php if ($this->session->userdata('username') == "") { ?>
					<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Register/Login</a>
					<div class="dropdown-menu rounded-0 rounded-bottom m-0">
						<a href="<?= base_url('pasien/register') ?>" class="dropdown-item">Register/Login</a>
					</div>
				<?php } else { ?>
					<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?= $this->session->userdata('username'); ?></a>
					<div class="dropdown-menu rounded-0 rounded-bottom m-0">
						<a href="<?= base_url('pasien/logout') ?>" class="dropdown-item">Logout</a>
					</div>
				<?php } ?>
			</div>
		</div>
		<a href="<?= base_url('pasien/berobat') ?>" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Berobat<i class="fa fa-arrow-right ms-3"></i></a>
	</div>
</nav>
<!-- Navbar End -->
