<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin') ?>">
				<i class="typcn typcn-device-desktop menu-icon"></i>
				<span class="menu-title">Dashboard</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
				<i class="typcn typcn-document-text menu-icon"></i>
				<span class="menu-title">Berobat</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="ui-basic">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="<?= base_url('berobat') ?>">Pasien Booking Berobat</a></li>
					<li class="nav-item"> <a class="nav-link" href="<?= base_url('data_berobat') ?>">Pasien Berobat</a></li>
					<li class="nav-item"> <a class="nav-link" href="<?= base_url('berobat/pasien_selesai_berobat') ?>">Pasien Selesai Berobat</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
				<i class="typcn typcn-film menu-icon"></i>
				<span class="menu-title">Obat</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="form-elements">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="<?= base_url('obat/obat_masuk') ?>">Data Obat Masuk</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('obat/obat_keluar') ?>">Data Obat Keluar</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('obat') ?>">Data Obat</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#form-logout" aria-expanded="false" aria-controls="form-logout">
				<i class="typcn typcn-eject"></i>
				<span class="menu-title">Obat</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="form-logout">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="<?= base_url('auth/logout_user') ?>">LogOut</a></li>
				</ul>
			</div>
		</li>
	</ul>
</nav>
