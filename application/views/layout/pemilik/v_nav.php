<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item">
			<a class="nav-link <?php if (
									$this->uri->segment(1) == 'pemilik' and $this->uri->segment(2) == " "
								) {
									echo "active";
								} ?>" href="<?= base_url('pemilik') ?>">
				<i class="typcn typcn-device-desktop menu-icon"></i>
				<span class="menu-title">Dashboard</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#form-elements-tari" aria-expanded="false" aria-controls="form-elements">
				<i class="typcn typcn-business-card menu-icon"></i>
				<span class="menu-title">Data Pasien</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="form-elements-tari">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link <?php if ($this->uri->segment(1) == 'bpjs') {
																echo "active";
															} ?>" href="<?= base_url('obat/bpjs') ?>">BPJS</a></li>
					<li class="nav-item"><a class="nav-link <?php if ($this->uri->segment(1) == 'non_bpjs') {
																echo "active";
															} ?>" href="<?= base_url('obat/non_bpjs') ?>">Non BPJS</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('auth/logout_user') ?>">
				<i class="typcn typcn-arrow-back menu-icon"></i>
				<span class="menu-title">Logout</span>
			</a>
		</li>
	</ul>
</nav>
