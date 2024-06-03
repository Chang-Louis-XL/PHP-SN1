<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, 'root', '');

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
function array2sql($array)
{
    foreach ($array as $key => $value) {
        $tmp[] = "`$key`=$value";
    }
    return $tmp;
}

all('students', " WHERE `id`<3");

function all($table, $where)
{
    global $pdo;
    $sql = "SELECT * FROM `{$table}` {$where}";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    echo $sql ;
    echo "<br>";
    return $rows;
    
}

update('students', ['dept' => '2'], ['dept' => '1']);

function update($table, $cols, $arg)
{
    global $pdo;

    $sql = "UPDATE `{$table}` SET";

    $tmp = array2sql($cols);

    $sql .= join(",", $tmp);
    print_r($tmp);
    echo "<br>";
    echo $sql;

    if (is_array($arg)) {
        $tt = array2sql($arg);
        $sql .= " WHERE " . join(" && ", $tt);
    } else {
        $sql .= " WHERE `id`='{$arg}'";
    }
    echo "<br>";
    print_r ($tt);
    echo "<br>";
    echo $sql ;
    return $sql;

}
insert('dept', ['code' => '801', 'name' => '綜合演藝學系']);

function insert($table,$cols)
{
    global $pdo;

    $sql = "INSERT INTO `{$table}` ";

    $sql .= "(`" . join("`,`", array_keys($cols)) . "`)";

    $sql .= " VALUES('" . join("','", $cols) . "')";

    echo "<br>";
    echo $sql;


}

echo "<br>";
del('student','1');

function del($table, $arg)
{
    global $pdo;

    $sql = "DELETE FROM `{$table}` WHERE ";

    if (is_array($arg)){
        $tmp = array2sql($arg);

        $sql .= join(" && ", $tmp);
    
    }else {
        $sql .= " `id`='{$arg}'";
    }
    echo $sql;
    return $sql;
    
}

save('dept', ['code' => '801', 'name' => '綜合演']);
function save ($table , $array)
{
    if(isset($array['id'])){
        update($table,$array,$array['id']);
    }else{
        insert($table,$array);
    }
}

