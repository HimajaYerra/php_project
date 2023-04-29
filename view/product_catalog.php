<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="../css/style.css">
        
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="../app.js"></script>
<?php include '../header.php'; ?>


<section class="container" style="background-color:#f4f4f4">   
     <div class="row g-3 p-2">
    <div class="col-md-3">
    <div class="bg-image card d-flex justify-content-center align-items-center" style="background-image: url('../images/bar_graph2.jpg');">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.4);">
        <div class="card-body">
            <h5 class="card-title text-light">Home Loan</h5>
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
    <div class="col-md-3">
    <div class="bg-image card d-flex justify-content-center align-items-center" style="background-image: url('../images/bar_graph2.jpg');">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.4);">
        <div class="card-body">
            <h5 class="card-title text-light">Car Loan</h5>
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
    <div class="col-md-3">
    <div class="bg-image card d-flex justify-content-center align-items-center" style="background-image: url('../images/bar_graph2.jpg');">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.4);">
        <div class="card-body">
            <h5 class="card-title text-light">Credit Card</h5>
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
    <div class=" col-md-3">
    <div class="bg-image card d-flex justify-content-center align-items-center" style="background-image: url('../images/pie_chart.jpg');">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.4);">
       
        <div class="card-body">
            <h5 class="card-title text-light">Personal Loan</h5>
            <p class="card-text text-light">
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
    </p>
    <form method="post" action="../view/product_catalog.php?action=pay" data-js-validate="true" data-js-highlight-state-msg="true" data-js-show-valid-msg="true">
    <button class="btn" type="submit" name="confirm" id="payBtn">Pay Now</button>
</form>
        </div>
    </div>
    </div>
    </div>
    </div>
</div>
</section>

<div class="modal" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Proccess Payment</h4>
            </div>
            <div class="modal-body">
                "Your about to make a online payment. Click 'Edit' to review the data before proceeding or click 'Continue' to confirm the details for payment."
                <button class="btn btn-default" data-dismiss="modal">Edit</button>
                <button class="btn btn-primary" id="continuebtn">Continue</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
