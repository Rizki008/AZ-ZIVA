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
						<?php
						if ($this->session->userdata('pesan')) {
							echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fa fa-check"></i> Sukses!</h5>';
							echo $this->session->userdata('pesan');
							echo '</div>';
						}
						?>
						<?php $qty = 0;
						foreach ($this->cart->contents() as $key => $value) {
							$qty = $qty + $value['qty'];
						}
						if ($qty != 0) {
						?>
							<div class="card-body">
								<?php echo form_open('data_berobat/checkout'); ?>
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>
												#
											</th>
											<th>
												Nama Obat
											</th>
											<th>
												Qty
											</th>
											<th>
												Aksi
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										foreach ($this->cart->contents() as $value) :
										?> <tr class="">
												<td>
													<?= $value['id'] ?>
												</td>
												<td>
													<?= $value['name'] ?>
												</td>
												<td>
													<?= $value['qty'] ?>
												</td>
												<td class="text-center"><a href="<?= base_url('data_berobat/delete/' . $value['rowid']) ?>" class="btn btn-danger">Delete</a></td>
											</tr>
										<?php
											$i++;
										endforeach;
										?>
									</tbody>
									<tfoot>
										<tr>
											<th>
												#
											</th>
											<th>
												Nama Obat
											</th>
											<th>
												Qty
											</th>
											<th>
												Aksi
											</th>
										</tr>
									</tfoot>
								</table>
								<?php
								$i = 1;
								foreach ($this->cart->contents() as $items) {
									echo form_hidden('qty' . $i++, $items['qty']);
								}
								$no_resep = date('Ymd') .  random_int(100, 9999);
								?>
								<input type="hidden" name="no_resep" value="<?= $no_resep ?>">
								<div class="card-footer clearfix">
									<button type="submit" class="btn btn-sm btn-info float-left">Order</button>

								</div>
								<?php
								echo form_close();
								?>
							</div>
							<!-- /.card-body -->
						<?php } ?>

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
											Id Berobat
										</th>
										<th>
											Tanggal Berobat
										</th>
										<th>
											Diagnosa
										</th>
										<th>
											Status
										</th>
										<th>
											Aksi
										</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($pesanan as $key => $value) { ?>
										<tr class="">
											<td class="py-1">
												<?= $no++ ?>
											</td>
											<td><?= $value->username ?></td>
											<td>
												<?= $value->id_berobat ?>
											</td>
											<td>
												<?= $value->tgl_berobat ?>
											</td>
											<td><?= $value->gejala ?></td>
											<td>
												<?php
												if ($value->status_berobat == '1') {
													echo '<span class="badge badge-danger">Periksa</span>';
												} else if ($value->status_berobat == '2') {
													echo '<span class="badge badge-primary">Resep Obat</span>';
												} elseif ($value->status_berobat == '3') {
													echo '<span class="badge badge-warning">Proses</span>';
												} elseif ($value->status_berobat == '4') {
													echo '<span class="badge badge-success">Selesai</span>';
												} ?>
											</td>
											<td>
												<?php
												if ($value->status_berobat == '1') { ?>
													<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#berobat<?= $value->id_berobat ?>">
														<i class="mdi mdi-cart-plus"></i> Periksa
													</button>
												<?php } else if ($value->status_berobat == '2') { ?>
													<a href="<?= base_url('data_berobat/resep_obat/' . $value->id_berobat)  ?>" class="btn btn-primary">
														<i class="mdi mdi-cart-plus"></i> Resep Obat
													</a>
												<?php } elseif ($value->status_berobat == '3') { ?>
													<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#selesai<?= $value->id_berobat ?>">
														Selesai
													</button>
												<?php } elseif ($value->status_berobat == '4') { ?>
													<button type="button" class="btn btn-success" data-toggle="modal" data-target="#detail<?= $value->id_berobat ?>">
														Detail Pasien
													</button>
												<?php } ?>
											</td>
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
											Id Berobat
										</th>
										<th>
											Tanggal Berobat
										</th>
										<th>
											Diagnosa
										</th>
										<th>
											Status
										</th>
										<th>
											Aksi
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

<!-- /.modal resep -->
<?php foreach ($berobat as $key => $value) { ?>
	<div class="modal fade" id="berobat<?= $value->id_berobat ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Data Resep Obat</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('data_berobat/update/' . $value->id_berobat);
					?>
					<div class="form-group">
						<label>Nama Dokter</label>
						<input type="text" name="username" value="<?= $value->username ?>" class="form-control" placeholder="Nama Pasien" readonly>
					</div>
					<div class="form-group">
						<label>Keluhan</label>
						<input type="text" name="keluhan" value="<?= $value->keluhan ?>" class="form-control" placeholder="Nama Pasien" readonly>
					</div>
					<div class="form-group">
						<label>Nama Dokter</label>
						<input type="text" name="username" value="<?= $this->session->userdata('username'); ?>" class="form-control" placeholder="Nama User" readonly>
					</div>
					<div class="form-group">
						<label>Diagnosa</label>
						<input type="text" name="gejala" value="<?= $value->gejala ?>" class="form-control" placeholder="Nama User" required>
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

<?php foreach ($berobat as $key => $value) { ?>
	<div class="modal fade" id="detail<?= $value->id_berobat ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Data Resep Obat</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('data_berobat/update/' . $value->id_berobat);
					?>
					<div class="form-group">
						<label>Nama Dokter</label>
						<input type="text" name="username" value="<?= $this->session->userdata('username'); ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Nama Pasien</label>
						<input type="text" name="username" value="<?= $value->username ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Usia</label>
						<input type="text" name="usia" value="<?= $value->usia ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Diagnosa</label>
						<input type="text" name="gejala" value="<?= $value->gejala ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Datang Berobat</label>
						<input type="number" name="berobat" value="<?= $value->berobat ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" value="<?= $value->alamat ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Nama Obat</label>
						<textarea class="form-control" rows="3" placeholder="Enter ..." readonly><?= $value->nama_obat ?> | <?= $value->dosis ?></textarea>
					</div>

				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>
<?php } ?>

<?php
foreach ($pesanan as $key => $value) {
	echo form_open('data_berobat/selesai/' . $value->id_berobat)
?>
	<div class="modal fade" id="selesai<?= $value->id_berobat ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Pesanan Diterima</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Apakah Pesanan <strong><?= $value->username ?></strong> Sudah Diterima?</p>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php
	echo form_close();
}
?>