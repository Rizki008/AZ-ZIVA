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
										Keluhan
									</th>
									<th>
										Resep Obat
									</th>
									<th>
										Aksi
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($pasien_selesai_berobat as $key => $value) { ?>
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
											<button class="btn btn-danger btn-rounded btn-fw" data-toggle="modal" data-target="#delete<?= $value->id_berobat ?>"><i class="typcn typcn-delete"></i>Hapus</button>
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


<!-- /.modal Edit -->
<?php foreach ($pasien_selesai_berobat as $key => $value) { ?>
	<div class="modal fade" id="delete<?= $value->id_berobat ?>">
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
					echo form_open('berobat/delete/' . $value->id_berobat);
					?>

					<p>Apakah Yakin Akan Hapus Data Pasien???</p>

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