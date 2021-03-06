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
				<div class="col-lg-3 col-6">
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
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3><?= $total_daftar ?><sup style="font-size: 20px"></sup></h3>

							<p>Daftar Berobat</p>
						</div>
						<div class="icon">
							<i class="fa fa-bed"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<h3><?= $total_berobat ?></h3>

							<p>Total Berobat</p>
						</div>
						<div class="icon">
							<i class="fa fa-heartbeat"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
							<h3><?= $total_obat ?></h3>

							<p>Total Obat</p>
						</div>
						<div class="icon">
							<i class="fa fa-flask"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
			<!-- /.row -->
			<!-- Main row -->
		</div>
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-7 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-chart-pie mr-1"></i>
							Grafik Analisis
						</h3>
						<div class="card-tools">
							<ul class="nav nav-pills ml-auto">
								<li class="nav-item">
									<a class="nav-link active" href="#revenue-chart" data-toggle="tab">Analisis Alamat</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#sales-chart" data-toggle="tab">Analisis Diagnosa</a>
								</li>
							</ul>
						</div>
					</div><!-- /.card-header -->
					<div class="card-body">
						<div class="tab-content p-0">
							<!-- Morris chart - Sales -->
							<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
								<!-- analisis gejala pasien  -->
								<?php
								foreach ($grafik_alamat_pasien as $key => $value) {
									$alamat[] = $value->alamat;
									$total_alamat[] = $value->total_alamat;
								}
								?>
								<!-- grafik analisis grjala -->
								<canvas id="sales" height="100" style="height: 100px;"></canvas>
								<script>
									var ctx = document.getElementById('sales');
									var sales = new Chart(ctx, {
										type: 'bar',
										data: {
											labels: <?= json_encode($alamat) ?>,
											datasets: [{
												label: 'Grafik Analisis Alamat Pasien',
												data: <?= json_encode($total_alamat) ?>,
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
							<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
								<!-- analisis gejala pasien  -->
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
						</div>
					</div><!-- /.card-body -->
				</div>
				<!-- /.card -->
			</section>
			<!-- solid sales graph -->
			<section class="col-lg-5 connectedSortable">
				<div class="card bg-gradient-info">
					<div class="card-header border-0">
						<h3 class="card-title">
							<i class="fas fa-th mr-1"></i>
							Analisis BPJS dan Non BPJS
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
						<canvas class="chart" id="myHoney" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
						<?php
						foreach ($grafik_bpjs as $key => $value) {
							$bpjs[] = $value->bpjs;
							$total_bpjs[] = $value->total_bpjs;
						}
						?>
						<script>
							var ctx = document.getElementById('myHoney');
							var myHoney = new Chart(ctx, {
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
					<!-- /.card-body -->
					<div class="card-footer bg-transparent">

						<!-- /.row -->
					</div>
					<!-- /.card-footer -->
				</div>
				<!-- /.card -->
			</section>
			<section class="col-lg-7 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-chart-pie mr-1"></i>
							Grafik Analisis Data Obat
						</h3>
						<div class="card-tools">
							<ul class="nav nav-pills ml-auto">
								<li class="nav-item">
									<a class="nav-link active" href="#stock-chart" data-toggle="tab">Analisis Stock Obat</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#obat-chart" data-toggle="tab">Analisis Obat Digunakan</a>
								</li>
							</ul>
						</div>
					</div><!-- /.card-header -->
					<div class="card-body">
						<div class="tab-content p-0">
							<!-- Morris chart - obat -->
							<div class="chart tab-pane active" id="stock-chart" style="position: relative; height: 300px;">
								<!-- analisis gejala pasien  -->
								<?php
								foreach ($grafik_stock_obat as $key => $value) {
									$nama_obat[] = $value->nama_obat;
									$total_stock[] = $value->total_stock;
								}
								?>
								<!-- grafik analisis grjala -->
								<canvas id="stock" height="100" style="height: 100px;"></canvas>
								<script>
									var ctx = document.getElementById('stock');
									var stock = new Chart(ctx, {
										type: 'bar',
										data: {
											labels: <?= json_encode($nama_obat) ?>,
											datasets: [{
												label: 'Grafik Analisis stock obat',
												data: <?= json_encode($total_stock) ?>,
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
							<div class="chart tab-pane" id="obat-chart" style="position: relative; height: 300px;">
								<!-- analisis gejala pasien  -->
								<?php
								foreach ($obat_keluar as $key => $value) {
									$nama_obat[] = $value->nama_obat;
									$total_qty[] = $value->total_qty;
								}
								?>
								<!-- grafik analisis grjala -->
								<canvas id="obat" height="100" style="height: 100px;"></canvas>
								<script>
									var ctx = document.getElementById('obat');
									var obat = new Chart(ctx, {
										type: 'bar',
										data: {
											labels: <?= json_encode($nama_obat) ?>,
											datasets: [{
												label: 'Grafik Analisis Obat yang digunakan',
												data: <?= json_encode($total_qty) ?>,
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
					</div><!-- /.card-body -->
				</div>
				<!-- /.card -->
			</section>
		</div><!-- /.container-fluid -->
	</section>

</div>