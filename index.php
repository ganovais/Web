<?php

// require 'Animalsas.php';
// include 'Animal.php';

// print('Hello World!!');

require "DB.php";
session_start();
// $conn->query(
//     "CREATE TABLE produtos (
//         id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         nome VARCHAR(255),
//         preco DOUBLE(7,2) 
//     )"
// );

// $conn->query(
//     "CREATE TABLE users (
//         id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         email VARCHAR(255),
//         password VARCHAR(100)
//     )"
// );

// $conn->query(
//     "INSERT INTO produtos (nome, preco) VALUES ('Cama', '300.30')"
// );

// $conn->query(
//     "UPDATE produtos SET nome = 'Armario', preco = 200.20 WHERE id = 1"
// );

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esoftgraf</title>
</head>
<body>

    <?php include 'header.php' ?>

    <?php
    if(isset($_SESSION['id'])) {
    ?>
        <p>Olá 
            <b>
            <?= htmlspecialchars($_SESSION['email']) ?>
            </b>
        </p>
        <a href="logout.php">Sair</a>
    <?php
    } else {
    ?>
    <a href="login.php">Login</a>
    <?php
    }
    ?>

    <h2>Meu subtitulo</h2>

    <p>Hoje é dia: <?= date("d-m-Y") ?></p>
    
    <form action="request.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="name">
        <input type="submit">
    </form>


    <form action="request.php" method="GET">
        <label>Nome:</label>
        <input type="text" name="name">
        <input type="submit">
    </form>

    <form action="produto.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="name">
        <label>Preço</label>
        <input type="number" name="price">
        <input type="submit">
    </form>

    <?php
        $produtos = $conn->query(
            "SELECT preco, nome FROM produtos"
        )->fetchAll();

        foreach ($produtos as $produto) {
            echo "<b>Nome do produto:</b> " . $produto['nome'];
            print('<br>');
            echo "<b>Preço do produto:</b> " . $produto['preco'];
            print('<br>');
            print('<br>');
        }

        $produto = $conn->query(
            "SELECT * FROM produtos WHERE id = 1"
        )->fetch();

        // var_dump($produto);
        // echo $produto["nome"];

    ?>

    
</body>
</html>