<?php 

function getTableData() {
    $database = BankDatabase::getInstance();
    $db = $database->connect();

    $query = "SELECT customer_id, surname, credit_score, is_active, exited FROM churn LIMIT 1000;";
    $statement = $db->prepare($query);
    $statement->execute();

    $rows = $statement->fetchAll();
    $statement->closeCursor();
    return $rows;

}

function getAvgCreditScore(){
    $database = BankDatabase::getInstance();
    $db = $database->connect();

    $query = "SELECT age, avg(credit_score) as credit_score FROM churn GROUP BY age;";
    $statement = $db->prepare($query);
    $statement->execute();

    $rows = $statement->fetchAll();
    $statement->closeCursor();
    return $rows;
}

?>