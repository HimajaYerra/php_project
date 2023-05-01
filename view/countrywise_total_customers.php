<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="../css/style.css">

<script src="https://code.jquery.com/jquery-3.6.3.js" 
integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" 
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.min.js"></script>

<p style="text-align:left;"><canvas  id="chartjs_countrywise_total_customers"></canvas></p>

<script type="text/javascript">
    var ctxx = document.getElementById("chartjs_countrywise_total_customers").getContext('2d');
    var colors = ['rgb(0, 50, 100)', 'rgb(0, 100, 150)', 'rgb(0, 200, 250)']

    var cht = new Chart(ctxx, {
        type: "pie",
        data: {
            labels: <?php echo json_encode($customers_per_country_countries); ?>,
            datasets: [
                {
                    data: <?php echo json_encode($customers_per_country_count); ?>,
                    backgroundColor: colors,
                    borderColor: colors,
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            title: {
            display: true,
            text: 'Total customers by Country'
            },
            legend: {
                position: 'bottom'
            }
        }
    })
</script>