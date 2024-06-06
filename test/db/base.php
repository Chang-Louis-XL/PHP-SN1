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


    public function all(...$arg)
    {
        $sql = "select * from $this->table ";
        $sql = $this->select($sql, ...$arg);

        echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
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


}




$Student = new DB('students');
$Dept = new DB('dept');
print_r($Student->all());

// all('students', " WHERE `id`<3");
