<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $acc=$_POST['acc'];
  $pw=$_POST['pw'];

  if($acc=='admin' && $pw =='0000'){
    header("location:result.php?acc=$acc");
  }else{
    header("location:error.php?acc=$acc");
  }

?>
</body>

</html>