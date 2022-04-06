<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						<p class="card-description">

						</p>
						<?php
						if ($this->session->userdata('pesan')) {
							echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Sukses!</h5>';
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
							<div class="table-responsive pt-3">
								<?php echo form_open('data_berobat/checkout'); ?>
								<table class="table table-bordered">
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
										?>
											<tr>
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
								</table>
								<?php
								$i = 1;
								foreach ($this->cart->contents() as $items) {
									echo form_hidden('qty' . $i++, $items['qty']);
								}
								$no_resep = date('Ymd') .  random_int(100, 9999);
								?>
								<input type="hidden" name="no_resep" value="<?= $no_resep ?>">
							</div>

							<div class="card-footer clearfix">
								<button type="submit" class="btn btn-sm btn-info float-left">Order</button>

							</div>
							<?php
							echo form_close();
							?>
					</div>

				<?php } ?>
				<div class="card-body p-0">
					<ul id="list_detail_obat" class="products-list product-list-in-card pl-2 pr-2">
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data <?= $title ?></h4>
						<p class="card-description">

						</p>
						<div class="table-responsive pt-3">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>
											No
										</th>
										<th>
											Id Berobat
										</th>
										<th>
											Tanggal Berobat
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
										<tr>
											<td class="py-1">
												<?= $no++ ?>
											</td>
											<td>
												<?= $value->id_berobat ?>
											</td>
											<td>
												<?= $value->tgl_berobat ?>
											</td>
											<td>
												<?php
												if ($value->status == '1') {
													echo '<span class="badge badge-danger">Periksa</span>';
												} else if ($value->status == '2') {
													echo '<span class="badge badge-primary">Resep Obat</span>';
												} elseif ($value->status == '3') {
													echo '<span class="badge badge-warning">Proses</span>';
												} elseif ($value->status == '4') {
													echo '<span class="badge badge-success">Selesai</span>';
												} ?>
											</td>
											<td>
												<?php
												if ($value->status == '1') { ?>
													<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#berobat<?= $value->id_berobat ?>">
														<i class="mdi mdi-cart-plus"></i> Periksa
													</button>
												<?php } else if ($value->status == '2') { ?>
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update">
														<i class="mdi mdi-cart-plus"></i> Resep Obat
													</button>
												<?php } elseif ($value->status == '3') { ?>
													<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#selesai<?= $value->id_berobat ?>">
														Selesai
													</button>
												<?php } elseif ($value->status == '4') { ?>
													<button type="button" class="btn btn-success" data-toggle="modal" data-target="#detail<?= $value->id_berobat ?>">
														Detail Pasien
													</button>
												<?php } ?>
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



<!-- /.modal resep -->
<?php echo form_open('data_berobat/pesan') ?>
<div class="modal fade" id="update">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Update Data Resep Obat</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Nama Obat</label>
					<input type="hidden" name="name" class="name">
					<input type="hidden" name="jenis_obat" class="form-control">
					<select name="id" id="pesan_obat" class="form-control">
						<option>---Pilih Resep Obat---</option>
						<?php foreach ($obat as $key => $value) { ?>
							<option value="<?= $value->id_obat_masuk ?>" data-name=<?= $value->nama_obat ?>><?= $value->nama_obat ?></option>
						<?php } ?>
					</select>
				</div>
				<input type="hidden" name="nama" class="nama form-control">
				<div class="form-group">
					<label>Jumlah Obat</label>
					<input type="text" name="qty" class="form-control" placeholder="Enter ..." required>
				</div>

			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php
echo form_close();
?>
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
						<input type="text" name="nama_dokter" value="<?= $value->nama_dokter ?>" class="form-control" placeholder="Nama User" required>
					</div>
					<div class="form-group">
						<label>Gejala</label>
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
						<input type="text" name="nama_dokter" value="<?= $value->nama_dokter ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Nama Pasien</label>
						<input type="text" name="username" value="<?= $value->username ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<input type="text" name="jenis_kl" value="<?= $value->jenis_kl ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Usia</label>
						<input type="text" name="usia" value="<?= $value->usia ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>BPJS</label>
						<input type="text" name="bpjs" value="<?= $value->bpjs ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Gejala</label>
						<input type="text" name="gejala" value="<?= $value->gejala ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Datang Berobat</label>
						<input type="number" name="datang" value="<?= $value->datang ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" value="<?= $value->alamat ?>" class="form-control" placeholder="Nama User" disabled>
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
					<p>Apakah Pesanan <strong><?= $value->id_berobat ?></strong> Sudah Diterima?</p>
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
