<?php 
class Product
{
    public $description;
    public $brand;
    public $price;

    public function __construct($description,$brand,$price)
    {
        $this->description = $description;
        $this->brand = $brand;
        $this->price = $price;
    }
}

$product1 = new Product('croccantini','Royal Canini',18);
var_dump($product1);


?>