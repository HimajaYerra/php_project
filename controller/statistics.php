<?php 
require 'call_db.php';
$credit_data = getAvgCreditScore();
$labels= array();
$data = array();
foreach ($credit_data as $row_data) :
    $labels[] = $row_data['age'];
    $data[] = $row_data['credit_score'];
endforeach;

include '../header.php'; 
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="../css/style.css">

<script src="https://code.jquery.com/jquery-3.6.3.js" 
integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" 
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.min.js"></script>

<div>
    <div class="card mb-3" style="width: 40rem;">
        <div class="card-body">
            <h5 class="card-title">Total customers per country</h5>
            <table>
                <thead>
                  <tr>
                    <th>Geography</th>
                    <th>Male</th>
                    <th>Female</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($country_data as $index=>$value): ?>
                    <tr>
                        <td><?php echo $country_data[$index]; ?></td>
                        <td><?php echo $male_data[$index]; ?></td>
                        <td><?php echo $female_data[$index]; ?></td>
                        <td><?php echo $total_data[$index]; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
            </table>
            <a href="countrywise_count.php" class="btn btn-primary">View graph</a>
        </div>
    </div>
</div>
<p style="text-align:left;">table data<canvas  id="chartjs_bar"></canvas></p>

<?php include '../footer.php'; ?>
<?php echo '<link href="../css/style.css" rel="stylesheet">'; ?>

<script type="text/javascript">
    var ctx = document.getElementById("chartjs_bar").getContext('2d');
    var myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor:"rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: <?php echo json_encode($data); ?>
            }]
        },
        options: {
            legend: {display: false},
            scales: {
                xAxes: [{
                    display: true,
                    beginAtZero: true,
                    steps: 10,
                    stepValue: 5,
                    max: 100
                }]
            }
        }
    })

    /*
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: <?php echo json_encode($labels); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969aa",
                                "#ff407b",
                                "#331523",
                                "#ffc750"
                            ],
                            data: <?php echo json_encode($data); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                */
    </script>




