<div class="col-sm-6">
    <!-- PIE CHART -->
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">Tipe Waktu</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <canvas id="pieChart"></canvas>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<?php foreach ($jobs as $key => $j) {
    $db = \Config\Database::connect();
    $tw_p = $db->table('jobs')
        ->where('TipeWaktu', 'Part-Time')
        ->countAllResults();

    $tw_f = $db->table('jobs')
        ->where('TipeWaktu', 'Full-Time')
        ->countAllResults();
} ?>
<script>
    const ctx = document.getElementById('pieChart');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Full-Time', 'Part-Time'],
            datasets: [{
                data: [<?= $tw_f ?>, <?= $tw_p ?>],
                backgroundColor: [
                    'rgb(54, 162, 235)',
                    'rgb(255, 99, 132)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>