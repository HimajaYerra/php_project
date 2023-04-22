<?php 
require '../includes/database.php';
require '../includes/dao.php';
$employees = getTableData();

?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="../main.css">

<?php include '../header.php'; ?>
<section id="card">
<div class="container">
    <div class="row">
        <table id="data_table" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Customer Id</th>
                <th>Surname</th>
                <th>Credit Score</th>
                <th>Is Active</th>
                <th>Exited</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <?php 
            

            foreach ($employees as $employee):
                
        ?>

        <tr>
            <td><?php echo $employee['customer_id'];?></td>
            <td><?php echo $employee['surname'];?></td>
            <td><?php echo $employee['credit_score'];?></td>
            <td><?php echo $employee['is_active'];?></td>
            <td><?php echo $employee['exited'];?></td>
            <td class="text-center">
                <i class="text-info bi bi-pencil-fill" style="cursor:pointer"></i>

            </td>
            <td class="text-center">
                <i class="text-info bi bi-trash" style="cursor:pointer"></i>

            </td>        
        </tr>
        <?php
            endforeach;
        ?>

        </table>
    </div>
</div>
</div>
</section>

<?php include '../footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.3.js" 
integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" 
crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="../app.js"></script>