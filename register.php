<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Cadastrar</h1>
    <form action="auth.php" method="post">
        <input  type="hidden" name="auth" value="1">
        <label>E-mail:</label>
        <input type="mail" name="email">
        <br>
        <label>Senha:</label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>