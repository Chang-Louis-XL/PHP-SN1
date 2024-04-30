<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>判斷成績及格學生</h2>
<h3>給定一個成績數字，判斷是否及格(60)分</h3>
<?php
$score=0;
if($score>=60){
    $result="及格";
}else{
    $result="不及格";
}
echo "判斷為".$result;

?>
<h2>分配成績等級</h2>

<ul>
    <li>0 ~ 59 => E</li>
    <li>60 ~ 69 => D</li>
    <li>70 ~ 79 => C</li>
    <li>80 ~ 89 => B</li>
    <li>90 ~ 100 => A</li>
</ul>
<?php

//因系統會往下推算，故第一行不符合及至下一行
$level='';
if($score=90 && $score <=100){
$level="A";
}else if ($score>=80 ){
$level="B";
}else if ($score>=70 ){
$level="C";
} else if ($score>=60){
$level="D";
} else if ($score>=0 ){
$level="E";
} else{
    $level="成績必須在0~100之間，請重新輸入";
}
echo "等級判斷為".$level;
?>

<?php

switch($level){
    case 'A':
        $words="表現優異，值得肯定!";
        $color='#156943';
    break ;
    case 'B':
        $words="幹得好!";
        $color='#76bb1d';
    break ;
    case 'C':
        $words="再接再力!";
        $color='#514df7';
    break ;
    case 'D':
        $words="持續努力!";
        $color='#cd32aa';
    break ;
    case 'E':
        $words="笑你!";
        $color='red';
    break ;
    default;
}
echo "<br>";

// if($level=='A' || $level=='B' || $level=='C' ||$level=='D'){
//     "<span style='font-size:32px;color:red'>"
// }else{
//     "<span style='font-size:32px;color:blue'>"
// };

echo "<span style='font-size:32px;color:$color'>";
echo $words;
echo "</span>";
?>

<?php
echo "<hr>" ;

$year = 2400 ;
echo "年份為".$year;
echo "<br>" ;
if($year % 4 == 0 && $year %100!=0 || $year %400==0){
echo $year ."是潤年";
}else {
    echo $year ."是平年";
}
?>

 <h2>使用for迴圈來產生以下的數列</h2>


<h2>簡單迴圈練習</h2>
<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
</ul>

<?php
$n=100;
for($i=1;$i<$n;$i=$i+2){
    echo $i;
    echo ",";
}
echo "<hr>";
$n=25;
for($i=1;$i<$n;$i++){
    echo $i*10;
    echo ",";
}


echo "<hr>";
$count=0;

for($i=3;$i<100;$i++){
    $check=true;
    for($j=2;$j<=sqrt($i);$j++){
         if($i%$j==0){
            $check=false;
         }
         $count++;
    }
    
    if($check==true){
        echo $i.",";
    }
    $count++;
}

echo "迴圈次數:".$count;


?>
</body>
</html>