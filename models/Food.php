<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Food extends Product
{
    public $life_stage;
    public $taste;
    public $label;
    public $icon;


    public function __construct($title, $image, $price, Category $label, $icon, $life_stage = null, $taste = null,)
    {
        parent::__construct($title, $image, $price);
        $this->taste = $taste ?: null;
        $this->life_stage = $life_stage ?: null;
        $this->label = $label;
        $this->icon = $icon;
    }
}
