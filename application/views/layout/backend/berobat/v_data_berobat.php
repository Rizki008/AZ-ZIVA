<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						<p class="card-description">
						</p>
						<div class="table-responsive pt-3">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>
											#
										</th>
										<th>
											No Antrian
										</th>
										<th>
											Tanggal Berobat
										</th>
										<th>
											Nama Pasien
										</th>
										<th>
											Jenis Kelamin
										</th>
										<th>
											Usia
										</th>
										<th>
											BPJS
										</th>
										<th>
											Alamat
										</th>
										<th>
											Aksi
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($pasien_berobat as $key => $value) { ?>
										<tr>
											<td>
												<?= $no++ ?>
											</td>
											<td>
												<?= $value->no_antrian ?>
											</td>
											<td>
												<?= $value->tgl_berobat ?>
											</td>
											<td>
												<?= $value->username ?>
											</td>
											<td>
												<?= $value->jenis_kl ?>
											</td>
											<td>
												<?= $value->usia ?> thn
											</td>
											<td>
												<?= $value->bpjs ?>
											</td>
											<td>
												<?= $value->alamat ?>
											</td>
											<td>
												<button class="btn btn-success btn-rounded btn-fw" data-toggle="modal" data-target="#update<?= $value->id_berobat ?>"><i class="typcn typcn-delete"></i>Periksa</button>
												<a href="<?= base_url('berobat/resep_obat') ?>" class="btn btn-success btn-rounded btn-fw"><i class="typcn typcn-delete"></i>Resep Obat</a>
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


<!-- /.modal Edit -->
<?php foreach ($pasien_berobat as $key => $value) { ?>
	<div class="modal fade" id="update<?= $value->id_berobat ?>">
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
					echo form_open('berobat/update/' . $value->id_berobat);
					?>

					<div class="form-group">
						<label>Nama Pasien</label>
						<input type="text" name="username" value="<?= $value->username ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Nama Dokter</label>
						<input type="text" name="nama_dokter" value="<?= $value->nama_dokter ?>" class="form-control" placeholder="Nama User" required>
					</div>
					<div class="form-group">
						<label>Gejala</label>
						<input type="text" name="nama_penyakit" value="<?= $value->nama_penyakit ?>" class="form-control" placeholder="Nama User" required>
					</div>
					<div class="form-group">
						<label>Datang Berobat</label>
						<input type="number" name="berobat" value="<?= $value->berobat ?>" class="form-control" placeholder="Nama User" required>
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
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php } ?>
