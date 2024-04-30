<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>畫星星</title>
    <style>
        /* 讓字形大小相同 */
        * {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <h2>直角三角形</h2>

    <?php
    $stars = 7;

    for ($i = 0; $i < $stars; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    // i=0 j=1 加一顆
// i=1 j=2 加兩顆
    
    ?>
    <h2>倒直角三角形</h2>

    <?php
    for ($i = $stars; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    ?>
    <h2>正三角形</h2>

    <?php
    //外圍for為攔，第一個內為for為列，反應空白，第二個內為。
    
    for ($i = 0; $i < $stars; $i++) {
        for ($k = 0; $k < $stars - 1 - $i; $k++) {
            echo "&nbsp;";
        }

        for ($j = 0; $j < $i * 2 + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    ?>


    <hr>
    <h2>菱形(2個迴圈)</h2>

    <?php
    $stars = 5;
    for ($i = 0; $i < $stars; $i++) {

        for ($k = 0; $k < $stars - 1 - $i; $k++) {
            echo "&nbsp;";
        }

        for ($j = 0; $j < $i * 2 + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    for ($i = $stars - 1; $i > 0; $i--) {
        for ($k = 0; $k < $stars - $i; $k++) {
            echo "&nbsp";
        }

        for ($j = 0; $j < $i * 2 - 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>

    <hr>
    <h2>菱形(簡化迴圈)</h2>

    <?php

    $stars = 7;

    // 星星%2若等於0，?判斷式，若星星是就加1，若不是就保持不變，代表此為基數。
    $odd = ($stars % 2 == 0) ? $stars + 1 : $stars;
    // 計算數與數的中間值，由於此計算方式為任何數值+1/2將會變成中間值，但由於系統從0開始計算，故最外圈-1。
    $mid = (($odd + 1) / 2) - 1;

    for ($i = 0; $i < $stars; $i++) {

        if ($i <= $mid) {
            $tmp = $i;
        } else {
            // 到此行當大於mid時為4，但此時tmp放入值為3，不再改變。
            $tmp--;/*tmp=tmp-1*/
        }

        for ($k = 0; $k < $mid - $tmp; $k++) {
            echo "&nbsp;";

        }
        echo $tmp;
        for ($j = 0; $j < $tmp * 2 + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>

    <h2>矩形</h2>
    <?php
    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            if ($i == 0 || $i == 6) {
                echo "*";
            } else if ($j==0 || $j==6){
                echo "*";
            }else {
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
    ?>

<h2>矩形含對角線</h2>
    <?php
    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            if ($i == 0 || $i == 6 || $j==$i || $j==6-$i) {
                echo "*";
            } else if ($j==0 || $j==6){
                echo "*";
            }else {
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
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