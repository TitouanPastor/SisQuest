<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes badges</title>
</head>
<body>
    <h1>Vos badges </h1>
    <?php
        require_once('badges.php');
        $_SESSION['badges']->printBadges();
    ?>
</body>
</html>