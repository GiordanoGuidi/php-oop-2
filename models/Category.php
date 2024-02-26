<?php 
require_once __DIR__ . '/Product.php';

class Category
{
    public $label;
    public function __construct($label)
    {
        $this->label =$label;
    }
}

// $category1 = new Category ('Cani');
// var_dump($category1);

?>