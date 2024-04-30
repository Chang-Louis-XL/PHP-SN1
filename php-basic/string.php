<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串處理</title>
</head>
<body>
    
<?PHP

$s='aaddw1123';
/* $s=str_replace('a','*',$s);
echo $s;
echo "<br>";
$s=str_replace('d','*',$s);
echo $s;
echo "<br>";
$s=str_replace('w','*',$s);
echo $s;
echo "<br>";
$s=str_replace('1','*',$s);
echo $s;
echo "<br>";
$s=str_replace('2','*',$s);
echo $s;
echo "<br>";
$s=str_replace('3','*',$s);
echo $s;
echo "<br>"; */
$s=str_replace(['a','d','w','1','2','3'],'*',$s);
echo $s;
echo "<br>";

$s='aaddw1123';
$s=str_repeat("*",mb_strlen($s));
echo $s;
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

<h2>字串分割</h2>
<ul>
    <li>
        將”this,is,a,book”依”,”切割後成為陣列
    </li>
</ul>
<?php
$s='this,is,a,book';
$result=explode(",",$s);
echo "<pre>";
print_r($result);
echo "</pre>";
?>

<h2>字串組合</h2>
<ul>
    <li>
        將上例陣列重新組合成“this is a book”
    </li>
</ul>

<?php
$result=join(' ',$result);
echo $result;

?>

<h2>子字串取用</h2>
<ul>
    <li>
        將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
    </li>
</ul>

<?php
$s='The reason why a great man is great is that he resolves to be a great man';
// substr 接受三個參數：要截取的字串、起始位置、截取長度。
// mb_substr 也接受三個參數：要截取的字串、起始位置、截取長度，但是它還接受一個額外的參數用於指定字串的字符編碼，這使得它更加靈活並且能夠正確處理各種字符編碼的字串。
$new=mb_substr($s,0,10);
echo $new;
echo "...";
//echo str_repeat(".",3);
?>

<hr>
<h2>尋找字串與HTML、css整合應用</h2>
<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>

<?php
$key='網頁';
$color='pink';
$size='24px';
$s="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$s=str_replace($key,"<span style='color:$color;font-size:$size'>$key</span>",$s);


echo $s;
?>
<hr>

</body>
</html>