<?php 
require_once __DIR__ . '/Product.php';

class Category
{
    public $label;
    public $icon;
    public function __construct($label,$icon)
    {
        $this->label =$label;
        $this->icon = $icon;
    }
}

?>