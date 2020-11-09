<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <?php

        require 'Animal.php';
        require 'Connection.php';

        $stmt = $db->query("SELECT * FROM blogs");
        $blogs = $stmt->fetchAll();
        print('<br>');
        // var_dump($blogs);
        print('<br>');
        print('<br>');
        print('<br>');
        foreach ($blogs as $blog) {
            print('Description:  ' . $blog['description']);
        }
    ?>

    <form action="request.php" method="post">
        <input type="text" name="name">
        <input type="submit">
    </form>

    <form action="request-get.php" method="get">
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>

</html>