<div class="content-wrapper">

	<div class="row">
		<div class="col-xl-6 grid-margin stretch-card flex-column">
			<h5 class="mb-2 text-titlecase mb-4">Status statistics</h5>
			<div class="row">
				<div class="col-md-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="d-flex justify-content-between align-items-center mb-2">
								<p class="mb-0 text-muted">Transactions</p>
								<p class="mb-0 text-muted">+1.37%</p>
							</div>
							<h4>1352</h4>
							<canvas id="transactions-chart" class="mt-auto" height="65"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="d-flex justify-content-between align-items-center mb-2">
								<div>
									<p class="mb-2 text-muted">Sales</p>
									<h6 class="mb-0">563</h6>
								</div>
								<div>
									<p class="mb-2 text-muted">Orders</p>
									<h6 class="mb-0">720</h6>
								</div>
								<div>
									<p class="mb-2 text-muted">Revenue</p>
									<h6 class="mb-0">5900</h6>
								</div>
							</div>
							<canvas id="sales-chart-a" class="mt-auto" height="65"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="row h-100">
				<div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
					<div class="card">
						<div class="card-body d-flex flex-column justify-content-between">
							<p class="text-muted">Sales Analytics</p>
							<div class="d-flex justify-content-between align-items-center mb-2">
								<h3 class="mb-">27632</h3>
								<h3 class="mb-">78%</h3>
							</div>
							<canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-6 stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="row h-100">
								<div class="col-6 d-flex flex-column justify-content-between">
									<p class="text-muted">CPU</p>
									<h4>55%</h4>
									<canvas id="cpu-chart" class="mt-auto"></canvas>
								</div>
								<div class="col-6 d-flex flex-column justify-content-between">
									<p class="text-muted">Memory</p>
									<h4>123,65</h4>
									<canvas id="memory-chart" class="mt-auto"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 grid-margin stretch-card flex-column">
			<h5 class="mb-2 text-titlecase mb-4">Income statistics</h5>
			<div class="row h-100">
				<div class="col-md-12 stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-start flex-wrap">
								<div>
									<p class="mb-3">Monthly Increase</p>
									<h3>67842</h3>
								</div>
								<div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
							</div>
							<canvas id="income-chart"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php
	foreach ($grafik as $key => $value) {
		$alamat[] = $value->alamat;
		$berobat[] = $value->berobat;
	}
	?>


	<canvas id="myChart" height="100"></canvas>
	<script>
		var ctx = document.getElementById('myChart');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?= json_encode($alamat) ?>,
				datasets: [{
					label: 'Grafik Analisis',
					data: <?= json_encode($berobat) ?>,
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
