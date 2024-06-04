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

    public function __construst($table)
    {
        $this->pdo = new PDO($this->dsn, 'root' , '');
        $this->table = $table ; 
    }

    protected function select($sql,...$arg)
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

//這個TABLE 對照哪個
    public function all(...$arg){
        $sql= "select * form $this->table ";
        $sql = $this ->select($sql,...$arg);
       
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    
}

$Student = new DB('students');
echo $Student->all(['id'<3]);