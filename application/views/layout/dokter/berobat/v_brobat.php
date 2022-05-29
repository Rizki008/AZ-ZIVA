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
								foreach ($berobat as $key => $value) { ?>
									<tr class="">
										<td>
											<?= $no++ ?>
										</td>
										<td>
											<label class="badge badge-success"><?= $value->no_antrian ?></label>

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
											<a href="<?= base_url('berobat/proses/' . $value->id_boking) ?>" class="btn btn-primary btn-sm"><i class="typcn typcn-edit"></i>Konfirmasi</a>
											<!-- <button class="btn btn-wa btn-rounded btn-fw" data-toggle="modal" data-target="#delete<?= $value->id_berobat ?>"><i class="typcn typcn-edit"></i>Konfirmasi</button> -->
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