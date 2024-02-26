<?php 
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $size;
    public $taste;
    public $life_stage;
    public $animal_size;

    public function __construct($brand,$size,$description,$price,$life_stage,$animal_size,$taste,$image)
    {
        parent::__construct($description,$brand,$price,$image);
        $this->size =$size?: null;
        $this->taste = $taste?: null;
        $this->life_stage = $life_stage?: null;
        $this->animal_size = $animal_size?: null;
    }
}

$food1 = new Food ('Royal Canin','mini','','','','','',
'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000');
$food2 = new Food ('Almo Nature Holistic Maintenance',
'Medium','','','','Large','Tonno e Riso',
'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg');


?>