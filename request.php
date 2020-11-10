<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>
<body>
    
    <?php
        if(isset($_POST['name'])) {
    ?>

    <p>Olá com post <?php echo($_POST['name']) ?></p>
    <p>Olá com post-request <?php echo($_REQUEST['name']) ?></p>

    <?php
        }
    ?>

    <?php
        if(isset($_GET['name'])) {
    ?>    
    <p>Olá com get <?php echo($_GET['name']) ?></p>
    <p>Olá com get-request <?= $_REQUEST['name'] ?></p>
    <?php
        }
    ?>
</body>
</html>