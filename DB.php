<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=estoque", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Sucesso";

    return $conn;
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
