<?php 
require_once __DIR__ . '/Product.php';

class Accessory extends Product
{
    public $life_stage;

    public function __construct($brand,$description,$price,$image,$life_stage,)
    {
        parent::__construct($brand,$description,$price,$image);
        $this->life_stage = $life_stage;
    }
}

$accessory1 = new Accessory ('Croccantini','Royal Gattini',5,'Adult');
// var_dump($accessory1);

?>