<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard v1</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-lg-4 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?= $total_pasien ?></h3>

							<p>Total Pasien</p>
						</div>
						<div class="icon">
							<i class="fa fa-male"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-4 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3><?= $total_daftar ?></h3>

							<p>Total Pasien Daftar</p>
						</div>
						<div class="icon">
							<i class="fa fa-bed"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
							<h3><?= $total_berobat ?></h3>

							<p>Total Pasien Berobat</p>
						</div>
						<div class="icon">
							<i class="fa fa-flask"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
		</div>
		<div class="row">
			<!-- solid sales graph -->
			<section class="col-lg-12 connectedSortable">
				<div class="card bg-gradient-white">
					<div class="card-header border-0">
						<h3 class="card-title">
							<i class="fas fa-th mr-1"></i>
							Analisis Data Diagnosa
						</h3>

						<div class="card-tools">
							<button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
								<i class="fas fa-minus"></i>
							</button>
							<button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
								<i class="fas fa-times"></i>
							</button>
						</div>
					</div>
					<div class="card-body">
						<?php
						foreach ($grafik_gejala_pasien as $key => $value) {
							$gejala[] = $value->gejala;
							$total_gejala[] = $value->total_gejala;
						}
						?>
						<!-- grafik analisis grjala -->
						<canvas id="myChart" height="100" style="height: 100px;"></canvas>
						<script>
							var ctx = document.getElementById('myChart');
							var myChart = new Chart(ctx, {
								type: 'bar',
								data: {
									labels: <?= json_encode($gejala) ?>,
									datasets: [{
										label: 'Grafik Analisis Diagnosa Pasien',
										data: <?= json_encode($total_gejala) ?>,
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
					<!-- /.card-body -->
					<div class="card-footer bg-transparent">

						<!-- /.row -->
					</div>
					<!-- /.card-footer -->
				</div>
				<!-- /.card -->
			</section>
		</div><!-- /.container-fluid -->
	</section>

</div>