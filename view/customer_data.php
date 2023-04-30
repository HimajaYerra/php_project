<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customer Data</title>
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/style.css">
        
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
        

        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
        <script src="../app.js"></script>
    </head>
    <body>
        <header>
            <?php include '../header.php'; ?>
        </header>
        <main style="background-color:#f4f4f4">
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

                            <?php foreach ($employees as $employee): ?>
                            <tr>
                                <td><?php echo $employee['customer_id'];?></td>
                                <td><?php echo $employee['surname'];?></td>
                                <td><?php echo $employee['credit_score'];?></td>
                                <td><?php echo $employee['is_active'];?></td>
                                <td><?php echo $employee['exited'];?></td>
                                <td class="text-center">
                                    <i class="edit-button bi bi-pencil-fill" style="cursor:pointer"></i>
                                </td>
                                <td class="text-center">
                                    <i class="delete-button bi bi-trash" style="cursor:pointer"></i>
                                </td>        
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>


                

                <div id="edit-modal" tabindex="-1" role="dialog" class="text-dark" style="background-color: #f4f4f4;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-3">
                            <form action="?action=edit" method="post">
                                <label for="customer_id-input">Customer ID</label><br>
                                <input type="text" id="customer_id-input" name="customer_id-input"><br>

                                <label for="surname-input">Surname</label><br>
                                <input type="text" id="surname-input" name="surname-input"><br>

                                <label for="credit_score-input">Credit score</label><br>
                                <input type="text" id="credit_score-input" name="credit_score-input"><br>

                                <label for="is_active-input">Is Active</label><br>
                                <input type="text" id="is_active-input" name="is_active-input"><br>

                                <label for="exited-input">Exited</label><br>
                                <input type="text" id="exited-input" name="exited-input"><br>

                                <p><button type="submit" name="submit" class="btn btn-success " value="Submit">Save</button>
                                <button type="submit" name="close" class="btn btn-danger" value="Close">Close</button></p>

                            </form> 
                        
                           
                        
                    </div>
                </div>
                
        </main>
        <footer>
            <?php include '../footer.php'; ?>
        </footer>
    </body>
</html>
