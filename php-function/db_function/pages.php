<?php include_once "base.php" ; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>分頁</title>
</head>
<body>
    <?php
        $total=$Student->count();
        $div=20;
        $pages=ceil($total / $div) ;
        $now=(isset($_GET))

    ?>
</body>
</html>