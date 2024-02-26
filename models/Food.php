<?php 
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $life_stage;
    public $taste ;


    public function __construct($title,$image,$price,$life_stage = null,$taste = null)
    {
        parent::__construct($title,$image,$price);
        $this->taste = $taste?: null;
        $this->life_stage = $life_stage?: null;
    }
}

?>