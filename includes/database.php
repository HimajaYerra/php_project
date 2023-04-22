<?php

$username = "root";
$password = "";

class BankDatabase {
    private $dsn = "mysql:host=localhost;dbname=v_bank";
    private static $instance = null;

    public static function getInstance() {
        return self::$instance == null ? new BankDatabase() : self::$instance ;
    }
    public function connect(){
        try {
            global $username;
            global $password;
            return new PDO($this->dsn, $username, $password);
        }
        catch (PDOException $e){
            $error = $e->getMessage();
            echo "<p>Error Message: $error </p>";
        }
    }
}

$database = BankDatabase::getInstance();
$db = $database->connect();
?>