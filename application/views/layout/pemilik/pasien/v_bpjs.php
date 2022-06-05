<!-- Content Wrapper. Contains page content -->
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

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- BAR CHART -->
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title"><?= $title ?></h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
							</div>
						</div>
						<div class="card-body">
							<div class="chart">
								<canvas id="BPJS" height="100"></canvas>
								<?php
								foreach ($grafik_bpjs_analis as $key => $value) {
									$bpjs[] = $value->bpjs;
									$total_bpjs[] = $value->total_bpjs;
								}
								?>
								<script>
									var ctx = document.getElementById('BPJS');
									var myChart = new Chart(ctx, {
										type: 'bar',
										data: {
											labels: <?= json_encode($bpjs) ?>,
											datasets: [{
												label: 'Grafik Analisis BPJS ',
												data: <?= json_encode($total_bpjs) ?>,
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>