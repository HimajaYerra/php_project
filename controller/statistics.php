<?php 

require '../includes/database.php';
require '../includes/dao.php';

$action = filter_input(INPUT_POST,'action');
if($action == NULL){
    $action = filter_input(INPUT_GET,'action');
    if($action == NULL){
        $action = 'show_stats';
    }
}

if($action == 'show_stats'){
    $count_data = getTotalCustomersDataPerCountry();
    $array_data = array();
    $country_data = array();
    $male_data = array();
    $female_data = array();
    $total_data = array();
    
    $countries = array();
    $countries = array_column($count_data, 'geography');
    $countries = array_unique($countries);

    foreach($count_data as $row_data):
        $array_data[$row_data['geography']][$row_data['gender']]=$row_data['total'];
    endforeach;

    foreach($array_data as $key=> $value):
        array_push($country_data, $key);
        array_push($male_data, $value['Male']);
        array_push($female_data, $value['Female']);
        array_push($total_data, $value['Male'] + $value['Female']);
    endforeach;

    $credit_data = getAvgCreditScore();
    $labels= array();
    $data = array();
    foreach ($credit_data as $row_data) :
        $labels[] = $row_data['age'];
        $data[] = $row_data['credit_score'];
    endforeach;

    $salary_data = getMinMaxSalary();
    $salary_country_data = array();
    $salary_min_data = array();
    $salary_max_data = array();
    $salary_avg_data = array();
    foreach ($salary_data as $row_data):
        array_push($salary_country_data, $row_data['geography']);
        array_push($salary_min_data, $row_data['min_salary']);
        array_push($salary_max_data, $row_data['max_salary']);
        array_push($salary_avg_data, $row_data['avg_salary']);
    endforeach;

    $customers_per_country_data = getCustomersPerCountry();
    $customers_per_country_countries = array();
    $customers_per_country_count = array();
    foreach ($customers_per_country_data as $row_data):
        array_push($customers_per_country_countries, $row_data['geography']);
        array_push($customers_per_country_count, $row_data['total_customers']);
    endforeach;

    $customers_with_credit_card_per_country_data = getCustomerCountWithCreditCardPerCountry();
    $customers_with_credit_card_countries = array();
    $customers_with_credit_card_count = array();
    foreach ($customers_with_credit_card_per_country_data as $row_data):
        array_push($customers_with_credit_card_countries, $row_data['geography']);
        array_push($customers_with_credit_card_count, $row_data['total_customers_with_crcard']);
    endforeach;

    include '../view/statistics.php';
}