<?php

$username = "root";
$password = "root";
$hostname = "localhost";
$dbname = "Estagil";

//connection to the database
try {
    //$conn = new PDO("mysql:host=localhost;dbname=Estagil", $username, $password);
    $conn = new PDO("mysql:host=localhost>:3306;dbname=Estagil", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection with database failed: " . $e->getMessage();
    }
?>
