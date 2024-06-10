<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
<h1>登入成功</h1>  
<?php

$acc=$_GET['acc'];
// 宣告一個名為 $acc 的變數並為其分配 POST 資料的值，其鍵為 'acc'
// 這個變數可能用於存儲用戶輸入的密碼。

?>
歡迎<?=$_GET['acc'];?>

<p>
        <a href="login.php?login=1">回登入頁</a>
    </p>

</body>
</html>