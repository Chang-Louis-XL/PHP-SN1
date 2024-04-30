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
    </style>
</head>

<body>
    <h2>線上月曆製作</h2>
    <ul>
        <li>以表格方式呈現整個月份的日期</li>
        <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
        <li>嘗試以block box或flex box的方式製作月曆</li>
    </ul>

    <?php
    $month = 9;
    echo "月份:" . $month;
    echo "<br>";
    // ("Y-$month-1"):-1顯示每月的第一天
    $firstDay = strtotime(date("Y-$month-1"));
    //date括弧逗點的後面放判斷依據的值，前為呈現結果類型的值
    // ($firstweekstartday-1):確認每個月1號是禮拜幾
    $firstWeekStartDay = date("w", $firstDay);
    echo "第一周的開始是星期" . $firstWeekStartDay;
    // 查看該月有幾天
    $days = date("t", $firstDay);
    $lastDay = strtotime(date("Y-$month-$days"));
    echo "<br>";
    echo "最後一天是" . date("Y-m-d", $lastDay);
    /* 
    4  1  1 -0
    5  3  3 -2
    6  6  6 -5
    7  1  1 -0
    */
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            if ($i == 0 && $j >= $firstWeekStartDay) {
                echo "<td>";
                // ($firstweekstartday-1):確認每個月1號是禮拜幾
                // 若不是禮拜日，在1號前的變為空格
                echo $i * 7 + $j - ($firstWeekStartDay - 1);
                echo "</td>";
            } else if ($i > 0) {
                echo "<td>";
                if ($i * 7 + $j - ($firstWeekStartDay - 1) <= $days) {
                    echo $i * 7 + $j - ($firstWeekStartDay - 1);
                } else {
                    echo "&nbsp;";
                }
                echo "</td>";

            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }




    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            if ($i == 0 && $j >= $firstWeekStartDay) {
                echo "<td>";
                echo $i * 7 + $j - ($firstWeekStartDay - 1) . "<br>﹝i列" . $i . ",j欄" . $j . "﹞";
                echo "<br>" . $i . "*7+" . $j . "-(" . $firstWeekStartDay . "-1)";
                echo "</td>";
            } else if ($i > 0) {
                echo "<td>";
                if ($i * 7 + $j - ($firstWeekStartDay - 1) <= $days) {
                    echo $i * 7 + $j - ($firstWeekStartDay - 1) . "<br>﹝i列" . $i . ',j欄' . $j . "﹞";
                    echo "<br>" . $i . "*7+" . $j . "-(" . $firstWeekStartDay . "-1)";
                } else {
                    echo "&nbsp;";
                }
                echo "</td>";

            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";




    $month = 4;
    $year = date("Y");
    // 目前年份
    echo "年" . $year;
    echo "<BR>";
    // 目前月份
    echo "月份:" . $month;
    echo "<br>";
    $firstDay = strtotime(date("Y-$month-1"));
    $firstWeekStartDay = date("w", $firstDay);
    echo "第一周的開始是第" . $firstWeekStartDay . "日";
    $days = date("t", $firstDay);
    $lastDay = strtotime(date("Y-$month-$days"));
    echo "<br>";
    echo "最後一天是" . date("Y-m-d", $lastDay);
    $birthday = "1990-2-26";
    /* 
    4  1  1 -0
    5  3  3 -2
    6  6  6 -5
    7  1  1 -0
    */
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            // 把格內時間變成年-月-日
            $date = $year . '-' . $month . '-' . $i * 7 + $j - ($firstWeekStartDay - 1);
            if ($i == 0 && $j >= $firstWeekStartDay) {
                // 如果日期為0(等於禮拜日)或6(等於禮拜六)，即變色
                if (date("w", strtotime($date)) == 0 || date("w", strtotime($date)) == 6) {
                    echo "<td style='background-color:pink'>";
                } else {
                    echo "<td>";
                }
                echo $i * 7 + $j - ($firstWeekStartDay - 1);
                echo "</td>";
            } else if ($i > 0) {
                if (date("w", strtotime($date)) == 0 || date("w", strtotime($date)) == 6) {
                    echo "<td style='background-color:pink'>";
                } else {
                    echo "<td>";
                }
                if ($i * 7 + $j - ($firstWeekStartDay - 1) <= $days) {
                    echo $i * 7 + $j - ($firstWeekStartDay - 1);
                } else {
                    echo "&nbsp;";
                }
                echo "</td>";

            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";


    $month=4;
    $year=date("Y");
    echo "年".$year;
    echo "<BR>";
    echo "月份:".$month;
    echo "<br>";
    $firstDay=strtotime(date("Y-$month-1"));
    $firstWeekStartDay=date("w",$firstDay);
    echo "第一周的開始是第".$firstWeekStartDay."日";
    $days=date("t",$firstDay);
    $lastDay=strtotime(date("Y-$month-$days"));
    echo "<br>";
    echo "最後一天是".date("Y-m-d",$lastDay);
    
    $birthday='1974-4-1';
    
    /* 
    4  1  1 -0
    5  3  3 -2
    6  6  6 -5
    7  1  1 -0
    */
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";
    for($i=0;$i<6;$i++){
        echo "<tr>";
        for($j=0;$j<7;$j++){
            $date=$year.'-'.$month.'-'.$i*7+$j-($firstWeekStartDay-1);
            // mb_substr取生日年份
            $replace=mb_substr($birthday,0,4);
            // replace把生日更更改為目前年分，保留月日
            $replaceTo=str_replace($replace,date("Y"),$birthday);
            // strtotime變為秒數。
            $spDate=strtotime($replaceTo);
            $dateSec=strtotime($date);
            if($i==0 && $j>=$firstWeekStartDay ){
                // 如果今天等於生日這一天
                if($spDate==$dateSec){
                    echo "<td style='background-color:yellow;font-weight:bolder;font-size:24px;color:blue'>";
                }else if(date("w",strtotime($date))==0 || date("w",strtotime($date))==6){
                    echo "<td style='background-color:pink'>";
                }else{
                    echo "<td>";
                }
                echo    $i*7+$j-($firstWeekStartDay-1);
                echo "</td>";
            }else if($i>0){
                if($spDate==$dateSec){
                    echo "<td style='background-color:yellow;font-weight:bolder;font-size:24px;color:blue'>";
                }else if(date("w",strtotime($date))==0 || date("w",strtotime($date))==6){
                    echo "<td style='background-color:pink'>";
                }else{
                    echo "<td>";
                }
                if($i*7+$j-($firstWeekStartDay-1)<=$days){
                    echo $i*7+$j-($firstWeekStartDay-1);
                }else{
                    echo "&nbsp;";
                }
                echo "</td>";
                
            }else{
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
<!-- border-left:0' 把左邊的線取消，style='margin-left:-1px 把表格用左邊靠1PX -->

<div style='display:inline-block;width:50px;height:50px;border:1px solid lightgreen'></div><div style='display:inline-block;width:50px;height:50px;border:1px solid lightgreen;border-left:0'></div><div style='margin-left:-1px;display:inline-block;width:50px;height:50px;border:1px solid lightgreen'></div><div style='display:inline-block;width:50px;height:50px;border:1px solid lightgreen'></div><div style='display:inline-block;width:50px;height:50px;border:1px solid lightgreen'></div><div style='display:inline-block;width:50px;height:50px;border:1px solid lightgreen'></div>


</table>
<style>
.block-table{
    width:357px;
    display:flex;
    flex-wrap:wrap;
}
.item{
    margin-left:-1px;
    margin-top:-1px;
    display:inline-block;
    width:50px;
    height:50px;
    border:1px solid lightgreen; 
}
.item-header{
    margin-left:-1px;
    margin-top:-1px;
    display:inline-block;
    width:50px;
    height:25px;
    border:1px solid lightgreen;
    text-align: center;
    background-color: darkgreen; 
    color:lightgreen
}
</style>
<?php 

$month=4;
$year=date("Y");
echo "年".$year;
echo "<BR>";
echo "月份:".$month;
echo "<br>";
$firstDay=strtotime(date("Y-$month-1"));
$firstWeekStartDay=date("w",$firstDay);
echo "第一周的開始是第".$firstWeekStartDay."日";
$days=date("t",$firstDay);
$lastDay=strtotime(date("Y-$month-$days"));
echo "<br>";
echo "最後一天是".date("Y-m-d",$lastDay);

$birthday='1974-4-1';
$today=date("Y-m-d");
$days=[];
for($i=0;$i<42;$i++){
    // ("+$i days",strtotime($today)) 第i天，轉換為秒數，由date轉換為日期格式
    //假如today是9/3，i也是3了話，印出來為6號
    $days[]=date("d",strtotime("$i days",strtotime($today)));
}
/* echo "<pre>";
print_r($days);
echo "</pre>"; */
echo "<div class='block-table'>";
echo "<div class='item'>日</div>";
echo "<div class='item'>一</div>";
echo "<div class='item'>二</div>";
echo "<div class='item'>三</div>";
echo "<div class='item'>四</div>";
echo "<div class='item'>五</div>";
echo "<div class='item'>六</div>";
foreach($days as $day){

    echo "<div class='item'>$day</div>";

}
echo "</div>";


// 定義一個空數組 `$days` 用於存儲日期。
$days=[];
// 循環 42 次，這通常表示一個 6 行 x 7 列的日曆（每週 7 天，共 6 週）。
for($i=0;$i<42;$i++){
        // 計算第 $i 天與 $firstWeekStartDay 的差值。
    // 這個差值表示從 $firstDay 開始的第 $i 天偏移了多少天。
    $diff=$i-$firstWeekStartDay;
       // 使用 `strtotime()` 函數計算從 `$firstDay` 開始的第 `$diff` 天的日期。
    // 然後使用 `date()` 函數將計算出的日期格式化為 "Y-m-d"（即年-月-日）格式。
    // 最後將格式化的日期添加到數組 `$days` 中。
    $days[]=date("Y-m-d",strtotime("$diff days",$firstDay));
}
echo "<pre>";
print_r($days);
echo "</pre>";
echo "<div class='block-table'>";
echo "<div class='item-header'>日</div>";
echo "<div class='item-header'>一</div>";
echo "<div class='item-header'>二</div>";
echo "<div class='item-header'>三</div>";
echo "<div class='item-header'>四</div>";
echo "<div class='item-header'>五</div>";
echo "<div class='item-header'>六</div>";
foreach($days as $day){
    $format=explode("-",$day)[2];
    $w=date("w",strtotime($day));
    if($w==0 || $w==6){

        echo "<div class='item' style='background:pink'>$format</div>";
    }else{

        echo "<div class='item'>$format</div>";
    }
}
echo "</div>";

?>


</table>
<style>
.block-table{
    width:380px;
    display:flex;
    flex-wrap:wrap;
}
.item{
    margin-left:-1px;
    margin-top:-1px;
    display:inline-block;
    width:50px;
    height:50px;
    border:1px solid lightgreen;
    position:relative;
    transition: all 0.3s;
    background:white;
}
.item-header{
    margin-left:-1px;
    margin-top:-1px;
    display:inline-block;
    width:50px;
    height:25px;
    border:1px solid lightgreen;
    text-align: center;
    background-color: darkgreen; 
    color:lightgreen
}
.item:hover{
    background:yellow;
    transform: scale(1.3);
    font-weight:bold;
    color:blue;
    transition: all 0.3s;
    z-index:10;

}

.holiday{
    background:pink;
}



</style>
<?php 

$days=[];
for($i=0;$i<42;$i++){
    $diff=$i-$firstWeekStartDay;
    $days[]=date("Y-m-d",strtotime("$diff days",$firstDay));
}
/* echo "<pre>";
print_r($days);
echo "</pre>"; */
echo "<div class='block-table'>";
echo "<div class='item-header'>日</div>";
echo "<div class='item-header'>一</div>";
echo "<div class='item-header'>二</div>";
echo "<div class='item-header'>三</div>";
echo "<div class='item-header'>四</div>";
echo "<div class='item-header'>五</div>";
echo "<div class='item-header'>六</div>";
foreach($days as $day){
    $format=explode("-",$day)[2];
    $w=date("w",strtotime($day));
    if($w==0 || $w==6){

        echo "<div class='item holiday'>$format</div>";
    }else{

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
</body>
</html>


</body>

</html>