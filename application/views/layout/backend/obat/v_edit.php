<div class="col-md-6 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Horizontal Form</h4>
			<p class="card-description">
				Horizontal form layout
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
			<form class="forms-sample" action="<?= base_url('obat/edit/' . $detail->id_obat) ?>" method="POST">
				<div class="form-group row">
					<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Obat</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nama_obat" id="exampleInputUsername2" placeholder="Nama Obat" value="<?= $detail->nama_obat ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Jenis Obat</label>
					<div class="col-sm-9">
						<select class="form-control" name="jenis_obat" value="<?= $detail->jenis_obat ?>">
							<option name="jenis_obat" value="tablet">Tablet</option>
							<option name="jenis_obat" value="pil">Pil</option>
							<option name="jenis_obat" value="cair">Cair</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="exampleInputMobile" class="col-sm-3 col-form-label">Stock</label>
					<div class="col-sm-9">
						<input type="number" name="stock" class="form-control" id="exampleInputMobile" placeholder="Mobile number" value="<?= $detail->stock ?>" required>
					</div>
				</div>
				<button type="submit" class="btn btn-primary mr-2">Submit</button>
				<a href="<?= base_url('obat') ?>" class="btn btn-light">Cancel</a>
			</form>
			<?php echo form_close() ?>
		</div>
	</div>
</div>
