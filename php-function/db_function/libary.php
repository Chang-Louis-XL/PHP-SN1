<?php

echo sum(10, 25 , 30 , 34);

function sum(...$args)
{
    $sum = 0;
    foreach ($args as $arg) {
        $sum += $arg;
    }

    print_r($args);
    return $sum;
}



/**
 * 在頁面上快速顯示陣列內容
 * direct dump = dd
 * @param $array 輸入的參數需為陣列
 */
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


// 預設使用
// ($shape = '正三角形',$stars=7)

function stars($shape = '正三角形', $stars = 7)
{
        switch ($shape) {
        case "正三角形":
        case 'equilateral triangle':
            for ($i = 0; $i < $stars; $i++) {
                for ($k = 0; $k < $stars - 1 - $i; $k++) {
                    echo "&nbsp;";
                }

                for ($j = 0; $j < $i * 2 + 1; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
        case '菱形':
        case '2':
            $odd = ($stars % 2 == 0) ? $stars + 1 : $stars;
            $mid = (($odd + 1) / 2) - 1;
            $tmp = 0;
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
            break;
        case '矩形':
        case '3':
            for ($i = 0; $i < $stars; $i++) {
                for ($j = 0; $j < 7; $j++) {
                    if ($i == 0 || $i == $stars - 1) {
                        echo "*";
                    } else if ($j == 0 || $j == $stars - 1) {
                        echo "*";
                    } else {
                        echo "&nbsp;";
                    }
                }
                echo "<br>";
            }
            break;
    }
}
?>