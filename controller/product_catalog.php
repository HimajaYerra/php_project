<?php 
require '../includes/database.php';
require '../includes/dao.php';


$action = filter_input(INPUT_POST,'action');
if($action == NULL){
    $action = filter_input(INPUT_GET,'action');
    if($action == NULL){
        $action = 'show_catalog';
    }
}
if($action == 'pay'){
    include '../view/product_catalog.php';
}
if($action == 'show_catalog'){
    include '../view/product_catalog.php';
}