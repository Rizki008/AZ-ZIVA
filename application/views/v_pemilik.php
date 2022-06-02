<div class="content-wrapper">
	<h3 class="page-heading mb-4">Dashboard</h3>
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
			<div class="card card-statistics">
				<div class="card-body">
					<div class="clearfix">
						<div class="float-left">
							<h4 class="text-danger">
								<i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
							</h4>
						</div>
						<div class="float-right">
							<p class="card-text text-dark">Data Pasien</p>
							<h4 class="bold-text"><?= $total_pasien ?></h4>
						</div>
					</div>
					<p class="text-muted">
						<i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 65% lower growth
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
			<div class="card card-statistics">
				<div class="card-body">
					<div class="clearfix">
						<div class="float-left">
							<h4 class="text-warning">
								<i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
							</h4>
						</div>
						<div class="float-right">
							<p class="card-text text-dark">Daftar Berobat</p>
							<h4 class="bold-text"><?= $total_daftar ?></h4>
						</div>
					</div>
					<p class="text-muted">
						<i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> Product-wise sales
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
			<div class="card card-statistics">
				<div class="card-body">
					<div class="clearfix">
						<div class="float-left">
							<h4 class="text-success">
								<i class="fa fa-dollar highlight-icon" aria-hidden="true"></i>
							</h4>
						</div>
						<div class="float-right">
							<p class="card-text text-dark">Total Pasien Berobat</p>
							<h4 class="bold-text"><?= $total_berobat ?></h4>
						</div>
					</div>
					<p class="text-muted">
						<i class="fa fa-calendar mr-1" aria-hidden="true"></i> Weekly Sales
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
			<div class="card card-statistics">
				<div class="card-body">
					<div class="clearfix">
						<div class="float-left">
							<h4 class="text-primary">
								<i class="fa fa-twitter highlight-icon" aria-hidden="true"></i>
							</h4>
						</div>
						<div class="float-right">
							<p class="card-text text-dark">Total Obat</p>
							<h4 class="bold-text"><?= $total_obat ?></h4>
						</div>
					</div>
					<p class="text-muted">
						<i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5 mb-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Orders</h5>
					<div class="row">
						<div class="col-12">
							<canvas id="myChart" height="100"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Sales region</h5>
					<div class="table-responsive table-sales">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2">No</th>
									<th class="text-left">Alamat</th>
									<th class="text-right">Total Alamat Pasein</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($grafik_alamat as $key => $value) {
									$total = $this->m_pasien->grafik_alamat(); ?>
									<tr>
										<td colspan="2"><?= $no++ ?></td>
										<td class="text-left"><?= $value->alamat ?></td>
										<td class="text-right"><?= $value->total ?></td>
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