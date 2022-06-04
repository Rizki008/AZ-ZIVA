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
							<p class="card-text text-dark">Total Pasien</p>
							<h4 class="bold-text"><?= $total_pasien ?></h4>
						</div>
					</div>
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
							<p class="card-text text-dark">Total Berobat</p>
							<h4 class="bold-text"><?= $total_berobat ?></h4>
						</div>
					</div>
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
							<p class="card-text text-dark">Daftar Berobat</p>
							<h4 class="bold-text"><?= $total_daftar ?></h4>
						</div>
					</div>
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
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Analisis Obat Pertanggal</h3>
				</div>
				<div class="card-body">
					<?php
					echo form_open('admin/analisis_tanggal') ?>
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label>Tanggal</label>
								<select name="tanggal" class="form-control">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 31; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Bulan</label>
								<select name="bulan" class="form-control">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 12; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Tahun</label>
								<select name="tahun" class="form-control">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 10; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i>Cek Hasil Analisis</button>
							</div>
						</div>
					</div>
					<?php
					echo form_close() ?>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Analisis Obat PerBulan</h3>
				</div>
				<div class="card-body">
					<?php
					echo form_open('admin/analisis_bulan') ?>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Bulan</label>
								<select name="bulan" class="form-control">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 12; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Tahun</label>
								<select name="tahun" class="form-control">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 10; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cek Hasil Analisis</button>
							</div>
						</div>
					</div>
					<?php
					echo form_close() ?>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>


		<div class="col-md-4">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Analisis Obat Pertahun</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<?php
					echo form_open('admin/analisis_tahun') ?>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Tahun</label>
								<select name="tahun" class="form-control">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 10; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cek Hasil Analisis</button>
							</div>
						</div>
					</div>
					<?php
					echo form_close() ?>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col-md-6 mb-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Total BPJS</h5>
					<div class="custom-legend-container w-75 mx-auto">
						<canvas id="myChart" height="100"></canvas>
					</div>
					<div id="sales-chart-legend" class="legend-right"></div>
				</div>
			</div>
		</div>
		<div class="col-md-6 mb-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Total Alamat</h5>
					<div class="custom-legend-container w-75 mx-auto">
						<canvas id="myBar" height="100"></canvas>
					</div>
					<div id="sales-chart-legend" class="legend-right"></div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col-md-6 mb-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Tota Gejala</h5>
					<div class="custom-legend-container w-75 mx-auto">
						<canvas id="myLinda" height="100"></canvas>
					</div>
					<div id="sales-chart-legend" class="legend-right"></div>
				</div>
			</div>
		</div>
		<div class="col-md-6 mb-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Tota BPJS</h5>
					<div class="custom-legend-container w-75 mx-auto">
						<canvas id="myHoney" height="100"></canvas>
					</div>
					<div id="sales-chart-legend" class="legend-right"></div>
				</div>
			</div>
		</div>
	</div>


</div>
<!-- partial:partials/_footer.html -->