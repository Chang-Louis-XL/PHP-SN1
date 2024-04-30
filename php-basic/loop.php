<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop</title>
</head>
<style>


    *{font-size: 30px;
      font-weight: bold;  
     } 

     tr,td{
        border: 1px solid black;
     }
</style>
<body>
<h2>迴圈 :</h2>
<p>for: 明確重複;  while: 明確的停止條件<br> 
for($i=0;$i<10;$i++){ <br> 
    echo $i*10;<br> 
}<br> 
echo $i; </p>

<p>
<?php
for($i=0;$i<10;$i++){
    echo $i*10;
    echo "<br>";
}
echo "<br>";
echo "原始值=".$i;
   ?>
</p>

<table>
    <tr>
        <td>$i</td>
        <td>$i*10</td>
        <td>echo</td>
        <td>$i++</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
    </tr>
    <tr>
        <td>1</td>
        <td>10</td>
        <td>10</td>
        <td>2</td>
    </tr>
    <tr>
        <td>...</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>9</td>
        <td>90</td>
        <td>90</td>
        <td>10</td>
    </tr>
    <tr>
        <td>end</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
<h2>while :</h2>
<p>$score=10; <br>
echo "原始成績=".$score; <br>
while($score<60){ <br>
    $score=$score+10; <br>
}</p>
<?php
$score=10;
echo "原始成績=".$score;
while($score<60){
    $score=$score+10;
}
echo "<br>";
echo "調整結果=" .$score;
?>

<h2>foreach :</h2>
<p>$score=[60,22,72,10,80];<br>
foreach($scroe as $idx => $val){<br>
    echo '第' . $idx . '位同學的成績為' . $val ;<br>
}</p>

<table>
    <tr>
        <td>idx</td>
        <td>val</td>
    </tr>
    <tr>
        <td>0</td>
        <td>60</td>
    </tr>
    <tr>
        <td>1</td>
        <td>22</td>
    </tr>
    <tr>
        <td>3</td>
        <td>72</td>
    </tr>
</table>

<h2>巢狀結構 :</h2>
<?php 

$show=false;
for($i=0 ; $i<10 ; $i++){
    echo $i*10 ;

    if($i>5 && $show==false){
        echo "<br>";
        echo "執行一半了...";
        $show=true;
    }
    echo "<br>";
}
echo "<br>";

// 若指定值為0或空值，比較後狀況為False
//if中只放變數的應用
$a=true;
if($a){
    echo "TRUE";
}else{
    echo "FALSE";
}
?>

</body>
</html>