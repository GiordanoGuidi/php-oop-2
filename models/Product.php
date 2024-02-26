<?php 
require_once __DIR__ . '/Food.php';
class Product
{
    public $title;
    public $price;
    public $image;

    public function __construct($title,$image,$price)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
    }

    //metodo che crea la stringa per il prezzo
    public function getPrice()
    {
        echo 'Prezzo: ' .$this->price . '€';
    }
}
?>