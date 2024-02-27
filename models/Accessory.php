<?php 
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';


class Accessory extends Product
{
    public $life_stage;
    public $label;
    public $icon;



    public function __construct($title,$image,$price,Category $label,$life_stage = null)
    {
        parent::__construct($title,$image,$price);
        $this->life_stage = $life_stage;
        $this->label = $label;

    }
}

?>