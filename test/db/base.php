<?php   
class DB {

    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school";

    protected $pdo;

    protected $table;

    protected function  array2sql($array)
    { foreach ($array as $key => $value) {
        $tmp [] ="`$key`='$value'" ;
    }
    return $tmp;
    }

    protected function select ($sql,...$arg)
    {
        if(!empty($arg[0]) && is_array($arg[0])){
            $tmp = $this -> array2sql($arg[0]);
            $sql = $sql . " where ". implode(" && ",$tmp);
        }
        if(!empty($arg[1])){
            $sql =$sql . $arg[1];
        }
        return $sql ;
    }


    public function all (...$arg){
        $sql= "select * form $this->table ";
        $sql = $this ->select($sql,...$arg);
    }
}