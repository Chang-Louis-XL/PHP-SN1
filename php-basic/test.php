<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'courier new', courier, monospace;
        }
    </style>
</head>

<body>

    <h2>建立一個學生成績陣列</h2>


    <?php
    $a = ['judy', 'amo', 'john', 'peter', 'hebe'];

    $b = [
        '國文' => [95, 88, 45, 59, 71],
        '英文' => [64, 78, 60, 32, 62],
        '數學' => [70, 54, 68, 77, 80],
        '地理' => [90, 81, 70, 54, 62],
        '歷史' => [84, 71, 62, 42, 64],
    ];

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo $a[$i];
        }



    }


    echo "<table border='1'>";

    // 輸出標題行
    echo "<tr>";
    echo "<th>名字</th>"; // 顯示名字標題
    foreach (array_keys($b) as $subject) {
        echo "<th>$subject</th>"; // 顯示科目標題
    }
    echo "</tr>";

    // 輸出成績
    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        echo "<td>{$a[$i]}</td>"; // 顯示名字
        foreach ($b as $subjectScores) {
            echo "<td>{$subjectScores[$i]}</td>"; // 顯示每個科目的分數
        }
        echo "</tr>";
    }
    // 使用 HTML 表格結束
    echo "</table>";




    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>

    <style>
        .bolck-table {
            display: flex;
            width: 380px;
            flex-wrap: wrap;
        }

        .item {
            margin-left: -1px;
            margin-top:-1px;
            width: 50px;
            height: 50px;
            border: 1px solid lightgreen;
            background: white;
        }
        .item:hover{
            transform : scale(1.3);
            background:yellow;
            font-weight: bold;
            color:blue;
            transition:  0.3s;
        }

        .item-header{
            margin-left:-1px;
            margin-top:-1px;
            width: 50px;
            height: 25px;
            border: 1px solid lightgreen;
            background-color: darkgreen;
            text-align: center;
            display:inline-block;
            color:lightgreen
        }

    .holiday{
        background-color: pink;
    }
    </style>

    <?php



    echo "<div class='bolck-table'>";
    echo "<div class = 'item-header'>日</div>";
    echo "<div class = 'item-header'>一</div>";
    echo "<div class = 'item-header'>二</div>";
    echo "<div class = 'item-header'>三</div>";
    echo "<div class = 'item-header'>四</div>";
    echo "<div class = 'item-header'>五</div>";
    echo "<div class = 'item-header'>六</div>";

    $month = 4;
    $firstday = strtotime(date("Y-$month-1"));
    $firstWeekStartDay = date("w", $firstday);


    $days = [];
    for ($i = 0; $i < 42; $i++) {
        $diff = $i - $firstWeekStartDay;
        $days[] = date("Y-m-d", strtotime("$diff days", $firstday));
    }

   foreach ($days as $day) {
        $format = explode("-", $day)[2];
        $w = date("w", strtotime($day));
        if ($w == 0 || $w == 6) {
            echo "<div class= 'item holiday'>$format</div>";
        } else {
           echo "<div class = 'item'>$format</div>";
       }
   }

    echo "</div>";
    ?>






</body>

</html>