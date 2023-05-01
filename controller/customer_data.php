<?php 
require '../includes/database.php';
require '../includes/dao.php';

$action = filter_input(INPUT_POST,'action');
if($action == NULL){
    $action = filter_input(INPUT_GET,'action');
    if($action == NULL){
        $action = 'show_customers';
    }
}
if($action == 'show_customers'){
    $employees = getTableData();
    include '../view/customer_data.php';
} else if($action == 'edit'){
    $newCustomerId = filter_input(INPUT_POST, "customer_id-input", FILTER_VALIDATE_INT);
    $newSurname = filter_input(INPUT_POST, "surname-input");
    $newCreditScore = filter_input(INPUT_POST, "credit_score-input");
    $newIsActive = filter_input(INPUT_POST, "is_active-input");
    $newExited = filter_input(INPUT_POST, "exited-input");
    if (updateTableRow($newCustomerId, $newSurname, $newCreditScore, $newIsActive, $newExited) == 1)
    {      
        $employees = getTableData();
        include "../view/customer_data.php";                               
    } 
    else {
        $employees = getTableData();
        include "../view/customer_data.php";
        echo "<script>alert('Error updating the row!');</script>";    
    }
}
?>

