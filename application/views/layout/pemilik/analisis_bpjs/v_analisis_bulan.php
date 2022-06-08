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
                        <li class="breadcrumb-item active">Analisis Pasien BPJS dan Non BPJS</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> <?= $title ?>.
                                    <small class="float-right">Date: <?= $bulan ?>/<?= $tahun ?></small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                        </div>
                        <!-- /.row -->
                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <canvas id="landak" height="100"></canvas>
                                <?php
                                foreach ($analisis_bulan as $key => $value) {
                                    $bpjs[] = $value->bpjs;
                                    $total_bpjs_bulan[] = $value->total_bpjs_bulan;
                                }
                                ?>
                                <script>
                                    var ctx = document.getElementById('landak');
                                    var landak = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: <?= json_encode($bpjs) ?>,
                                            datasets: [{
                                                label: 'Grafik Analisis Pasien BPJS dan Non BPJS',
                                                data: <?= json_encode($total_bpjs_bulan) ?>,
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
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>