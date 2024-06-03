<?php

// 此為類別
class Animal
{
  public $name = 'animal';
  protected $age = 12;
  private $weight = 20;

  public function __construct($name)
  {
    $this -> name = $name;
  }

  public function run()
  {
    echo "$this->name is running";
  }
  private function speed()
  {
    return 'hight speed';
  }
}
// 父類別的資訊已帶入
class Cat extends Animal
{
  // public $name = 'cat';

  public function run()
  {
    echo "cat is running";
    // this代表為這個位置
    echo $this->age;
  }
  private function speed()
  {
    return 'low speed';
  }
}

// 此新增出來為物件
// $cat = new Animal();
// echo $cat->name; 
echo $cat->$age; 
// echo $cat->$weight; 

// $cat = new Cat() ; 
// echo $cat -> name ; 
// echo $cat -> run();

// $ani = new Animal('join') ;
// $ani -> run ();
// echo "<br>";
// echo $ani -> name ;

?>