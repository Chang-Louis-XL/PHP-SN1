<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "練習題:";

echo "<br>";
echo '$a=10';
echo "<br>";
echo '$b=50';

$a=10;
$b=50;

echo "<br>";
echo "<br>";
echo "交換後";

$tmp=$a;
$a=$b;
$b=$tmp;

echo "<br>";
echo '$a='.$a;
echo "<br>";
echo '$b='.$b;

echo "<hr>";
$score=80;
$level=($score>=60)?'及格':'不及格';
echo "成績為".$score;
echo "<br>";
echo "是否及格:".$level;
echo "<br>";
echo "<hr>";

$score=70;
if($score >= 90 && $score <= 100){
    $level= "A";
}
else if ($score >= 80 && $score <= 89){
    $level= "B";
}
else if ($score >= 70 && $score <= 79){
    $level= "C";
}
else if ($score >= 60 && $score <= 69){
    $level= "D";
}
else if ($score >= 0 && $score <= 59){
    $level= "E";
}
echo "你的成績是" .$score;
echo "<br>";
echo "你的成績是" .$level;
echo "<br>";
echo "<hr>";

switch($level){
    case 'A':
        $words="表現優異，值得肯定!";
    break ;
    case 'B':
        $words="表現優異，值得肯定!";
    break ;
    case 'C':
        $words="表現優異，值得肯定!";
    break ;
    case 'D':
        $words="表現優異，值得肯定!";
    break ;
    case 'E':
        $words="表現優異，值得肯定!";
    break ;
}
echo "<br>";
echo $words;



?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>