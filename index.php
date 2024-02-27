<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Game.php';
require_once __DIR__ . '/models/Accessory.php';
require_once __DIR__ . '/models/Category.php';


$dog_label = new Category ('dog');
$cat_label = new Category ('cat');
$fish_label = new Category ('fish');
$bird_label = new Category ('bird');



$food1 = new Food ('Royal Canin mini',
'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',5,$dog_label);
$food2 = new Food ('Almo Nature Holistic Maintenance Medium Large',
'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',6,$dog_label);
$food3 = new Food ('Almo Nature Cat Daily Lattina','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',15,$cat_label);
$food4= new Food ('Mangime per pesci Guppy in fiocchi','https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',3,$fish_label);
$accessory1 = new Accessory ('Voliera Wilma in legno','https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',40,$bird_label);
$accessory2 = new Accessory ('Cartucce Filtranti per Filtro EasyCrystal','https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',10,$fish_label);
$game1 = new Game ('Kong Classic','https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',8,$dog_label);
$game2 = new Game ('Topini di peluche Trixie','https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',3,$cat_label);


$products =[$food1,$food2,$food3,$food4,$accessory1,$accessory2,$game1,$game2];
var_dump($products);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--BOOTSTRAP-->
</head>
<body>
<?php foreach($products as $product): ?>
    <div class="card" >
        <img src="<?= $product->image?>" class="card-img-top" alt="...">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
        </ul>
    </div>
    <?php endforeach; ?>




    <!-- <ul>
        <?php foreach($products as $product): ?>
        <li>
            <?php if($product->taste): ?>
            <p><?= $product->taste?></p>
        </li>
        <?php endif ?>
        <?php endforeach; ?>
    </ul> -->
    
</body>
</html>