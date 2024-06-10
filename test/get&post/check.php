<?php
$acc=$_POST['acc'];
$pw=$_POST['pw'];
// 宣告一個名為 $pw 的變數並為其分配 POST 資料的值，其鍵為 'pw'
// 這個變數可能用於存儲用戶輸入的密碼。

if($acc=='0' && $pw=='1234'){
    header('location:result.php?acc='.$acc);
}else{
    header("location:error.php?acc=$acc");
}