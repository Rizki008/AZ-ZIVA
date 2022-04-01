<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Basic form elements</h4>
						<p class="card-description">
							Basic form elements
						</p>
						<?php
						//notifikasi form kosong
						echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

						//notifikasi gagal upload gambar
						if (isset($error_upload)) {
							echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
						} ?>
						<form class="forms-sample" action="<?= base_url('berobat/add') ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputName1">Nama Dokter</label>
								<input type="text" name="nama_dokter" class="form-control" id="exampleInputName1" placeholder="Name Dokter" value="<?= set_value('nama_dokter') ?>" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail3">Nama Pasien</label>
								<select class="form-control" name="id_pasien">
									<option value="">--Pasien Sudah Terdaftar--</option>
									<?php foreach ($pasien as $key => $value) { ?>
										<option value="<?= $value->id_pasien ?>"><?= $value->username ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword4">Gejala Penyakit</label>
								<input type="text" name="nama_penyakit" class="form-control" id="exampleInputPassword4" placeholder="Gejala Penyakit" value="<?= set_value('nama_penyakit') ?>" required>
							</div>
							<!-- <div class="form-group">
								<label for="exampleSelectGender">Resep Obat</label>
								<select class="form-control" name="id_obat">
									<option value="">--Pilih Obat Sesuai Resep--</option>
									<?php foreach ($obat as $key => $value) { ?>
										<option value="<?= $value->id_obat ?>"><?= $value->nama_obat ?></option>
									<?php } ?>
								</select>
							</div> -->
							<div class="form-group">
								<label for="exampleInputCity1">Jumlah Obat</label>
								<input type="text" name="jml_obat" class="form-control" id="exampleInputCity1" placeholder="Jumlah Obat" value="<?= set_value('jml_obat') ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputCity1">Datang Berobat</label>
								<input type="text" name="berobat" class="form-control" id="exampleInputCity1" placeholder="Datang Berobat" value="<?= set_value('berobat') ?>">
							</div>
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
							<button class="btn btn-light">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
