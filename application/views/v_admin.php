<div class="content-wrapper">

	<div class="row">
		<div class="col-xl-6 grid-margin stretch-card flex-column">
			<h5 class="mb-2 text-titlecase mb-4">Status statistics</h5>
			<div class="row">
				<div class="col-md-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="d-flex justify-content-between align-items-center mb-2">
								<p class="mb-0 text-muted">Data Pasien</p>
								<p class="mb-0 text-muted"></p>
							</div>
							<h4><?= $total_pasien ?></h4>
							<canvas id="transactions-chart" class="mt-auto" height="65"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="d-flex justify-content-between align-items-center mb-2">
								<div>
									<p class="mb-2 text-muted">Daftar Berobat</p>
									<h6 class="mb-0"><?= $total_daftar ?></h6>
								</div>
								<div>
									<p class="mb-2 text-muted">Total Pasien Berobat</p>
									<h6 class="mb-0"><?= $total_berobat ?></h6>
								</div>
							</div>
							<canvas id="sales-chart-a" class="mt-auto" height="65"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="row h-100">
			</div>
		</div>

	</div>




	<canvas id="myChart" height="100"></canvas>




</div>