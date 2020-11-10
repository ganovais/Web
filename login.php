<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="auth.php" method="post">
        <input  type="hidden" name="auth" value="0">
        <label>E-mail:</label>
        <input type="mail" name="email">
        <br>
        <label>Senha:</label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>