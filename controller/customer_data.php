<?php 
require '../includes/database.php';
require '../includes/dao.php';
$employees = getTableData();
?>
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
        <script>
            $(document).ready(function() {
                /*
                $('#edit-modal').dialog({
                    autoOpen: false,
                    position: {
                        my: "center",
                        at: "center"
                    }
                });

                // Add event listener to edit buttons
                $('.edit-button').on('click', function() {
                    var row = $(this).closest('tr');
                    var customer_id = row.find('td:eq(0)').text();
                    var surname = row.find('td:eq(1)').text();
                    var credit_score = row.find('td:eq(2)').text();
                    var is_active = row.find('td:eq(3)').text();
                    var exited = row.find('td:eq(4)').text();
  
                    // Fill input fields in the pop-up with the row values
                    $('#customer_id-input').val(customer_id);
                    $('#surname-input').val(surname);
                    $('#credit_score-input').val(credit_score);
                    $('#is_active-input').val(is_active);
                    $('#exited-input').val(exited);

                    // Open the pop-up
                    $('#edit-modal').dialog('open');
                });

                // Add event listener to save button in the pop-up
                $('#save-btn').on('click', function() {
                    // Get the new values
                    var newCustomerId = $('#customer_id-input').val();
                    var newSurname = $('#surname-input').val();
                    var newCreditScore = $('#credit_score-input').val();
                    var newIsActive = $('#is_active-input').val();
                    var newExited = $('#exited-input').val();


                    // Update the cells in the table with the new values

                    // Close the pop-up
                    $('#edit-modal').hide();    
                });
                */
            });
        </script>

        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
        <script src="../app.js"></script>
    </head>
    <body>
        <header>
            <?php include '../header.php'; ?>
        </header>
        <main>
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
                <div id="edit-modal" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <form action="" method="post">
                                <label for="customer_id-input">Customer ID</label><br>
                                <input type="text" id="customer_id-input" name="customer_id-input"><br>

                                <label for="surname-input">Surname</label><br>
                                <input type="text" id="surname-input" name="surname-input"><br><br>

                                <label for="credit_score-input"></label><br>
                                <input type="text" id="credit_score-input" name="credit_score-input"><br><br>

                                <label for="is_active-input"></label><br>
                                <input type="text" id="is_active-input" name="is_active-input"><br><br>

                                <label for="exited-input"></label><br>
                                <input type="text" id="exited-input" name="exited-input"><br><br>

                                <input type="submit" value="Submit">
                            </form> 
                            <?php 
                                $newCustomerId = filter_input(INPUT_POST, "customer_id-input", FILTER_VALIDATE_INT);
                                $newSurname = filter_input(INPUT_POST, "surname-input");
                                $newCreditScore = filter_input(INPUT_POST, "credit_score-input");
                                $newIsActive = filter_input(INPUT_POST, "is_active-input");
                                $newExited = filter_input(INPUT_POST, "exited-input");
                                if (updateTableRow($newCustomerId, $newSurname, $newCreditScore, $newIsActive, $newExited) == 1) {
                                    echo '<script>parent.window.location.reload(true);</script>';
                                } else {
                                    echo '<script>alert("Update failed!")</script>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
        </main>
        <footer>
            <?php include '../footer.php'; ?>
        </footer>
    </body>
</html>