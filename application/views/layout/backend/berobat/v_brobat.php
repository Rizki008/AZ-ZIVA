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
											Nama Dokter
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
											Penyakit
										</th>
										<th>
											Jumlah Brobat
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
									foreach ($berobat as $key => $value) { ?>
										<tr>
											<td>
												<?= $no++ ?>
											</td>
											<td>
												<?= $value->nama_dokter ?>
											</td>
											<td>
												<?= $value->nama_pasien ?>
											</td>
											<td>
												<?= $value->jenis_kel ?>
											</td>
											<td>
												<?= $value->usia ?>
											</td>
											<td>
												<?= $value->bpjs ?>
											</td>
											<td>
												<?= $value->nama_penyakit ?>
											</td>
											<td>
												<?= $value->berobat ?>
											</td>
											<td>
												<?= $value->alamat ?>
											</td>
											<td>
												<button data-toggle="modal" data-target="#edit<?= $value->id_berobat ?>" class="btn btn-warning btn-rounded btn-fw"><i class="typcn typcn-edit"></i>Edit</button>
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


<!-- /.modal Edit -->
<?php foreach ($berobat as $key => $value) { ?>
	<div class="modal fade" id="edit<?= $value->id_berobat ?>">
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
					echo form_open('berobat/edit/' . $value->id_berobat);
					?>

					<div class="form-group">
						<label>Nama Dokter</label>
						<input type="text" name="nama_dokter" value="<?= $value->nama_dokter ?>" class="form-control" placeholder="Nama User" required>
					</div>
					<div class="form-group">
						<label>Nama Pasien</label>
						<input type="text" name="nama_pasien" value="<?= $value->nama_pasien ?>" class="form-control" placeholder="Nama User" disabled>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<input type="text" name="jenis_kel" value="<?= $value->jenis_kel ?>" class="form-control" placeholder="Nama User" disabled>
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
						<input type="text" name="nama_penyakit" value="<?= $value->nama_penyakit ?>" class="form-control" placeholder="Nama User" required>
					</div>
					<div class="form-group">
						<label>Datang Berobat</label>
						<input type="number" name="berobat" value="<?= $value->berobat ?>" class="form-control" placeholder="Nama User" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" value="<?= $value->alamat ?>" class="form-control" placeholder="Nama User" disabled>
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
