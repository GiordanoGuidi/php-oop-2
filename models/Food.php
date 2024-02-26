<?php 
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $weigth;
    public $ingredients;

    public function __construct($description,$brand,$price,$weigth,$ingredients)
    {
        parent::__construct($description,$brand,$price);
        $this->weigth =$weigth;
        $this->ingredients = $ingredients;
    }
}

$food1 = new Food ('Croccantini','Royal Gattini',30,'1kg','carote');
var_dump($food1);

?>