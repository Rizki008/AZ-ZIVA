<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <?= $title ?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> <?= $title ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery <?= $title ?> -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example <small>jQuery <?= $title ?></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url('data_berobat/pesan') ?>" method="POST">
                            <div class="card-body">
                                <input type="hidden" name="id_berobat" value="<?= $id ?>">
                                <input type="hidden" name="name" class="name">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Obat</label>
                                    <select name="id" id="pesan_obat" class="form-control">
                                        <option>---Pilih Resep Obat---</option>
                                        <?php foreach ($obat as $key => $value) { ?>
                                            <option value="<?= $value->id_obat_masuk ?>" data-name=<?= $value->nama_obat ?>><?= $value->nama_obat ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Qty</label>
                                    <input type="number" name="qty" class="form-control" id="exampleInputPassword1" placeholder="Qty">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Dosis Obat</label>
                                    <input type="text" name="dosis" class="form-control" id="exampleInputPassword1" placeholder="Dosis Obat">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <form class="forms-sample" action="<?= base_url('data_berobat/checkout') ?>" method="POST">
                            <?php
                            $i = 1;
                            $j = 1;
                            foreach ($this->cart->contents() as $items) {
                                echo form_hidden('qty' . $i++, $items['qty']);
                                echo form_hidden('dosis' . $j++, $items['dosis']);
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
                                            <th>Dosis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($this->cart->contents() as $key => $value) {
                                        ?>
                                            <tr class="">
                                                <td><?= $value['name'] ?></td>
                                                <td><?= $value['qty'] ?></td>
                                                <td><?= $value['dosis'] ?></td>
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
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>