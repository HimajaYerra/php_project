<?php
require '../includes/database.php';
require '../includes/dao.php';

$count_data = getTotalCustomersDataPerCountry();
$country_data = array();
$male_data = array();
$female_data = array();
$total_data = array();
foreach($count_data as $row_data):
    $country_data[] = $row_data['geography'];
    $male_data[] = $row_data['male'];
    $female_data[] = $row_data['female'];
    $total_data[] = $row_data['total'];
endforeach;

?>