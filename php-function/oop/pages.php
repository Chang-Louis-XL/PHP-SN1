<?php include_once "base.php"; ?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>分頁</title>  
</head>

<body>
  <?php
  $total = $Student->count();  // 計算 $Student 資料表中的總筆數，可能需要修改以符合你的資料結構
  $div = 20;  // 每頁顯示的資料筆數
  $pages = ceil($total / $div);  // 計算總頁數，向上取整

  $now = $_GET['p'] ?? 1;  // 取得 URL 參數中的「p」，代表當前頁碼，預設為 1
  $start = ($now - 1) * $div;  
  // 根據當前頁碼和每頁筆數算出要從第幾筆資料開始取，如第一頁(2-1)*20=20 ，limit從0開始計算，即可從第21開始索取資料。

  $rows = $Student->all([], " limit $start,$div");  
  // 呼叫 (可能為自定義) 的 $Student 物件方法，取得指定範圍的資料。
  //空陣列 ([]) 表示不應用過濾條件，從表中選擇所有行，若沒加上，會變成不完整的格式。

  foreach ($rows as $idx => $row) {
    echo ($idx + 1) . '=>' . $row['name'] . "<br>";  // 循环遍历取得的資料，显示序号 (idx + 1)以利閱讀，否則從0開始，和欄位「name」的值。
  }

  
  ?>
  <hr> 

  <?php

  if ($now - 1 > 0) {
    echo "<a href='?p=" . ($now - 1) . "'> < </a>";  // 如果不是第一页，显示「<」前往上一页的链接
  }

  for ($i = 1; $i <= $pages; $i++) {
    echo "<a href='?p=$i'> $i </a>";  // 循环生成从第 1 页到最后一页的页码链接
  }

  if ($now + 1 <= $pages) {
    echo "<a href='?p=" . ($now + 1) . "'> > </a>";  // 如果不是最后一页，显示「>」前往下一页的链接
  } else {
    echo ' > ';  // 否則只显示「>」
  }

  ?>
</body>

</html>
