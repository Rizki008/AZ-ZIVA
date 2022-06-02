<div class="content-wrapper">
	<h3 class="page-heading mb-4"><?= $title ?></h3>

	<div class="row mb-2">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title mb-4"><?= $title ?></h5>
					<div class="table-responsive">
						<table class="table center-aligned-table">
							<thead>
								<tr class="text-primary">
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
										status_berobat
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
										<td>
											<?= $value->id_berobat ?>
										</td>
										<td>
											<?= $value->tgl_berobat ?>
										</td>
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
											if ($value->status_berobat == '4') { ?>
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