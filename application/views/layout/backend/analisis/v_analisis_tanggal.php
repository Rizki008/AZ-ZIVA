<div class="content-wrapper">
    <h3 class="page-heading mb-4">Bootstrap Tables</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-shopping-cart"></i> <?= $title ?>
                    <small class="float-right">Tanggal: <?= $tanggal ?>/<?= $bulan ?>/<?= $tahun ?></small>
                    <div class="table-responsive">
                        <table class="table center-aligned-table">
                            <thead>
                                <tr class="text-primary">
                                    <th>No</th>
                                    <th>Nama Obat</th>
                                    <th>Jenis Obat</th>
                                    <th>Stock</th>
                                    <th>Tanggal Masuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                // $grand_total = 0;
                                foreach ($analisis_tanggal as $key => $value) {
                                    // $tot_harga = $value->qty * $value->harga;
                                    // $grand_total = $grand_total + $tot_harga
                                ?>
                                    <tr class="">
                                        <td><?= $no++ ?></td>
                                        <td><?= $value->nama_obat ?></td>
                                        <td><?= $value->jenis_obat ?></td>
                                        <td><?= $value->qty ?></td>
                                        <td><?= $value->tgl_keluar ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row no-print">
                        <div class="col-12">
                            <!-- <button class="btn btn-default" onclick="window.print()"><i class="fa fa-print"></i> Print</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>