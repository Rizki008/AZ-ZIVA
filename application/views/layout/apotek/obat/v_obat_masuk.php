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
							<button class="btn btn-primary btn rounded btn fw" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i>Add Obat Masuk</button>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Obat</th>
										<th>Jenis Obat</th>
										<th>stock</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($obat_masuk as $key => $value) { ?>
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
											<?php if ($value->stock <= 50) { ?>
												<td class="text-danger"> <?= $value->stock ?> <i class="typcn typcn-arrow-down-thick"></i><br>
													<span class="badge badge-danger">Segera Melakukan Penambahan Stock</span>
												</td>
											<?php } else { ?>
												<td class="text-success"> <?= $value->stock ?> <i class="typcn typcn-arrow-up-thick"></i></td>
											<?php } ?>
											<td>
												<button class="btn btn-warning btn-rounded btn-fw" data-toggle="modal" data-target="#edit<?= $value->id_obat_masuk ?>"><i class="typcn typcn-edit"></i>Edit</button>
												<button class="btn btn-danger btn-rounded btn-fw" data-toggle="modal" data-target="#delete<?= $value->id_obat_masuk ?>"><i class="typcn typcn-delete"></i>Delete</button>
											</td>
										</tr>
									<?php } ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Nama Obat</th>
										<th>Jenis Obat</th>
										<th>stock</th>
										<th>Action</th>
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
<?php } ?>