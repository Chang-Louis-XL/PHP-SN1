<?php
class Car
{
    // 宣告Car有哪些屬性
    public $name;
    public $color;
    public $price;

    // 構造函式:初始化時設定車子的名稱 車子的顏色 車子的價格 且使用text函式介紹車子基本信息
    public function __construct($name, $color, $price)
    {
        // 設定車子的名稱、顏色、價格
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        // 調用自訂函式text 用以介紹車子的基本信息
        $this->text();
    }

    //自訂函式:介紹車子基本信息
    protected function text()
    {
        echo "this car is $this->name <br> color is $this->color <br> the car's price is $this->price <br>";
        echo "<br>";
    }
}

// 創建三個Car的實例 且顯示基本信息
$bugatti = new Car("Bugatti Centodieci", "白色", "900萬美元");
$lucid = new Car("Lucid Air", "黑色", "78,900 ~ 250,500美元");
$genesis = new Car("Genesis G90", "深藍色", "89,495美元");
