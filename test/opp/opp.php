<?php


function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

class car
{

    // properties
    public $brand;
    public $type;


    // Methids/action
    public function __construct($name)
    {
        echo "Hi $name ~ object 誕生 ";
        echo "<br>";
    }

    public function intro()
    {
    $nowbrand = $this->brand;
    $nowtype = $this->type;
    $intro = "brand : $nowbrand , type : $nowtype";
    echo "$intro <br>";
    echo "<br>";
    }

    public function sell($data)
    
    {   

        $nowtype = $this->type;
        // 宣告中括弧內的值帶入
        $price = "$$data";
        echo "The price of the $nowtype is $price <br>";
        echo "<br>";
    }


}


$car = new car('新車主');
$car->brand = 'toyota';
$car->type = 'car';
dd($car);
$car->intro();
$car->sell(200000);

$bus = new car('新車主');
$bus->brand = 'Benz';
$bus->type = 'bus';
dd($bus);
$bus->intro();
$bus->sell(800000);

$motorcycle = new car('新車主');
$motorcycle->brand = 'yamaha';
$motorcycle->type = 'motorcycle';
dd($motorcycle);
$motorcycle->intro();
$motorcycle->sell(70000);