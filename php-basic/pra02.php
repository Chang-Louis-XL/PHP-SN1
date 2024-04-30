<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習2024-04-15</title>
</head>
<style>
    table{
        border-collapse: collapse;
    }
    td{
        border:1px solid gray;
        padding: 3px 6px;
        font-size:18px;
    }
    #grid table{
        border-collapse: collapse;
    }
    #grid td{
        border:1px solid gray;
        padding: 3px 6px;
        font-size:18px;
    }
    #grid tr:nth-child(1) td,
    #grid td:nth-child(1){
        background:black;
        color:#CCC;
    }

</style>
<body>

<!-- 外層for包內層for，故會待內層跑完後才會在跳到外層下一次，
並實際值會加到10，但因不符合所以變false故不會列echo出10。 -->

<h1>九九乘法表-簡單</h1>

<?php
echo "<table>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        echo "<td>".$j . " x " . $i . " = " . ($i*$j)."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>


<h2>九九乘法表-棋盤式表格</h2>
<?php
echo "<table id='grid'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";
// 第一格J與I為0時，設為空值
        if($j==0 && $i==0){
            echo " ";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
            echo ($j * $i);
        }

        /* 同學內容: if($i*$j!=0){
            echo $i*$j;
        }else if($j==0 && $i!=0){
            echo $i;
        }else if($j!=0 && $i==0){
            echo $j;
        }else{
            echo " ";
        } */
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
<h2>九九乘法表-階梯式表格</h2>
<?php
echo "<table id='grid'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";

        // || ($j!=0 && $i>$j) 為傾斜方式，刪除相乘下重複的內容。
        if(($j==0 && $i==0) || ($j!=0 && $i>$j)){
            echo " ";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
            echo ($j * $i);
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

<h2>尋找字元(使用while)</h2>
<ul>
    <li>給定一個字串句子</li>
    <li>給定一個單字或字母</li>
    <li>尋找相符的內容</li>
    <li>印出尋找到的單字或字母所在句子中的位置</li>
</ul>
<p>例:伊朗13日深夜起，朝以色列發射超過300架無人機及飛彈，最終只釀成以國輕微損失，甚至99％目標都遭到攔截。</p>

<?php
//取出部分字串? 並計算字串長度(尋找計算值的長度-1)
// $str= 字串
// $target= 尋找的字
// $position=0起始位置

//當尋找字，不等於(字串、起始位置、取字的長度)

$str="伊朗13日深夜起，朝以色列發射超過300架無人機及飛彈，最終只釀成以國輕微損失，甚至99％目標都遭到攔截。";
$target="以色列";
$position=0;
while($target!=mb_substr($str,$position,mb_strlen($target))){

// echo "p=".$position;
// echo", substr= ". mb_substr($str,,$position,mb_strlen($position));
// echo "<br>";
//起始的位置加1

$position=$position+1;
}

echo $target."的位置在:".$position;
echo "<br>";
echo mb_strpos($str,$target)


?>

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