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

function getUsernames() {
    $database = BankDatabase::getInstance();
    $db = $database->connect();

    $query = "SELECT surname FROM churn LIMIT 1000;";
    $statement = $db->prepare($query);
    $statement->execute();

    $rows = $statement->fetchAll();
    $statement->closeCursor();
    return $rows;

}

// Per country total customers
function getTotalCustomersDataPerCountry() {
    $database = BankDatabase::getInstance();
    $db = $database->connect();

    $query = "SELECT geography, gender, count(gender) AS total FROM churn GROUP BY geography, gender;";
    //$query = "SELECT geography, COUNT(*) AS total, SUM(CASE WHEN gender = 'Male' THEN 1 ELSE 0 END) AS male, SUM(CASE WHEN gender = 'Female' THEN 1 ELSE 0 END) AS female FROM churn GROUP BY geography;";
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
    //return 0;
    return $statement->rowCount();
}

function getMinMaxSalary() {
    $database = BankDatabase::getInstance();
    $db = $database->connect();

    $query = "SELECT geography, MIN(est_salary) as min_salary, MAX(est_salary) as max_salary, AVG(est_salary) as avg_salary FROM churn GROUP BY geography;";

    $statement = $db->prepare($query);
    $statement->execute();

    $rows = $statement->fetchAll();
    $statement->closeCursor();
    return $rows;
}

function getCustomersPerCountry() {
    $database = BankDatabase::getInstance();
    $db = $database->connect();

    $query = "SELECT geography, COUNT(customer_id) as total_customers from churn GROUP BY geography;";
    
    $statement = $db->prepare($query);
    $statement->execute();

    $rows = $statement->fetchAll();
    $statement->closeCursor();
    return $rows;
}

function getCustomerCountWithCreditCardPerCountry() {
    $database = BankDatabase::getInstance();
    $db = $database->connect();

    $query = "SELECT geography, COUNT(has_crcard) as total_customers_with_crcard from churn WHERE has_crcard = 1 GROUP BY geography;";
    
    $statement = $db->prepare($query);
    $statement->execute();

    $rows = $statement->fetchAll();
    $statement->closeCursor();
    return $rows;
}

function deleteTableRow($customer_id) {
    $database = BankDatabase::getInstance();
    $db = $database->connect();

    $query = "DELETE FROM churn WHERE customer_id=:customer_id;";
    $statement = $db->prepare($query);
    $statement->bindValue(":customer_id", $customer_id);
   
    $statement->execute();
    $statement->closeCursor();
    //return 0;
    return $statement->rowCount();
}

?>