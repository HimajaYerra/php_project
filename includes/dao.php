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

function updateTableRow($customer_id, $surname, $credit_score, $is_active, $exited) {
    $database = BankDatabase::getInstance();
    $db = $database->connect();

    $query = "UPDATE churn SET surname=:surname, credit_score=:credit_score, is_active=:is_active, exited=:exited WHERE customer_id=:customer_id;";
    $statement = $db->prepare($query);
    $statement->bindValue(":customer_id", $customer_id);
    $statement->bindValue(":surname", $surname);
    $statement->bindValue(":credit_score", $credit_score);
    $statement->bindValue(":is_active", $is_active);
    $statement->bindValue(":exited", $exited);
    $statement->execute();
    $statement->closeCursor();
    return 0;
    //return $statement->rowCount();
}

?>