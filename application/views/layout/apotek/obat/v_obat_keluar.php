<div class="content-wrapper">
	<h3 class="page-heading mb-4">Bootstrap Tables</h3>
	<div class="row mb-2">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title mb-4">Advanced Table</h5>
					<div class="table-responsive">
						<table class="table center-aligned-table">
							<thead>
								<tr class="text-primary">
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
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


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
				echo form_open('obat/add');
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
					<input type="text" name="jml_obat" value="<?= set_value('jml_obat') ?>" class="form-control" placeholder="Stokc" required>
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
<!-- 
<?php foreach ($obat as $key => $value) { ?>
	<div class="modal fade" id="edit<?= $value->id_obat ?>">
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
					echo form_open('obat/edit/' . $value->id_obat);
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
						<input type="text" name="jml_obat" value="<?= $value->jml_obat ?>" class="form-control" placeholder="jml_obat" required>
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
		</div>
	</div>
<?php } ?> -->