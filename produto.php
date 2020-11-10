<?php
require 'DB.php';

print($_POST['name']);
print($_POST['price']);
$conn->query(
    "INSERT INTO produtos (nome, preco)
    VALUES ('" 
    . $_POST['name'] . "',
    '" . $_POST['price'] .  "' )"
);