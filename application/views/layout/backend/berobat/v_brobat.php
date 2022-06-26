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
							<h3 class="card-title">DataTable with default features</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>
											#
										</th>
										<th>
											No Antrian
										</th>
										<th>
											Tanggal Berobat
										</th>
										<th>
											Nama Pasien
										</th>
										<th>
											Jadwal
										</th>
										<th>
											Jenis Kelamin
										</th>
										<th>
											Usia
										</th>
										<th>
											BPJS
										</th>
										<th>
											Alamat
										</th>
										<th>
											Aksi
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($berobat as $key => $value) { ?>
										<tr class="">
											<td>
												<?= $no++ ?>
											</td>
											<td>
												<label class="badge badge-success"><?= $value->no_antrian ?></label>

											</td>
											<td>
												<?= $value->tgl_berobat ?>
											</td>
											<td>
												<?= $value->username ?>
											</td>
											<td><?php if ($value->waktu == 1) { ?>
													<p>Pagi</p>
												<?php } else { ?>
													<p>Siang</p>
												<?php } ?>
											</td>
											<td>
												<?php if ($value->jenis_kl == 1) { ?>
													<p>Laki-Laki</p>
												<?php } else { ?>
													<p>Perempuan</p>
												<?php } ?>
											</td>
											<td>
												<?= $value->usia ?> thn
											</td>
											<td>
												<?php if ($value->bpjs == 1) { ?>
													<span class="badge badge-success">BPJS</span>
												<?php } elseif ($value->bpjs) { ?>
													<span class="badge badge-warning">Non BPJS</span>
												<?php } ?>
											</td>
											<td>
												<?= $value->alamat ?>
											</td>
											<td>
												<a href="<?= base_url('berobat/proses/' . $value->id_boking) ?>" class="btn btn-primary btn-sm"><i class="typcn typcn-edit"></i>Konfirmasi</a>
												<!-- <button class="btn btn-wa btn-rounded btn-fw" data-toggle="modal" data-target="#delete<?= $value->id_berobat ?>"><i class="typcn typcn-edit"></i>Konfirmasi</button> -->
											</td>
										</tr>
									<?php } ?>
								</tbody>
								<tfoot>
									<tr>
										<th>
											#
										</th>
										<th>
											No Antrian
										</th>
										<th>
											Tanggal Berobat
										</th>
										<th>
											Nama Pasien
										</th>
										<th>
											Jenis Kelamin
										</th>
										<th>
											Usia
										</th>
										<th>
											BPJS
										</th>
										<th>
											Alamat
										</th>
										<th>
											Aksi
										</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
</div>
