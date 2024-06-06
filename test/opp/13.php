<?php
// 列印
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
// 定義物件共同點
class Race
{
    // 定義共同可外部繼承且公開的properties
    public $lifespan;
    public $name;

    // 建構子:初始化種族的名稱、生命週期，是優先會執行的內容
    public function __construct($name, $lifespan)
    {
        // 將public properties指定到括號的變數中
        $this->lifespan = $lifespan;
        $this->name = $name;

        // 將private的method呼叫到public中以取用
        $this->intro();
    }


    private function intro()
    {
        // 將上述的public properties呼叫到此method
        $nowlifespan = $this->lifespan;
        $nowname = $this->name;
        echo "此人的種族是{$nowname}，壽命大約為{$nowlifespan} 年<br>";
    }

    // 定義共同可外部繼承且公開的method
    public function poison($poison)
    {
        $nowlifespan = $this->lifespan;
        $nowname = $this->name;
        echo "注意事項：{$nowname}一族雖可活{$nowlifespan}年，但{$poison}對他們有致命性<br>";
    }
}

// 創立新物件
$elf = new Race('精靈', 500);
/* $elf->lifespan = '500';
$elf->name = '精靈'; */
// 列印出$elf物件中的properties
dd($elf);

// 將$elf中的資料帶入public method中
// $elf->intro();
$elf->poison('木炭');

$human = new Race('人類', 100);
/* $human->lifespan = "100";
$human->name = '人類'; */
dd($human);

// $human->intro();
$human->poison('漂白水');
