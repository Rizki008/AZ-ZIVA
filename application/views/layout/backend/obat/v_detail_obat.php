<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Default form</h4>
						<p class="card-description">
							Basic form layout
						</p>
						<?php foreach ($resep_obat as $key => $value) { ?>
							<!-- <?php echo form_open('berobat/pesan');
									echo form_hidden('id', $resep_obat->id_obat_masuk);
									echo form_hidden('name', $resep_obat->nama_obat);
									echo form_hidden('redirect_page', str_replace('index.php/', '', current_url())); ?> -->
							<div class="form-group">
								<label for="exampleInputUsername1">Nama Obat</label>
								<input type="text" class="form-control" value="<?= $value->nama_obat ?>" id="exampleInputUsername1" placeholder="Nama Obat" disabled>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Jenis Obat</label>
								<input type="text" class="form-control" value="<?= $value->jenis_obat ?>" id="exampleInputEmail1" placeholder="Jenis Obat" disabled>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Stock</label>
								<input type="number" value="<?= $value->qty ?>" class="form-control" id="exampleInputPassword1" placeholder="Stock" disabled>
							</div>
							<div class="form-group">
								<label for="exampleInputConfirmPassword1">Jumlah Obat Keluar</label>
								<input type="number" class="form-control" value="1" id="exampleInputConfirmPassword1" placeholder="Jumlah Keluar" min="1" max="<?= $value->qty ?>">
							</div>
							<button type="submit" class="btn btn-primary mr-2">Pilih Obat</button>
							<!-- <?php echo form_close() ?> -->
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
