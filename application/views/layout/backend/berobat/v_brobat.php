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
									foreach ($berobat as $key => $value) { ?>
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
												<a href="<?= base_url('berobat/proses/' . $value->id_boking) ?>" class="btn btn-warning btn-rounded btn-fw"><i class="typcn typcn-edit"></i>Konfirmasi</a>
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
</div>
