<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>計算距離自己下一次生日還有幾天</h2>
<?php
echo "今年是".date("Y");
echo "<br>";
echo "今天是".date("Y年m月d日");
echo "<br>";
$birthday="1974-1-7";
$start=strtotime(date('Y-m-d'));
$tb=str_replace(mb_substr($birthday,0,4),date("Y"),$birthday);
//("now"))取目前時間。
if(strtotime($tb)<strtotime('now')){
    $tb=str_replace(mb_substr($birthday,0,4),(date("Y")+1),$birthday);
}
$end=strtotime($tb);
$diff=$end-$start;
echo floor($diff/(60*60*24));
?>

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>
<?php
date_default_timezone_set("asia/taipei");
echo date("Y/m/d");
echo "<br>";
echo date("m月d日 l");
echo "<br>";
echo date("y-m-j H:i:s").(int)date("s");
echo "<br>";
$workday=(date("N")<6)? "工作日":"假日";
echo "今天是西元".date("Y年m月d日 l").date("Y年m月d日 l")."是$workday";

echo "<br>";
?>

<h2>利用迴圈來計算連續五個周一的日期</h2>
例:
<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>

<?php
$date='2024-04-25';
$week=[
    1=>'星期一',
    2=>'星期二',
    3=>'星期三',
    4=>'星期四',
    5=>'星期五',
    6=>'星期六',
    7=>'星期日',
];
for($i=0;$i<5;$i++){
    //strtotime將時間畫分為秒
    //("+$i week",strtotime($date) 前面的值會轉換一周家在後面的秒數中
    $day=strtotime("+$i week",strtotime($date));
    echo date("Y-m-d ",$day);
    // date("N"); 抓出現在的日期。
    echo $week[date("N",$day)];
    echo "<br>";
}

?>
    
</body>
</html>