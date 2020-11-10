<?php

require 'DB.php';

if($_POST['auth']) {
    //register
    $password = hash('sha256', $_POST['password']);
    // print($_POST['password']);
    // print('<br>');
    // print($password);

    $user = $conn->query(
        "SELECT * FROM users WHERE email = " .
        "'" . $_POST['email'] . "'"
    )->fetch();

    if(empty($user)) {
        $conn->query(
            "INSERT INTO users (email, password)
            VALUES ('" 
            . $_POST['email'] . "',
            '" . $password .  "' )"
        );
        print('Usuário cadastrado com sucesso');
    } else {
        print('E-mail já cadastrado');
    }

} else {
    //login
    // print($_POST['password']);
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);

    $user = $conn->query(
        "SELECT * FROM users WHERE email = "
        . "'" . $email . "' AND password = " 
        . "'" . $password . "'"
    )->fetch();

    // print($user['id']);
    // print($user['email']);
    // print($user['password']);

    if(!empty($user)) {
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
    }

}
?>

<script>
    window.location.href = 'index.php'
</script>