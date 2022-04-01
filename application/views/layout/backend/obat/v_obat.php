<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Hoverable Table</h4>
						<p class="card-description">
							<a href="<?= base_url('obat/add') ?>" class="btn btn-primary btn rounded btn fw"><i class="typcn typcn-plus"></i> Add Obat</a>
						</p>
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Obat</th>
										<th>Jenis Obat</th>
										<th>Stock</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($obat as $key => $value) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_obat ?></td>
											<?php if ($value->jenis_obat == 'tablet') { ?>
												<td><label class="badge badge-primary"><?= $value->jenis_obat ?></label></td>
											<?php } elseif ($value->jenis_obat == 'kapsul') { ?>
												<td><label class="badge badge-success"><?= $value->jenis_obat ?></label></td>
											<?php } else { ?>
												<td><label class="badge badge-warning"><?= $value->jenis_obat ?></label></td>
											<?php } ?>
											<?php if ($value->stock <= 50) { ?>
												<td class="text-danger"> <?= $value->stock ?> <i class="typcn typcn-arrow-down-thick"></i></td>
											<?php } else { ?>
												<td class="text-success"> <?= $value->stock ?> <i class="typcn typcn-arrow-up-thick"></i></td>
											<?php } ?>
											<td>
												<a href="<?= base_url('obat/edit/' . $value->id_obat) ?>" class="btn btn-warning btn-rounded btn-fw"><i class="typcn typcn-edit"></i>Edit</a>
												<button class="btn btn-danger btn-rounded btn-fw" data-toggle="modal" data-target="#delete<?= $value->id_obat ?>"><i class="typcn typcn-delete"></i>Delete</button>
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


<!-- /.modal Delete -->
<?php foreach ($obat as $key => $value) { ?>
	<div class="modal fade" id="delete<?= $value->id_obat ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Delete <?= $value->nama_obat ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<a href="<?= base_url('obat/delete/' . $value->id_obat) ?> " class="btn btn-primary">Delete</a>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php } ?>
