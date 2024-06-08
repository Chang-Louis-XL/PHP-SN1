<?php include_once "base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>分頁</title>
</head>

<body>
    <?php
    $total = $Student->count();
    
    // 這行定義每页要显示的学生数量为 20。
    $div = 20;

     // - 這行計算總頁數。`ceil()` 函数的作用是向上取整，确保能显示所有学生。
    $pages = ceil($total / $div);
   
    //  獲取當前頁碼 (預設為 1)
    // - 這行獲取 URL 參數 `p` 的值，代表當前頁碼。
    // - 如果 `p` 不存在於 URL 中，則將 `$now` 設置為默認值 1。
    // - 兩個 `??` 運算符號表示空值 coalescing 運算子，它会优先返回第一个非空的操作数。
    $now = $_GET['p'] ?? 1;
    // 
    $start = ($now - 1) * $div;
    $rows = $Student->all([], " limit $start,$div");

    foreach ($rows as $idx => $row) {
        echo ($idx + 1) . '=>' . $row['name'] . "<br>";
    }


    ?>
    <hr>


    <?php

    if ($now - 1 > 0) {
        echo "<a href='?p=" . ($now - 1) . "'> < </a>";
    }

    for ($i = 1; $i <= $pages; $i++) {
        echo "<a href='?p=$i'> $i </a>";
    }

    if ($now + 1 <= $pages) {
        echo "<a href='?p=" . ($now + 1) . "'> > </a>";
    } else {
        echo ' > ';
    }

    ?>
</body>

</html>