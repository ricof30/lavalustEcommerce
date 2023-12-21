<!DOCTYPE html>
<html lang="en">

<head>
    <?php $LAVA =& lava_instance(); ?>
    <?php echo $LAVA->call->view('admin/head'); ?>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <?php echo $LAVA->call->view('admin/sidebar'); ?>
            <?php echo $LAVA->call->view('admin/header'); ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <canvas id="myChart"></canvas>
                </div>
                <?php
                $LAVA->call->model('Order_model');
                $order = $LAVA->Order_model->sales();

                $monthNames = [
                    1 => 'January',
                    2 => 'February',
                    3 => 'March',
                    4 => 'April',
                    5 => 'May',
                    6 => 'June',
                    7 => 'July',
                    8 => 'August',
                    9 => 'September',
                    10 => 'October',
                    11 => 'November',
                    12 => 'December'
                ];
                $monthLabels = [];
                $salesData = [];
                $totalSalesData = []; // Add array for total sales

                // Initialize salesData and totalSalesData arrays for all months
                for ($i = 1; $i <= 12; $i++) {
                    $monthLabels[] = $monthNames[$i];
                    $salesData[$i] = 0;
                    $totalSalesData[$i] = 0;
                }

                foreach ($order as $row) {
                    // Accumulate order count and total sales for each month
                    $salesData[$row['order_month']] += $row['order_count'];
                    $totalSalesData[$row['order_month']] += $row['total'];
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');

        // Initial data for the chart
        var initialChartData = {
            labels: <?php echo json_encode($monthLabels); ?>,
            datasets: [
                {
                    label: '# of Sold Items',
                    data: <?php echo json_encode(array_values($salesData)); ?>,
                    backgroundColor: [
                        'rgb(75, 192, 192)',
                        'rgb(153, 102, 255)',
                        'rgb(255, 159, 64)',
                    ],
                    borderColor: [
                        'rgb(75, 192, 192)',
                        'rgb(153, 102, 255)',
                        'rgb(255, 159, 64)',
                    ],
                    borderWidth: 1
                },
                {
                    label: 'Total Sales ',
                    data: <?php echo json_encode(array_values($totalSalesData)); ?>,
                    backgroundColor: [
                        'rgb(255, 0, 0)',
                        'rgb(0, 255, 0)',
                        'rgb(0, 0, 255)',
                    ],
                    borderColor: [
                        'rgb(255, 0, 0)',
                        'rgb(0, 255, 0)',
                        'rgb(0, 0, 255)',
                    ],
                    borderWidth: 1
                }
            ]
        };

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: initialChartData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
            }
        });
    </script>
</body>

</html>
