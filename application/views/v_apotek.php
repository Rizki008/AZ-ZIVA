<div class="content-wrapper">

	<div class="row">
		<div class="col-xl-6 grid-margin stretch-card flex-column">
			<h5 class="mb-2 text-titlecase mb-4">Status statistics</h5>
			<div class="row">
				<!-- <div class="col-md-6 grid-margin stretch-card">
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
				</div> -->
				<div class="col-md-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="d-flex justify-content-between align-items-center mb-2">
								<div>
									<p class="mb-2 text-muted">Total Obat Masuk</p>
									<h6 class="mb-0"><?= $total_obat ?></h6>
								</div>
								<div>
									<p class="mb-2 text-muted">Total Obat Keluar</p>
									<h6 class="mb-0"><?= $total_obat_keluar ?></h6>
								</div>
							</div>
							<canvas id="sales-chart-a" class="mt-auto" height="65"></canvas>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row h-100">
				<div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
					<div class="card">
						<div class="card-body d-flex flex-column justify-content-between">
							<p class="text-muted">Total Obat</p>
							<div class="d-flex justify-content-between align-items-center mb-2">
								<h3 class="mb-"><?= $total_obat ?></h3>
							</div>
							<canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<!-- <div class="col-md-6">
			<div class="card">
				<div class="table-responsive pt-3">
					<table class="table table-striped project-orders-table">
						<thead>
							<tr>
								<th class="ml-5">ID</th>
								<th>Alamat</th>
								<th>Total Alamat Pasein</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($grafik_alamat as $key => $value) {
								$total = $this->m_pasien->grafik_alamat(); ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $value->alamat ?></td>
									<td><?= $value->total ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div> -->
	</div>

	<?php
	foreach ($grafik as $key => $value) {
		$nama_obat[] = $value->nama_obat;
		$stock[] = $value->stock;
	}
	?>


	<canvas id="myChart" height="100"></canvas>
	<script>
		var ctx = document.getElementById('myChart');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?= json_encode($nama_obat) ?>,
				datasets: [{
					label: 'Grafik Analisis Stock Obat',
					data: <?= json_encode($stock) ?>,
					backgroundColor: [
						'rgba(255, 99, 132, 0.80)',
						'rgba(54, 162, 235, 0.80)',
						'rgba(255, 206, 86, 0.80)',
						'rgba(75, 192, 192, 0.80)',
						'rgba(153, 102, 255, 0.80)',
						'rgba(255, 159, 64, 0.80)',
						'rgba(201, 76, 76, 0.3)',
						'rgba(201, 77, 77, 1)',
						'rgba(0, 140, 162, 1)',
						'rgba(158, 109, 8, 1)',
						'rgba(201, 76, 76, 0.8)',
						'rgba(0, 129, 212, 1)',
						'rgba(201, 77, 201, 1)',
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)',
						'rgba(128, 98, 98, 1)',
						'rgba(0, 0, 0, 1)',
						'rgba(128, 128, 128, 1)',
						'rgba(255, 99, 132, 0.80)',
						'rgba(54, 162, 235, 0.80)',
						'rgba(255, 206, 86, 0.80)',
						'rgba(75, 192, 192, 0.80)',
						'rgba(153, 102, 255, 0.80)',
						'rgba(255, 159, 64, 0.80)',
						'rgba(201, 76, 76, 0.3)',
						'rgba(201, 77, 77, 1)',
						'rgba(0, 140, 162, 1)',
						'rgba(158, 109, 8, 1)',
						'rgba(201, 76, 76, 0.8)',
						'rgba(0, 129, 212, 1)',
						'rgba(201, 77, 201, 1)',
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)',
						'rgba(128, 98, 98, 1)',
						'rgba(0, 0, 0, 1)',
						'rgba(128, 128, 128, 1)'
					],
					borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)',
						'rgba(201, 76, 76, 0.3)',
						'rgba(201, 77, 77, 1)',
						'rgba(0, 140, 162, 1)',
						'rgba(158, 109, 8, 1)',
						'rgba(201, 76, 76, 0.8)',
						'rgba(0, 129, 212, 1)',
						'rgba(201, 77, 201, 1)',
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)',
						'rgba(128, 98, 98, 1)',
						'rgba(0, 0, 0, 1)',
						'rgba(128, 128, 128, 1)',
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)',
						'rgba(201, 76, 76, 0.3)',
						'rgba(201, 77, 77, 1)',
						'rgba(0, 140, 162, 1)',
						'rgba(158, 109, 8, 1)',
						'rgba(201, 76, 76, 0.8)',
						'rgba(0, 129, 212, 1)',
						'rgba(201, 77, 201, 1)',
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)',
						'rgba(128, 98, 98, 1)',
						'rgba(0, 0, 0, 1)',
						'rgba(128, 128, 128, 1)'
					],
					fill: false,
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>



</div>
