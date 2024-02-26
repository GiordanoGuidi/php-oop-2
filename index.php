<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Game.php';
require_once __DIR__ . '/models/Accessory.php';
require_once __DIR__ . '/models/Category.php';


$dog_label = new Category ('dog');
$cat_label = new Category ('cat');
$fish_label = new Category ('fish');


$food1 = new Food ('Royal Canin mini',
'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',5,$dog_label);
$food2 = new Food ('Almo Nature Holistic Maintenance Medium Large',
'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',6,$dog_label);
$food3 = new Food ('Almo Nature Cat Daily Lattina','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',15,$cat_label);


$products =[$food1,$food2,$food3];
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