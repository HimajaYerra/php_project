
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
     <div class="row g-3 p-2">
    <div class="col-md-5">
    <div class="bg-image card d-flex justify-content-center align-items-center" style="background-image: url('../images/bar_graph2.jpg');">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.4);">
        <div class="card-body">
            <h5 class="card-title text-light am-seal am-seal--us am-seal--highlighted am-seal--clickable">Total customers per country</h5>
            <p class="card-text text-light">
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
      Some quick example text to build on the card title and make up the bulk of the
      card's content.   
    </p>
            <a href="../controller/statistics.php?action=bar" class="btn btn-primary">View graph</a>
        </div>
    </div>
    </div>
    </div>
    <div class="col-md-2"></div>
    <div class=" col-md-5">
    <div class="bg-image card d-flex justify-content-center align-items-center" style="background-image: url('../images/pie_chart.jpg');">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.4);">
       
        <div class="card-body">
            <h5 class="card-title text-light">Total customers per country</h5>
            <p class="card-text text-light">
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
    </p>
            <a href="../controller/statistics.php?action=pie" class="btn btn-primary">View graph</a>
        </div>
    </div>
    </div>
    </div>
    </div>
</div>
</section>
<?php include '../footer.php'; ?>

