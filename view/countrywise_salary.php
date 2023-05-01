<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="../css/style.css">

<script src="https://code.jquery.com/jquery-3.6.3.js" 
integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" 
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.min.js"></script>

<p style="text-align:left;"><canvas  id="chartjs_salary_stackedbar"></canvas></p>

<script type="text/javascript">
    var ctxx = document.getElementById("chartjs_salary_stackedbar").getContext('2d');
    var salary_data = <?php echo json_encode($salary_data); ?>;
    var salary_country_data = <?php echo json_encode($salary_country_data); ?>;
    var datasets = [];
    var colors = ['rgb(0, 50, 100)', 'rgb(0, 100, 150)', 'rgb(0, 200, 250)']
    salary_country_data.forEach((country, index)=> {
        var values = salary_data.find((idx)=> idx.geography === country);
        if (values) {
            datasets.push({
                label: values['geography'],
                data: [values['min_salary'], values['avg_salary'], values['max_salary']],
                borderColor: colors[index],
                borderWidth: 2,
                fill: false
            })
        }
    });
    var cht = new Chart(ctxx, {
        type: "line",
        data: {
            labels: ['Min', 'Avg', 'Max'],
            datasets: datasets,
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: "Min/Avg/Max salary per country"
            },
            legend: {
                position: 'bottom'
            },
            scales: {
                yAxes: [{
                    type: 'logarithmic',
                    ticks: {
                      callback: function (value, index, values) {
                        return Number(value.toString()); // Avoid scientific notation
                      },
                      min: 10, // Minimum value on Y-axis
                      max: 300000, // Maximum value on Y-axis
                      stepSize: 10, // Step size between each Y-axis tick
                    },
                    scaleLabel: {
                      display: true,
                      labelString: 'Salary'
                    }
                }],
                xAxes: [{
                  title: {
                    display: true,
                    text: 'Countries'
                  }
                }]
            }
        }
    })
</script>