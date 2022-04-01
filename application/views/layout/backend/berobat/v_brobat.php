<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						<p class="card-description">
							<a href="<?= base_url('berobat/add') ?>" class="btn btn-primary btn rounded btn fw"><i class="typcn typcn-plus"></i>Add Pasien Berobat</a>
						</p>
						<div class="table-responsive pt-3">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>
											#
										</th>
										<th>
											Nama Dokter
										</th>
										<th>
											Nama Pasien
										</th>
										<th>
											Penyakit di Derita
										</th>
										<th>
											Resep Obat
										</th>
										<th>
											Jumlah Obat
										</th>
										<th>
											Jumlah Brobat
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
										<tr>
											<td>
												<?= $no++ ?>
											</td>
											<td>
												<?= $value->nama_dokter ?>
											</td>
											<td>
												<?= $value->username ?>
											</td>
											<td>
												<?= $value->nama_penyakit ?>
											</td>
											<td>
												<?= $value->nama_obat ?>
											</td>
											<td>
												<?= $value->jml_obat ?>
											</td>
											<td>
												<?= $value->berobat ?>
											</td>
											<td>
												<a href="<?= base_url('berobat/edit/' . $value->id_berobat) ?>" class="btn btn-warning btn-rounded btn-fw"><i class="typcn typcn-edit"></i>Edit</a>
												<button class="btn btn-danger btn-rounded btn-fw" data-toggle="modal" data-target="#delete<?= $value->id_berobat ?>"><i class="typcn typcn-delete"></i>Delete</button>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
