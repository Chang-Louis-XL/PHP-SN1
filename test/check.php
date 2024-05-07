<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  session_start();
  $acc=$_POST['acc'];
  $pw=$_POST['pw'];

  if($acc=='admin' && $pw =='0000'){
    $_SESSION['login']=$acc;
    header("location:result.php");
  }else{
    $_SESSION['error'] = "帳號或密碼錯誤";
    header("location:login.php");
  }

?>
</body>

</html>