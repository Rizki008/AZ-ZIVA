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
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title"><?= $title ?></h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>
											No
										</th>
										<th>
											Nama Pasien
										</th>
										<th>
											Jenis Kelamin
										</th>
										<th>
											Id Berobat
										</th>
										<th>
											No Berobat
										</th>
										<th>
											Tanggal Berobat
										</th>
										<th>
											Datang Berobat
										</th>
										<th>
											Diagnosa
										</th>
										<th>
											Gejala
										</th>
										<th>
											Usia
										</th>
										<th>
											Alamat
										</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($rekam as $key => $value) { ?>
										<tr class="">
											<td class="py-1">
												<?= $no++ ?>
											</td>
											<td><?= $value->nama_pasien ?></td>
											<td><?= $value->jenis_kl ?></td>
											<td>
												<?= $value->id_berobat ?>
											</td>
											<td>
												<?= $value->no_berobat ?>
											</td>
											<td>
												<?= $value->tgl_berobat ?>
											</td>
											<td>
												<?= $value->datang_berobat ?>
											</td>
											<td><?= $value->keluhan ?></td>
											<td><?= $value->gejala ?></td>
											<td><?= $value->usia ?></td>
											<td><?= $value->alamat ?></td>

										</tr>
									<?php } ?>
								</tbody>
								<tfoot>
									<tr>
										<th>
											No
										</th>
										<th>
											Nama Pasien
										</th>
										<th>
											Jenis Kelamin
										</th>
										<th>
											Id Berobat
										</th>
										<th>
											No Berobat
										</th>
										<th>
											Tanggal Berobat
										</th>
										<th>
											Datang Berobat
										</th>
										<th>
											Diagnosa
										</th>
										<th>
											Gejala
										</th>
										<th>
											Usia
										</th>
										<th>
											Alamat
										</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>