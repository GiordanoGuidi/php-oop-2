<?php 
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';


class Accessory extends Product
{
    public $life_stage;

    public function __construct($title,$image,$price,Category $label,$life_stage)
    {
        parent::__construct($title,$image,$price);
        $this->life_stage = $life_stage;
    }
}

?>