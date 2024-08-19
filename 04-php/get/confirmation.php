<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo $_GET;
    print_r($_GET);
    ?>

    <h1>
        Hello
        <?php echo $_GET['username2'] ?> and your ID is  <?php echo $_GET['id2'] ?>
    </h1>
</body>
</html>