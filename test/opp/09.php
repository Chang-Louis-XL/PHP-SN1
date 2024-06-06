<?php
// 定義函數輸出資料
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


class Vehicle
{
    // 屬性
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    // 介紹信息
    public function intro()
    {
        $nowName = $this->name;
        $nowColor = $this->color;
        $introText = "Hello, I'm a $nowName - color $nowColor";
        echo "$introText <br>";
    }

    // 銷售信息
    public function sell($data)
    {
        $nowName = $this->name;
        $nowColor = $this->color;
        $result = "$nowName - $nowColor - $data";
        echo "$result <br>";
    }
}

// 定義一個Car
class Car extends Vehicle
{
    // 屬性
    public $numDoors;


    public function __construct($name, $color, $numDoors)
    {
        parent::__construct($name, $color);
        $this->numDoors = $numDoors;
    }

    // 汽車按喇叭
    public function honkHorn()
    {
        echo "{$this->name} honks the horn: Beep Beep! <br>";
    }
}


class Tank extends Vehicle
{

    public $armorThickness;

    public function __construct($name, $color, $armorThickness)
    {
        parent::__construct($name, $color);
        $this->armorThickness = $armorThickness;
    }

    // 坦克開炮
    public function fireCannon()
    {
        echo "{$this->name} fires its cannon: Boom! <br>";
    }
}

// 創建一個 Car 對象並進行操作
$car = new Car('car', 'red', 4);
dd($car);  //輸出 car 對象的信息
$car->intro();  // 輸出 car 的介紹
$car->sell(100);  // 輸出 car 的銷售
$car->honkHorn();  // 調用 car 的按喇叭

// 創建一個 Tank 對象並進行操作
$tank = new Tank('tank', 'green', 120);
dd($tank);  // 輸出 tank 對象的信息
$tank->intro();  // 輸出 tank 的介紹
$tank->sell(500);  // 輸出 tank 的銷售
$tank->fireCannon();  // 調用 tank 的開炮
