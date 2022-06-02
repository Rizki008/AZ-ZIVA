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
									<th>No</th>
									<th>No Berobat</th>
									<th>Nama Pasien</th>
									<th>Jenis Kelamin</th>
									<th>Usia</th>
									<th>bpjs</th>
									<th>alamat</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($bpjs as $key => $value) { ?>
									<tr class="">
										<td><?= $no++ ?></td>
										<td><?= $value->no_berobat ?></td>
										<td><?= $value->nama_pasien ?></td>
										<td><?php if ($value->jenis_kl == 1) { ?>
												<label class="badge badge-success">Laki-Laki</label>
											<?php } elseif ($value->jenis_kl == 2) { ?>
												<label class="badge badge-success">Perempuan</label>
											<?php } ?>
										</td>
										<td><?= $value->usia ?></td>
										<td><?php if ($value->bpjs == 1) { ?>
												<label class="badge badge-success">BPJS</label>
											<?php } ?>
										</td>
										<td><?= $value->alamat ?></td>
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