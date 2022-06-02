<div class="content-wrapper">
    <h3 class="page-heading mb-4">Forms</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Basic form elements</h5>
                    <form class="forms-sample" action="<?= base_url('data_berobat/pesan') ?>" method="POST">
                        <input type="hidden" name="id_berobat" value="<?= $id ?>">
                        <input type="hidden" name="name" class="name">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <select name="id" id="pesan_obat" class="form-control">
                                <option>---Pilih Resep Obat---</option>
                                <?php foreach ($obat as $key => $value) { ?>
                                    <option value="<?= $value->id_obat_masuk ?>" data-name=<?= $value->nama_obat ?>><?= $value->nama_obat ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" name="qty" class="form-control" placeholder="Enter ..." required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <form class="forms-sample" action="<?= base_url('data_berobat/checkout') ?>" method="POST">
                        <?php
                        $i = 1;
                        foreach ($this->cart->contents() as $items) {
                            echo form_hidden('qty' . $i++, $items['qty']);
                        }
                        $no_resep = date('Ymd') .  random_int(100, 9999);
                        ?>
                        <input type="hidden" name="no_resep" value="<?= $no_resep ?>">
                        <input type="hidden" name="id_berobat" value="<?= $id ?>">
                        <div class="table-responsive">
                            <table class="table center-aligned-table">
                                <thead>
                                    <tr class="text-primary">
                                        <th>Nama Obat</th>
                                        <th>Qty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($this->cart->contents() as $key => $value) {
                                    ?>
                                        <tr class="">
                                            <td><?= $value['name'] ?></td>
                                            <td><?= $value['qty'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan Resep</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partial:../../partials/_footer.html -->