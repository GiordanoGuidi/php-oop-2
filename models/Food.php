<?php 
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $weigth;
    public $taste;
    public $life_stage;
    public $race;

    public function __construct($description,$brand,$price,$weigth,$taste,$life_stage,$race)
    {
        parent::__construct($description,$brand,$price);
        $this->weigth =$weigth;
        $this->taste = $taste;
        $this->life_stage = $life_stage;
        $this->race = $race;
    }
}

// $food1 = new Food ('Croccantini','Royal Gattini',30,'1kg','carote e piselli','Sterilised','Persian');
// var_dump($food1);

?>