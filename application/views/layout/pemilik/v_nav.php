<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-lime">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
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
				<a href="<?= base_url('pemilik') ?>" class="d-block"><?= $this->session->userdata('username'); ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item has-treeview menu-open">
					<a class="nav-link <?php if (
											$this->uri->segment(1) == 'pemilik' and $this->uri->segment(2) == " "
										) {
											echo "active";
										} ?>" href="<?= base_url('pemilik') ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<!-- <li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tree"></i>
						<p>
							Analisis Data BPJS
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a class="nav-link <?php if ($this->uri->segment(1) == 'bpjs') {
													echo "active";
												} ?>" href="<?= base_url('obat/bpjs') ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Analisis BPJS</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php if ($this->uri->segment(1) == 'non_bpjs') {
													echo "active";
												} ?>" href="<?= base_url('obat/non_bpjs') ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Analisis Non BPJS</p>
							</a>
						</li>
					</ul>
				</li> -->
				<li class="nav-item">
					<a class="nav-link <?php if (
											$this->uri->segment(1) == 'gejala'
										) {
											echo "active";
										} ?>" href="<?= base_url('pemilik/gejala') ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Analisis Gejala
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if (
											$this->uri->segment(1) == 'bpjs'
										) {
											echo "active";
										} ?>" href="<?= base_url('pemilik/bpjs') ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Analisis BPJS
						</p>
					</a>
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