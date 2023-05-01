<?php 
require '../includes/database.php';
require '../includes/dao.php';



$action = filter_input(INPUT_POST,'action');
if($action == NULL){
    $action = filter_input(INPUT_GET,'action');
    if($action == NULL){
        $action = 'show_catalog';

    }
    $users = array();
    $employees = getUsernames();
    foreach($employees as $user):
        $users[] = $user['surname'];
    endforeach;
}
if($action == 'pay'){
    $employees = getTableData();
    $test = 'hi';
    //include '../view/product_catalog.php';
}
if($action == 'show_catalog'){
    include '../view/product_catalog.php';
}

if($action == 'email'){
    if(isset($_POST['users'])){
        $user = $_POST['users'];
    }
    echo $user;
    include '../view/product_catalog.php';
    
}