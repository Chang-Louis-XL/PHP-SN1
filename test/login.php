<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>請登入</h1>
    <?php
    session_start();
    if (isset($_SESSION['login']) && ($_SESSION['login'] == 'admin')) {
        echo "已登入";
        echo "<br>" ;
        echo "<a helf='logout.php'>登出</a>";
        }else{
        if(isset($_SESSION['error'])){
            echo "<span style='color=red'>{$_SESSION['error']}</spen>";
        }

        ?>
        <form action="check.php" method="post">
            <div>
                <lable for="acc">帳號</lable>
                <input type="text" name="acc" type="acc">
            </div>
            <div>
                <lable for="pw">密碼</lable>
                <input type="password" name="pw" type="pw">
            </div>
            <div>
                <input type="submit" value="登入">
                <input type="reset" value="重置">
            </div>
        <?php }
    ?>
    </form>
</body>

</html>