<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $title ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active"><?= $title ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Detail Obat Pasien</h3>
						</div>
						<div class="card-body p-0">
							<table class="table align-items-center table-flush">
								<thead class="thead-light">
									<tr>
										<th>Nama Obat</th>
										<th>Dosis</th>
										<th>Qty</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($detail as $key => $value) { ?>
										<tr>
											<td><?= $value->nama_obat ?></td>
											<td><?= $value->dosis ?></td>
											<td><?= $value->qty ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card card-secondary">
						<div class="card-header">
							<h3 class="card-title">Detail Pasien</h3>
						</div>
						<div class="card-body p-0">
							<table class="table">
								<tbody>
									<tr>
										<td>Nama Pasien</td>
										<td><?= $value->username ?></td>
									</tr>

									<tr>
										<td>Jenis Kelamin</td>
										<td><?= $value->jenis_kl ?></td>
									</tr>
									<tr>
										<td>Usia</td>
										<td><?= $value->usia ?>Thn</td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td><?= $value->alamat ?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Detail Berobat</h3>
						</div>
						<div class="card-body p-0">
							<table class="table">
								<thead>
									<tr>
										<th>ID Berobat</th>
										<th>Tanggal Berobat</th>
										<th>Datang Berobat</th>
										<th>Diagnosa</th>
										<th>Gejala</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?= $value->no_berobat ?></td>
										<td><?= $value->tgl_berobat ?></td>
										<td><?= $value->datang_berobat ?>X</td>
										<td><?= $value->keluhan ?></td>
										<td><?= $value->gejala ?></td>

									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>