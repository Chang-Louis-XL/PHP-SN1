<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>

<body>
    <h1>陣列</h1>
    <?php
    $a = ["A", "B", "C"];
    $b = ["name" => "劉勤永", "hight" => 169];
    $c = [["A", "B", "C"], ["name" => "劉勤永", "hight" => 169]];
    print_r($a);
    echo "<hr>";
    print_r($b);
    echo "<hr>";
    print_r($c);

    echo "<hr>";

    //儲存在硬碟中，必須要換成字串，否則陣列僅能存為記憶體中。
    echo serialize($a);
    echo "<hr>";
    echo serialize($b);
    echo "<hr>";
    echo serialize($c);

    echo "<hr>";


    $a = ['A', 'B', 'C'];
    // $tmp=implode(","$a) 新版改為join
    $tmp = join(",", $a);
    echo $tmp;

    echo "<hr>";
    //explode，自動用逗號分配字串
    $b = explode(",", $tmp);
    print_r($b);
    ?>

    <h2>練習</h2>
    $a=['國文'=>[
    [judy=>95]
    [amo=>88]
    [jojh=>45]
    ]
    ]
    <h2>利用程式來產生陣列</h2>
    <ul>
        <li>以迴圈的方式產生一個九九乘法表</li>
        <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
        <li>再以迴圈方式將陣列內容印出</li>
    </ul>
    <?php
    $ninenine = [];
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            //echo "$i x $j = ".($i*$j);
            $ninenine[] = "$i x $j = " . ($i * $j);
        }
    }

    // "<pre>"請把標籤中的內容依原狀況呈現(如原始碼)
    // echo "<pre>";
    // print_r($table9x9);
    // echo "</pre>";
    
    $i = 1;
    // foreach把$ninenine陣列裡面的每一個值取出至$nine。 
    foreach ($ninenine as $nine) {
        echo $nine;
        if ($i % 9 == 0) {
            echo "<br>";
        }
        $i++;
    }
    echo "<hr>";

    ?>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid gray;
            padding: 5px 10px;
        }
    </style>
    <?php
    echo "<table>";
    // $idx 代表索引值為陣列的位置值，$nine 代表KEY值，因上方的 $table9x9[]每一次都會加1，所以不用i++。
    foreach ($ninenine as $idx => $nine) {

        if ($idx % 9 == 0) {
            echo "<tr>";
            // 因印出為$idx屬於KEY值，所以第一個數為0的餘數仍是0。
        }

        echo "<td> $nine </td>";
        // 代表第8時因為8+1=9 %9=0，列印出</tr>
        if (($idx + 1) % 9 == 0) {
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "陣列中有" . count($ninenine) . "個元素";
    ?>
    <h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
    <ol>
        <li>使用亂數函式rand($a,$b)來產生號碼</li>
        <li>將產生的號碼順序存入陣列中</li>
        <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
        <li>完成選號後將陣列內容印出</li>
    </ol>

    <?php
    // 1.亂數產生數字
    // 2.環圈產生6個1~38數字
    // 3.比較數字
    // 4.陣列存放數字，並存放不重複的數字
    // 5.並與先前陣列內容作比較
    
    $lotto = [];
    //count計算key的總和
    while (count($lotto) < 6) {
        $tem = rand(1, 38);
        // 如果沒在陣列裡，就加入陣列
        if (!in_array($tem, $lotto)) {
            $lotto[] = $tem;
        }
    }
    echo join(",", $lotto);
    echo "<hr>";
    ?>

    <h2>找出五百年內的閏年</h2>

    <ul>
        <li>請依照閏年公式找出五百年內的閏年</li>
        <li>使用陣列來儲存閏年</li>
        <li>使用迴圈來印出閏年</li>
    </ul>
    <?php
    $leaps = [];
    $year = 2024;
    for ($i = $year; $i < ($year + 500); $i++) {
        if ($i % 4 == 0 && $i % 100 != 0 || $i % 400 == 0) {
            $leaps[] = $i;
        }
    }

    echo "<h3>自$year 至" . ($year + 500) . "止，有以下閏年：</h3>";
    foreach ($leaps as $leap) {
        echo $leap;
        echo "<br>";
    }
    echo "<hr>";
    echo "共有" . count($leaps) . "個閏年"
        ?>

    <?php
    $sky = [4 => '甲', 5 => '乙', 6 => '丙', 7 => '丁', 8 => '戊', 9 => '己', 0 => '庚', 1 => '辛', 2 => '壬', 3 => '癸'];
    $land = [4 => '子', 5 => '丑', 6 => '寅', 7 => '卯', 8 => '辰', 9 => '巳', 10 => '午', 11 => '未', 0 => '申', 1 => '酉', 2 => '戌', 3 => '亥'];
    $year = 1958;

    echo "西元年" . $year;

    $t1 = $sky[$year % 10];
    $t2 = $land[$year % 12];

    echo "為$t1$t2 年";

    ?>
    <h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>
    <ul>
        <li>
            例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]
        </li>
    </ul>
    <?php

    $a = [2, 4, 6, 1, 8];

    echo "原陣列為:[" . join(',', $a) . "]<br>";

    // count 計算陣列個數，ceil 無條件進位。
    for ($i = 0; $i < ceil(count($a) / 2); $i++) {
        $tmp = $a[$i];
        // 因反轉值剛好為目前陣列個素總和-1-目前i值。比如i=0 5-1-0=4，所以4的key值為8，所以key0 與 key8對換。

        $a[$i] = $a[count($a) - 1 - $i];
        $a[count($a) - 1 - $i] = $tmp;
    }

    echo "交換後為:[" . join(',', $a) . "]<br>";

    // array_reverse 為函式，陣列反轉工具。
    echo "交換後為:[" . join(',', array_reverse($a)) . "]<br>";

    ?>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</body>

</html>