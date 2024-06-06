<?php

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";

}

class People
{
    public $name;

    public $gender;

    public $country;

    public function champion($data)
    {
        $nowName = $this->name;
        $nowCountry = $this->country;
        $nowGender = $this->gender;
        // 名字顏色hight light
        $championRecord = "<div style= color:red;font-size:20px;>$nowName  </div><br> THE $nowCountry $nowGender Won $data championship!!!";
        echo "$championRecord<br>";
    }

}
// 詹皇
$LebronJames = new People();
$LebronJames->name = 'Lebron James(詹皇)';
$LebronJames->gender = 'men';
$LebronJames->country = ' USA';
echo "<br>";
dd($LebronJames);

$LebronJames->champion(4);
echo "<br>";

// 謝淑薇
$HsiehSuWei = new People();
$HsiehSuWei->name = 'Hsieh Su-Wei(謝淑薇)';
$HsiehSuWei->gender = 'women';
$HsiehSuWei->country = ' Taiwan';
echo "<br>";
dd($HsiehSuWei);

$HsiehSuWei->champion(36);
