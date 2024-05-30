<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, 'root', '');

function all($table, $where)
{
    global $pdo;
    // 重符號、主要使用在欄位名稱或資料名稱
    $sql = "SELECT * FROM `{$table}` {$where} ";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // return把值傳遞給all()
    return $rows;
}

function find($tabel, $arg)
{
    global $pdo;

    if (is_array($arg)) {
        foreach ($arg as $key => $value) {
            $tmp[] = "`$key`='{$value}'";
        }
        $sql = "SELECT * FROM `{$table}` WHERE " . join(" && ", $tmp);
    } else {
        $sql = "SELECT * FROM `{$table}` WHERE `id`='{$arg}'";
    }

    $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}


/**
 * 在頁面上快速顯示陣列內容
 * direct dump
 * @param $array 輸入的參數需為陣列
 */
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
