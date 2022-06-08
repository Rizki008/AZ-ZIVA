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
							<!-- <button class="btn btn-primary btn rounded btn fw" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i>Add Obat Masuk</button> -->
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
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
								<tfoot>
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
											status_berobat
										</th>
										<th>
											Aksi
										</th>
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