<?php

class DB
{
     // 類別宣告變數後面只能加字串
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    protected $pdo;
    protected $table;

    public function __construct($table)
    {
        $this->pdo = new PDO($this->dsn, 'root', '');
        // = $table;指construct($table)的table
        // $this->table指protected $table的table
        $this->table = $table;
    }

    protected  function array2sql($array)
    {
        foreach ($array as $key => $value) {
            $tmp[] = "`$key`='$value'";
        }

        return $tmp;
    }

    protected function select($sql, ...$arg)
    {
        if (!empty($arg[0]) && is_array($arg[0])) {
            $tmp = $this->array2sql($arg[0]);
            $sql = $sql . " where " . implode(" && ", $tmp);
        }

        if (!empty($arg[1])) {
            $sql = $sql . $arg[1];
        }

        return $sql;
    }

    // 當function all 被宣告時，宣告中的括弧帶入值給all，再將內容按照順序給select，最後select回傳$sql

    public function all(...$arg)
    {
        $sql = "select * from $this->table ";
        $sql = $this->select($sql, ...$arg);

        echo $sql;
        // fetch(PDO::FETCH_ASSOC)回傳資料表中全部欄值
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }



    function find($arg)
    {
        $sql = "SELECT * FROM `{$this->table}` WHERE ";

        if (is_array($arg)) {

            $tmp = $this->array2sql($arg);

            $sql .= join(" && ", $tmp);
        } else {

            $sql .= " `id`='{$arg}'";
        }

        // echo $sql;
  // fetch(PDO::FETCH_ASSOC)回傳資料表中第一欄值
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    function save($array)
    {
        if (isset($array['id'])) {
            //update
            //建立SQL語法
            $sql = "UPDATE `{$this->table}` SET ";

            //使用迴圈將欄位名稱和值組合成字串
            $tmp = $this->array2sql($array);
            $sql .= join(",", $tmp);
            $sql .= " WHERE `id`='{$array['id']}'";
        } else {
            //insert
            $sql = "INSERT INTO `{$this->table}` ";

            $sql .= "(`" . join("`,`", array_keys($array)) . "`)";

            $sql .= " VALUES('" . join("','", $array) . "')";
        }
        //echo $sql;
        return $this->pdo->exec($sql);
    }

    function del($arg)
    {

        $sql = "DELETE FROM `{$this->table}` WHERE ";

        if (is_array($arg)) {
            $tmp = $this->array2sql($arg);

            $sql .= join(" && ", $tmp);
        } else {
            $sql .= " `id`='{$arg}'";
        }

        return $this->pdo->exec($sql);
    }

    function math($math, $col, ...$arg)
    {
        $sql = "SELECT $math(`$col`) FROM `{$this->table}`";
        $sql = $this->select($sql, ...$arg);

        //echo $sql;
            // fetchColumn該欄的值
        return $this->pdo->query($sql)->fetchColumn();
    }


    function count(...$arg)
    {
        $sql = "SELECT COUNT(*) FROM `{$this->table}`";
        $sql = $this->select($sql, ...$arg);


        // echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }

    


    function q($sql)
    {
        return $this->pdo->query($sql)->fetchAll();
    }
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


$Student = new DB('students');
$Dept = new DB('dept');
// echo "<pre>";
// $Dept->del(21);
// echo "</pre>";

// print_r($Student->all());
// print_r($Student->all([],"limit 0,20"));
// $dept = $Dept->find(2);
// dd($dept);
// $dept['name'] = '電子商務系';
// dd($dept);
// $Dept->save($dept);


echo $Student->count();
// echo "<br>";
// echo $Student->math('max', 'graduate_at');



