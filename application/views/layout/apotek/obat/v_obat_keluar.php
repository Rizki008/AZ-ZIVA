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
							<!-- <button class="btn btn-primary btn rounded btn fw" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i>Add Obat Masuk</button> -->
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Obat</th>
										<th>Jenis Obat</th>
										<th>Jumlah Obat Keluar</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($obat_keluar as $key => $value) { ?>
										<tr class="">
											<td><?= $no++ ?></td>
											<td><?= $value->nama_obat ?></td>
											<?php if ($value->jenis_obat == 'tablet') { ?>
												<td><label class="badge badge-primary"><?= $value->jenis_obat ?></label></td>
											<?php } elseif ($value->jenis_obat == 'kapsul') { ?>
												<td><label class="badge badge-success"><?= $value->jenis_obat ?></label></td>
											<?php } else { ?>
												<td><label class="badge badge-warning"><?= $value->jenis_obat ?></label></td>
											<?php } ?>
											<?php if ($value->qty >= 50) { ?>
												<td class="text-danger"> <?= $value->qty ?> <i class="typcn typcn-arrow-forward-outline"></i></td>
											<?php } else { ?>
												<td class="text-warning"> <?= $value->qty ?> <i class="typcn typcn-arrow-forward-outline"></i></td>
											<?php } ?>
										</tr>
									<?php } ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Nama Obat</th>
										<th>Jenis Obat</th>
										<th>Jumlah Obat Keluar</th>
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