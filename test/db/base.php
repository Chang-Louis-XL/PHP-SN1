<?php

class DB{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    protected $pdo;
    protected $table;

    public function __construct($table){
        $this->pdo = new PDO($this->dsn,'root','');
        $this->table=$table;
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

    public function all(...$arg)
    {
        $sql = "select * from $this->table ";
        $sql = $this->select($sql, ...$arg);
        echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }


}

$Student = new DB('students');

print_r($Student->all());