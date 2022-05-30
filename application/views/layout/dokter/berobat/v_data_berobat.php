<div class="content-wrapper">
	<h3 class="page-heading mb-4">Bootstrap Tables</h3>
	<div class="row mb-2">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title mb-4">Advanced Table</h5>
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
						<div class="table-responsive">
							<?php echo form_open('data_berobat/checkout'); ?>
							<table class="table center-aligned-table">
								<thead>
									<tr class="text-primary">
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
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row mb-2">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title mb-4">Advanced Table</h5>
					<div class="table-responsive">
						<table class="table center-aligned-table">
							<thead>
								<tr class="text-primary">
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
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update">
													<i class="mdi mdi-cart-plus"></i> Resep Obat
												</button>
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
						</table>
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
						<label>Jenis Kelamin</label>
						<?php if ($value->jenis_kl == 1) { ?>
							<input type="text" class="form-control" placeholder="Laki-Laki" disabled>
						<?php } elseif ($value->bpjs == 2) { ?>
							<input type="text" class="form-control" placeholder="Perempuan" disabled>
						<?php } ?>
					</div>
					<div class="form-group">
						<label>Usia</label>
						<input type="text" name="usia" value="<?= $value->usia ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>BPJS</label>
						<?php if ($value->bpjs == 1) { ?>
							<input type="text" class="form-control" placeholder="BPJS" disabled>
						<?php } elseif ($value->bpjs == 2) { ?>
							<input type="text" class="form-control" placeholder="Non BPJS" disabled>
						<?php } ?>
					</div>
					<div class="form-group">
						<label>Gejala</label>
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
						<input type="text" name="nama_obat" value="<?= $value->nama_obat ?>" class="form-control" placeholder="Nama User" disabled>
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