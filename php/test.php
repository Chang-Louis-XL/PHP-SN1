<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BM</title>
</head>

<body>
    <h1>計算BMI</h1>
    <form action="test02.php" method="POST">
        <div>
            <label for="height">身高</label>
            <input type="number" name="height" id="height">
        </div>
        <div>
            <label for="weight">體重</label>
            <input type="number" name="weight" id="weight">
        </div>
        <div>
            <input type="submit" value="開始計算">
            <input type="reset" value="清除重算">
        </div>
    </form>
    <br>
    <h1>計算BMI</h1>
    <form action="test02.php" method="GET">
        <div>
            <label for="height">身高</label>
            <input type="number" name="height" id="height">
        </div>
        <div>
            <label for="weight">體重</label>
            <input type="number" name="weight" id="weight">
        </div>
        <div>
            <input type="submit" value="開始計算">
            <input type="reset" value="清除重算">
        </div>
    </form>

</body>

</html>