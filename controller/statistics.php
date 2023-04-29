<?php 

require '../includes/database.php';
require '../includes/dao.php';


$action = filter_input(INPUT_POST,'action');
if($action == NULL){
    $action = filter_input(INPUT_GET,'action');
    if($action == NULL){
        $action = 'show_stats';
    }
}

if($action == 'show_stats'){
    

    include '../view/statistics.php';
}
if($action == 'bar'){
    echo "Bar graph";
    $count_data = getTotalCustomersDataPerCountry();
    $country_data = array();
    $male_data = array();
    $female_data = array();
    $total_data = array();
    foreach($count_data as $row_data):
    $country_data['country'] = $row_data['geography'];
    ($row_data['gender'] == 'Male') ? $male_data[] =$row_data['gender'] : $female_data[] = $row_data['gender'];
    $total_data[] = $row_data['total'];
    endforeach;
    foreach($country_data as $index)
        echo $index;
    include '../view/countrywise_count.php';
}
if($action == 'pie'){

$credit_data = getAvgCreditScore();
$labels= array();
$data = array();
foreach ($credit_data as $row_data) :
    $labels[] = $row_data['age'];
    $data[] = $row_data['credit_score'];
endforeach;
include '../view/credit_score_data.php';
}







?>
<!--
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
                
    </script> 

            -->




