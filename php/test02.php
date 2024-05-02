<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!empty($_POST)) {
        if (empty($_POST['height'])) {
            echo "請輸入正確的身高";
        } else {
            echo $_POST['height'];
            $height = $_POST['height'];
        }
        if (empty($_POST['weight'])) {
            echo "請輸入正確體重";
        } else {
            echo $_POST['weight'];
            $weight = $_POST['weight'];
        }
    }else{
        if (empty($_GET['height'])){
            echo "請輸入正確身高";
        }else {
            echo $_GET['height'];
            $height=$_GET['height'];
        }
        if(empty($_GET['weight'])){
            echo "請輸入正確體重";
        }else{
            echo $_GET['weight'];
            $weight=$_GET['weight'];
        }
    }
    echo "<hr>";
 if (!empty($height) && !empty($weight)){
 $bmi= $weight /(($height/100)*($height/100));
echo "你的BMI為:" .round($bmi,2);

}else{
    echo "請輸入正確的身高體重";
}

    ?>
</body>

</html>