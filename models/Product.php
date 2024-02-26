<?php 
require_once __DIR__ . '/Food.php';
class Product
{
    public $description;
    public $brand;
    public $price;
    public $image;

    public function __construct($description,$brand,$price,$image)
    {
        $this->description = $description;
        $this->brand = $brand;
        $this->price = $price;
        $this->image = $image;
    }

    //metodo che crea la stringa per il prezzo
    public function getPrice()
    {
        echo 'Prezzo: ' .$this->price . '€';
    }
}

// $product1 = new Product('croccantini','Royal Canini',18);
// var_dump($product1->getPrice());
$products =[$food1,$food2];
var_dump($products)




?>