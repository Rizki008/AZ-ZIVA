<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Hoverable Table</h4>
						<!-- <p class="card-description">
							<button class="btn btn-primary btn rounded btn fw" data-toggle="modal" data-target="#add"><i class="typcn typcn-plus"></i>Add Obat Masuk</button>
						</p> -->
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>No Berobat</th>
										<th>Nama Pasien</th>
										<th>Jenis Kelamin</th>
										<th>Usia</th>
										<th>bpjs</th>
										<th>alamat</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($bpjs as $key => $value) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->no_berobat ?></td>
											<td><?= $value->nama_pasien ?></td>
											<td><?php if ($value->jenis_kl == 1) { ?>
													<span class="badge badge-success">Laki-Laki</span>
												<?php } elseif ($value->jenis_kl == 2) { ?>
													<span class="badge badge-success">Perempuan</span>
												<?php } ?>
											</td>
											<td><?= $value->usia ?></td>
											<td><?php if ($value->bpjs == 1) { ?>
													<span class="badge badge-success">BPJS</span>
												<?php } ?>
											</td>
											<td><?= $value->alamat ?></td>
											<!-- <td>
												<button class="btn btn-warning btn-rounded btn-fw" data-toggle="modal" data-target="#edit<?= $value->id_obat_masuk ?>"><i class="typcn typcn-edit"></i>Edit</button>
												<button class="btn btn-danger btn-rounded btn-fw" data-toggle="modal" data-target="#delete<?= $value->id_obat_masuk ?>"><i class="typcn typcn-delete"></i>Delete</button>
											</td> -->
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

<!-- 
<div class="modal fade" id="add">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Update Data Pasien</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				echo form_open('obat/add_obat_masuk');
				?>

				<div class="form-group">
					<label>Nama Obat</label>
					<input type="text" name="nama_obat" value="<?= set_value('nama_obat') ?>" class="form-control" placeholder="Nama Obat" required>
				</div>
				<div class="form-group">
					<label>Jenis Obat</label>
					<input type="text" name="jenis_obat" value="<?= set_value('jenis_obat') ?>" class="form-control" placeholder="Jenis Obat" required>
				</div>
				<div class="form-group">
					<label>Jumlah Obat</label>
					<input type="text" name="stock" value="<?= set_value('stock') ?>" class="form-control" placeholder="Stokc" required>
				</div>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<?php
			echo form_close();
			?>
		</div>
	</div>
</div>

<?php foreach ($obat_masuk as $key => $value) { ?>
	<div class="modal fade" id="edit<?= $value->id_obat_masuk ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Data Pasien</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('obat/edit_obat_masuk/' . $value->id_obat_masuk);
					?>

					<div class="form-group">
						<label>Nama Obat</label>
						<input type="text" name="nama_obat" value="<?= $value->nama_obat ?>" class="form-control" placeholder="Nama Obat" required>
					</div>
					<div class="form-group">
						<label>Jenis Obat</label>
						<input type="text" name="jenis_obat" value="<?= $value->jenis_obat ?>" class="form-control" placeholder="Jenis Obat" required>
					</div>
					<div class="form-group">
						<label>Jumlah Obat</label>
						<input type="text" name="stock" value="<?= $value->stock ?>" class="form-control" placeholder="stock" required>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>
<?php } ?>

<?php foreach ($obat_masuk as $key => $value) { ?>
	<div class="modal fade" id="delete<?= $value->id_obat_masuk ?>">
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
					<a href="<?= base_url('obat/delete_obat_masuk/' . $value->id_obat_masuk) ?> " class="btn btn-primary">Delete</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?> -->
