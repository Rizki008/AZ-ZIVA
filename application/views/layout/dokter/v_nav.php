<!-- partial -->
<div class="container-fluid">
	<div class="row row-offcanvas row-offcanvas-right">
		<!-- partial:partials/_sidebar.html -->
		<nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
			<div class="user-info">
				<img src="<?= base_url() ?>backend/images/face.jpg" alt="">
				<p class="name"><?= $this->session->userdata('username'); ?></p>
				<p class="designation">Asisten Dokter</p>
				<span class="online"></span>
			</div>
			<ul class="nav">
				<li class="nav-item active">
					<a class="nav-link <?php if (
											$this->uri->segment(1) == 'dokter' and $this->uri->segment(2) == " "
										) {
											echo "active";
										} ?>" href="<?= base_url('dokter') ?>">
						<img src="<?= base_url() ?>backend/images/icons/1.png" alt="">
						<span class="menu-title">Dashboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
						<img src="<?= base_url() ?>backend/images/icons/9.png" alt="">
						<span class="menu-title">Pasien Brobat<i class="fa fa-sort-down"></i></span>
					</a>
					<div class="collapse" id="sample-pages">
						<ul class="nav flex-column sub-menu">
							<!-- <li class="nav-item <?php if (
															$this->uri->segment(1) == 'dokter' and $this->uri->segment(2) == " "
														) {
															echo "active";
														} ?>">
								<a class="nav-link" href="<?= base_url('berobat') ?>">
									Pasien Booking Berobat
								</a>
							</li> -->
							<li class="nav-item">
								<a class="nav-link <?php if ($this->uri->segment(1) == 'data_berobat') {
														echo "active";
													} ?>" href="<?= base_url('data_berobat') ?>">
									Pasien Berobat
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('auth/logout_user') ?>">
						<img src="<?= base_url() ?>backend/images/icons/10.png" alt="">
						<span class="menu-title">Logout</span>
					</a>
				</li>
			</ul>
		</nav>