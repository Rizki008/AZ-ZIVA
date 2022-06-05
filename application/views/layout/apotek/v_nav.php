<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-lime">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link navbar-success">
		<img src="<?= base_url() ?>template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Az-Ziva</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url() ?>template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="<?= base_url('apotek') ?>" class="d-block"><?= $this->session->userdata('username'); ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item has-treeview menu-open">
					<a class="nav-link <?php if (
											$this->uri->segment(1) == 'apotek' and $this->uri->segment(2) == " "
										) {
											echo "active";
										} ?>" href="<?= base_url('apotek') ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if ($this->uri->segment(1) == "apotek/resep_pasien") {
											echo "active";
										} ?>" href="<?= base_url('apotek/resep_pasien') ?>">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Resep Pasien
						</p>
					</a>
				</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tree"></i>
						<p>
							Kelola Obat
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a class="nav-link  <?php if ($this->uri->segment(1) == 'berobat') {
													echo "active";
												} ?>">
								<a class="nav-link" href="<?= base_url('obat/obat_masuk') ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Data Obat Masuk</p>
								</a>
						</li>
						<li class="nav-item">
							<a class="nav-link<?php if ($this->uri->segment(1) == "obat_keluar") {
													echo "active";
												} ?>" href="<?= base_url('obat/obat_keluar') ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Data Obat Keluar</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a href="<?= base_url('auth/logout_user') ?>" class="nav-link">
						<i class="nav-icon fas fa-copy"></i>
						<p>
							Logout
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>