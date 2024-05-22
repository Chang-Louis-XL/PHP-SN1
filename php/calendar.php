<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            border: 3px double blue;
        }

        td {
            padding: 5px 10px;
            border: 1px solid lightgreen;

        }

        .block-table {
            width: 380px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .item {
            margin-left: -1px;
            margin-top: -1px;
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 1px solid lightgreen;
            position: relative;
            transition: all 0.3s;
            background: white;
        }

        .item-header {
            margin-left: -1px;
            margin-top: -1px;
            display: inline-block;
            width: 50px;
            height: 25px;
            border: 1px solid lightgreen;
            text-align: center;
            background-color: darkgreen;
            color: lightgreen
        }

        .item:hover {
            background: yellow;
            transform: scale(1.3);
            font-weight: bold;
            color: blue;
            transition: all 0.3s;
            z-index: 10;

        }

        .holiday {
            background: pink;
        }

        .nav {
            display: inline-block;
            width: 32.5%;
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <h2 style='width:384px;text-align:center'>萬年曆</h2>

    <?php
    // if(isset($_GET['month'])){
    //     $month=$_GET['month'];
    // }else{
    // $month=date('m');
    // }
    // 三元運算式 $month = XXX ?(是否為?) true->值給$month
    // $month=(isset($_GET['month']))?$_GET['month']:date("m");
    // $year=(isset($_GET['year']))?$_GET['year']:date("Y");
    // 簡化方式只能用在isset並且只有一總情境
    
    //$month=(isset($_GET['month']))?$_GET['month']:date("m");    
    $month = $_GET['month'] ?? date("m");
    //$year=(isset($_GET['year']))?$_GET['year']:date("Y");
    $year = $_GET['year'] ?? date("Y");
    $firstDay = strtotime(date("$year-$month-1"));
    $firstWeekStartDay = date("w", $firstDay);
    $days = date("t", $firstDay);
    $lastDay = strtotime(date("Y-$month-$days"));

    $days = [];
    for ($i = 0; $i < 42; $i++) {
        // 它用來計算當前迭代的次數 $i 與該月的第一天是星期幾 $firstWeekStartDay 之間的差，以便找到該格子對應的日期，如$i等於0時與 $firstWeekStart 為-3代表$i與$firstWeekStart的差值。
        $diff = $i - $firstWeekStartDay;
        // strtotime("$diff days", $firstDay):它接受一個日期字串和一個參考日期（在這裡是 $firstDay），並返回一個Unix時間戳。在這個例子中，日期字串是 "$diff days"，其中 $diff 是表示相對於參考日期的天數差。這樣就可以得到 $firstDay 之後或之前若干天的日期的Unix時間戳。
        $days[] = date("Y-m-d", strtotime("$diff days", $firstDay));
    }

    if ($month - 1 < 1) {
        $prev = 12;
        $prev_year = $year - 1;
    } else {
        $prev = $month - 1;
        $prev_year = $year;
    }

    if ($month + 1 > 12) {
        $next = 1;
        $next_year = $year + 1;

    } else {
        $next = $month + 1;
        $next_year = $year;
    }

    ?>
    <div style="width:384px;">
        <div class="nav" style="text-align: left;">
            <!-- 傳至calendar.php?month；<=($month-1);?>代表echo出這個值；style=為往左 -->
            <a href="calendar.php?year=<?= $prev_year; ?>&month=<?= $prev; ?>">上一個月</a>

        </div>
        <div class="nav" style="text-align: center;">

            <?= $year; ?>年 <?= $month; ?>月
        </div>
        <div class="nav" style="text-align: right;">
            <a href="calendar.php?year=<?= $next_year; ?>&month=<?= $next; ?>">下一個月</a>

        </div>
    </div>

    <?php

    echo "<div class='block-table'>";
    echo "<div class='item-header'>日</div>";
    echo "<div class='item-header'>一</div>";
    echo "<div class='item-header'>二</div>";
    echo "<div class='item-header'>三</div>";
    echo "<div class='item-header'>四</div>";
    echo "<div class='item-header'>五</div>";
    echo "<div class='item-header'>六</div>";
    foreach ($days as $day) {
        $format = explode("-", $day)[2];
        $w = date("w", strtotime($day));
        if ($w == 0 || $w == 6) {

            echo "<div class='item holiday'>$format</div>";
        } else {

            echo "<div class='item'>";
            echo "<div class='date'>$format</div>";
            echo "</div>";
        }
    }
    echo "</div>";

    ?>


    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</body>


</html>