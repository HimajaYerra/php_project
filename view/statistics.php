<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="../css/style.css">

<script src="https://code.jquery.com/jquery-3.6.3.js" 
integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" 
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.min.js"></script>
<?php include '../header.php'; ?>
<section class="container" style="background-color:#f4f4f4">   
    <div class="graph-section-top">
        <section class="container" style="background-color:#f4f4f4">   
            <div class="row g-3 p-4 justify-content-center">
                <div class="col-md-4">
                    <?php include 'credit_score_data.php'; ?>
                </div>
                <div class="col-md-4">
                    <?php include 'countrywise_count.php'; ?>
                </div>
                <div class="col-md-4">
                    <?php include 'countrywise_salary.php'; ?>
                </div>
                <div class="col-md-4">
                    <?php include 'countrywise_total_customers.php'; ?>
                </div>
                <div class="col-md-4">
                    <?php include 'countrywise_customers_with_credit_card.php'; ?>
                </div>
            </div>
        </section>
    </div>
</section>
<?php include '../footer.php'; ?>

