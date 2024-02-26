<?php 
require_once __DIR__ . '/Product.php';

class Game extends Product
{
    public $life_stage ;

    public function __construct($description,$brand,$price,$life_stage)
    {
        parent::__construct($description,$brand,$price);
        $this->life_stage = $life_stage;
    }
}

// $game1 = new Game ('Topo','Kong',4,'Kitten');
// var_dump($game1);

?>